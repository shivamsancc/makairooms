<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'partner','middleware' => ['partner_check']], function() {

//===================================================
Route::get('/dashboard', 'partner\dashbordController@partnerdashboard')->name('partnerdashboard');
//====================Property route================
Route::get('/property/all', 'partner\property\propertyController@all_properties')->name('partnerallproperties');
Route::get('/property/add', 'partner\property\propertyController@add_property')->name('partneraddproperty');
Route::get('/property/getp/{id}', 'partner\property\propertyController@eidtproperty')->name('partnereidtproperty');
Route::post('/property/update/{id}', 'partner\property\propertyController@updateproperty')->name('partnerupdateproperty');
Route::get('/property/delete/{id}', 'partner\property\propertyController@deleteproperty')->name('partnerdeleteproperty');
//================================Property Item======================
Route::get('/property/item/', 'partner\property\propertyController@propertyitemindex')->name('partnerpropertyitemindex');
Route::get('/property/item/add', 'partner\property\propertyController@createpropertyitem')->name('partnercreatepropertyitem');
Route::post('/property/item/store', 'partner\property\propertyController@createpropertystore')->name('partnercreatepropertystore');
Route::get('/property/item/getp/{id}', 'partner\property\propertyController@edititem')->name('partnereidtpropertyitem');
Route::post('/property/item/update/{id}', 'partner\property\propertyController@updateitem')->name('partnerupdatepropertyitem');
Route::get('/property/item/delete/{id}', 'partner\property\propertyController@deleteitem')->name('partnerdeletepropertyitem');
//============================PG=================
Route::post('/pr/property/pgpost', 'partner\property\propertyController@add_pgpost')->name('partneradd_pgpost');


// //===============================Blog Post========================================
// Route::get('/blog/all', 'partner\blog\blogController@index')->name('all_blogs');
// Route::get('/blog/add', 'partner\blog\blogController@create')->name('all_blogs_add');
// Route::post('/blog/add/store', 'partner\blog\blogController@store')->name('all_blogs_store');
// Route::get('/blog/add/edit/{id}', 'partner\blog\blogController@blogedit')->name('blogedit');
// Route::post('/blog/post/update/{id}', 'partner\blog\blogController@blogupdate')->name('blogupdate');
// Route::get('/blog/delete/{id}', 'partner\blog\blogController@destroy')->name('blog_delete');

// Route::get('/blog/cat/all', 'partner\blog\blogController@categoryindex')->name('all_blogs_cat');
// Route::post('/blog/cat/all', 'partner\blog\blogController@categorystore')->name('all_blogs_cat_store');
// Route::get('/blog/cat/edit/{id}', 'partner\blog\blogController@editcategory')->name('editcategory_blog');
// Route::post('/blog/cat/update/{id}', 'partner\blog\blogController@updatecategory')->name('all_blogs_cat_update');
// Route::get('/blog/cat/delete/{id}', 'partner\blog\blogController@categorydestroy')->name('all_blogs_cat_delete');

// Route::post('ckeditor/upload', 'partner\blog\blogController@upload')->name('ckeditor.upload');



});
