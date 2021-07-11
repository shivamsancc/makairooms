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
Route::group(['prefix' => 'admin','middleware' => ['admin_check']], function() {

//===================================================
Route::get('/dashboard', 'admin\DashboardController@admindashboard')->name('admindashboard');


//===================================================
Route::get('/partner/all', 'admin\partner\PartnerController@allpartners')->name('allpartners');
Route::get('/partner/add', 'admin\partner\PartnerController@addpartners')->name('addpartners');
Route::post('/partner/addpartnerspost', 'admin\partner\PartnerController@addpartnerspost')->name('addpartnerspost');

Route::get('/partner/edit/{id}', 'admin\partner\PartnerController@editpartner')->name('editpartner');
Route::post('/partner/update/{id}', 'admin\partner\PartnerController@partner_update')->name('updatepartner');
//===============================All Property Routes==========================
Route::get('/property/all', 'admin\property\propertyController@all_properties')->name('allproperties');
Route::get('/property/add', 'admin\property\propertyController@add_property')->name('addproperty');

//============================PG=================
Route::post('/pr/property/pgpost', 'admin\property\propertyController@add_pgpost')->name('add_pgpost');

//================================Property Item======================
Route::get('/property/item/', 'admin\property\propertyController@propertyitemindex')->name('propertyitemindex');
Route::get('/property/item/add', 'admin\property\propertyController@createpropertyitem')->name('createpropertyitem');
Route::post('/property/item/store', 'admin\property\propertyController@createpropertystore')->name('createpropertystore');







//=========================features Routes===============================
Route::get('/property/features', 'admin\features\featuresController@index')->name('all_features');
Route::post('/property/features/store', 'admin\features\featuresController@store')->name('all_features_add');





//===============================Blog Post========================================
Route::get('/blog/all', 'admin\blog\blogController@index')->name('all_blogs');
Route::get('/blog/add', 'admin\blog\blogController@create')->name('all_blogs_add');
Route::post('/blog/add/store', 'admin\blog\blogController@store')->name('all_blogs_store');
Route::get('/blog/delete/{id}', 'admin\blog\blogController@destroy')->name('blog_delete');

Route::get('/blog/cat/all', 'admin\blog\blogController@categoryindex')->name('all_blogs_cat');
Route::post('/blog/cat/all', 'admin\blog\blogController@categorystore')->name('all_blogs_cat_store');
Route::get('/blog/cat/delete/{id}', 'admin\blog\blogController@categorydestroy')->name('all_blogs_cat_delete');

Route::post('ckeditor/upload', 'admin\blog\blogController@upload')->name('ckeditor.upload');


//========================Ajax Route=====================================================
Route::get('/nextteacher/districtapi', 'admin\partner\PartnerController@districtapi')->name('ajaxdistrictapi');
Route::get('/nextteacher/propertyapi', 'admin\property\propertyController@propertyapi')->name('ajaxpropertyapi');
});
