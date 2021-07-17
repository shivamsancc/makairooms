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
/*===============================Routes Included================*/
require('website_route.php');
require('admin_route.php');
/*===============================Routes Included================*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//===========================================================================
Route::get('/sitemap.xml', 'sitemap\siteMapController@index')->name('indexsitemap');
Route::get('/{slug}-sitemap.xml', 'sitemap\siteMapController@dynamicsitemap')->name('dynamicsitemap');

//==============================Clear Route================
Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
 
    return "Cleared!";
 
 });
 Route::get('/autoapi', 'frontend\WebPageController@mapapiupdate')->name('mapapiupdate');
 Route::post('/newslettersubbmit', 'frontend\webPageController@newslettersubbmit')->name('newslettersubbmit');
