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

Route::get('/partner/edit', 'admin\partner\PartnerController@editpartner')->name('editpartner');
//========================Ajax Route=====================================================
Route::get('/nextteacher/districtapi', 'admin\partner\PartnerController@districtapi')->name('ajaxdistrictapi');
});
