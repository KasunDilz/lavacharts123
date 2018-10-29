<?php

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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('barchart', 'expensesController@barChart');
Route::get('testchart', 'TestController@columnChart');
Route::get('geochart', 'geocharttestController@geoChart');
Route::get('Dashboard', 'DashboardController@barChart');
Route::get('Dashboard', 'DashboardController@geoChart');
//Route::get('viewname', 'Controllername@functionnameofthecontroller');