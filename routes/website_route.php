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
Route::group(['middleware'=>'Visitor_log'], function() {
Route::get('/', 'frontend\WebPageController@hompage')->name('homepage');
Route::get('/all-{type}', 'frontend\WebPageController@alllisting')->name('all_isting');
Route::get('/property/{slug}', 'frontend\WebPageController@siglelisting')->name('siglelisting');

//=======================================Search Route=============================
Route::get('/filter', 'frontend\WebPageController@properyfilter')->name('properyfilter');
Route::post('/propertyquerySubmit', 'frontend\WebPageController@propertyquerySubmit')->name('propertyquerySubmit');
//=======================================Blog Route===============================
Route::get('/blog', 'frontend\WebPageController@blog')->name('blog');
Route::get('/blog/{slug}', 'frontend\WebPageController@singleblog')->name('sigleblog');
Route::get('/blog/category/{slug}', 'frontend\WebPageController@catergoryblog')->name('catergoryblog');


Route::get('/newlogin', 'frontend\WebPageController@newlogin')->name('newlogin');
//====================Query poste===============
Route::post('/helpquerysubmit', 'frontend\queryController@store')->name('helpquerysubmit');

//======================================
Route::get('/termscondition', 'frontend\WebPageController@termscondition')->name('termscondition');
Route::get('/about', 'frontend\WebPageController@about')->name('about');
Route::get('/privacy', 'frontend\WebPageController@privacy')->name('privacy');

//================================Payment Gateway=========================
Route::get('booknow/{id}', 'frontend\pg\paymentGateway@index');
Route::post('payment', 'frontend\pg\paymentGateway@order');
});