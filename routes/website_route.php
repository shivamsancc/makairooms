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
Route::get('/allrooms', 'frontend\WebPageController@alllisting')->name('alll_isting');
Route::get('/property/{slug}', 'frontend\WebPageController@siglelisting')->name('siglelisting');




Route::get('/newlogin', 'frontend\WebPageController@newlogin')->name('newlogin');
