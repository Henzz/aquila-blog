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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'App\Http\Controllers\DashboardController@index');

Route::get('/about', 'App\Http\Controllers\DashboardController@about');
Route::get('/contact-2', 'App\Http\Controllers\DashboardController@contact');
Route::get('/portfolio-IOT', 'App\Http\Controllers\DashboardController@portfolioIOT');
Route::get('/portfolio-mobile-app', 'App\Http\Controllers\DashboardController@portfolioMobileApp');
Route::get('/portfolio-Website', 'App\Http\Controllers\DashboardController@portfolioWebsite');
Route::get('/service-app', 'App\Http\Controllers\DashboardController@serviceApp');
Route::get('/service-demo-digital-seo', 'App\Http\Controllers\DashboardController@serviceDemoDigitalSeo');
Route::get('/service-erp-iot', 'App\Http\Controllers\DashboardController@serviceErpIot');
Route::get('/service-erp', 'App\Http\Controllers\DashboardController@serviceErp');
Route::get('/service-web', 'App\Http\Controllers\DashboardController@serviceWeb');
