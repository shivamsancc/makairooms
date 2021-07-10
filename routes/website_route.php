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

Route::get('/', 'frontend\WebPageController@hompage')->name('homepage');
Route::get('/all-{type}', 'frontend\WebPageController@alllisting')->name('all_isting');
Route::get('/property/{slug}', 'frontend\WebPageController@siglelisting')->name('siglelisting');



//=======================================Blog Route===============================
Route::get('/blog/{slug}', 'frontend\WebPageController@singleblog')->name('sigleblog');


Route::get('/newlogin', 'frontend\WebPageController@newlogin')->name('newlogin');
