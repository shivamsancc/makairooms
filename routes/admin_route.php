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
Route::get('/partner/delete/{id}', 'admin\partner\PartnerController@partnerdelete')->name('deletepartner');
Route::post('/partner/update/{id}', 'admin\partner\PartnerController@partner_update')->name('updatepartner');
//===============================All Property Routes==========================
//=========================City Routes=======================
Route::get('/city', 'admin\city\CityController@index')->name('all_admin_city');
Route::get('/city/add', 'admin\city\CityController@create')->name('add_admin_city');
Route::post('/city/add/store', 'admin\city\CityController@store')->name('store_admin_city');
Route::get('/city/edit/{id}', 'admin\city\CityController@edit')->name('edit_admin_city');
Route::post('/city/update/{id}', 'admin\city\CityController@update')->name('admin_city_update');
Route::get('/city/delete/{id}', 'admin\city\CityController@destroy')->name('delete_admin_city');
//====================Property route================
Route::get('/property/all', 'admin\property\propertyController@all_properties')->name('allproperties');
Route::get('/property/add', 'admin\property\propertyController@add_property')->name('addproperty');
Route::get('/property/getp/{id}', 'admin\property\propertyController@eidtproperty')->name('eidtproperty');
Route::post('/property/update/{id}', 'admin\property\propertyController@updateproperty')->name('updateproperty');
Route::get('/property/delete/{id}', 'admin\property\propertyController@deleteproperty')->name('deleteproperty');
//================================Property Item======================
Route::get('/property/item/', 'admin\property\propertyController@propertyitemindex')->name('propertyitemindex');
Route::get('/property/item/add', 'admin\property\propertyController@createpropertyitem')->name('createpropertyitem');
Route::post('/property/item/store', 'admin\property\propertyController@createpropertystore')->name('createpropertystore');
Route::get('/property/item/getp/{id}', 'admin\property\propertyController@edititem')->name('eidtpropertyitem');
Route::post('/property/item/update/{id}', 'admin\property\propertyController@updateitem')->name('updatepropertyitem');
Route::get('/property/item/delete/{id}', 'admin\property\propertyController@deleteitem')->name('deletepropertyitem');
//============================PG=================
Route::post('/pr/property/pgpost', 'admin\property\propertyController@add_pgpost')->name('add_pgpost');







//========================locality Routes===============================
Route::get('/locality', 'admin\master\localityController@index')->name('all_admin_locality');
Route::get('/locality/add', 'admin\master\localityController@create')->name('all_admin_locality_add');
Route::post('/locality/add/store', 'admin\master\localityController@store')->name('all_admin_locality_store');

//=========================features Routes===============================
Route::get('/property/features', 'admin\features\featuresController@index')->name('all_features');
Route::post('/property/features/store', 'admin\features\featuresController@store')->name('all_features_add');





//===============================Blog Post========================================
Route::get('/blog/all', 'admin\blog\blogController@index')->name('all_blogs');
Route::get('/blog/add', 'admin\blog\blogController@create')->name('all_blogs_add');
Route::post('/blog/add/store', 'admin\blog\blogController@store')->name('all_blogs_store');
Route::get('/blog/add/edit/{id}', 'admin\blog\blogController@blogedit')->name('blogedit');
Route::post('/blog/post/update/{id}', 'admin\blog\blogController@blogupdate')->name('blogupdate');
Route::get('/blog/delete/{id}', 'admin\blog\blogController@destroy')->name('blog_delete');

Route::get('/blog/cat/all', 'admin\blog\blogController@categoryindex')->name('all_blogs_cat');
Route::post('/blog/cat/all', 'admin\blog\blogController@categorystore')->name('all_blogs_cat_store');
Route::get('/blog/cat/edit/{id}', 'admin\blog\blogController@editcategory')->name('editcategory_blog');
Route::post('/blog/cat/update/{id}', 'admin\blog\blogController@updatecategory')->name('all_blogs_cat_update');
Route::get('/blog/cat/delete/{id}', 'admin\blog\blogController@categorydestroy')->name('all_blogs_cat_delete');

Route::post('ckeditor/upload', 'admin\blog\blogController@upload')->name('ckeditor.upload');
//==============================Query Route======================================
Route::get('/query/listingquery', 'admin\query\queryController@listquery')->name('listingquery');
Route::get('/query/{id}/listingquerysoftdelete', 'admin\query\queryController@listquerysoftdelete')->name('listquerysoftdelete');
Route::get('/query/helpquery', 'admin\query\queryController@helpquery')->name('helpquery');
Route::get('/query/{id}/helpquerysoftdelete', 'admin\query\queryController@helpquerysoftdelete')->name('helpquerysoftdelete');

//============Adds route=======================
Route::resource('/adsmanager',  'admin\master\adsController');


//========================Ajax Route=====================================================
Route::get('/nextteacher/districtapi', 'admin\partner\PartnerController@districtapi')->name('ajaxdistrictapi');
Route::get('/nextteacher/propertyapi', 'admin\property\propertyController@propertyapi')->name('ajaxpropertyapi');
});
