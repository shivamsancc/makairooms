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
// require('jobroute.php');
/*===============================Routes Included================*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
