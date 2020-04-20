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

Route::get('/','HomeController@getHomePage')->name('home');
Route::get('/package','HomeController@getPackagePage')->name('package');




Auth::routes();
Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
Route::post('/login','Auth\LoginController@login');

Route::get('/logout','Auth\LoginController@logout')->name('logout');

Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

Route::get('/admin/about/{id}', 'SectionController@showAbout')->name('admin.about');
Route::post('/admin/about/{id}', 'SectionController@postAbout')->name('abtpost');

Route::get('/admin/service/add','SectionController@addService')->name('admin.addservice');
Route::post('/admin/service/add','SectionController@postService');

Route::get('/admin/service/view','SectionController@viewService')->name('admin.viewservice');
Route::post('/admin/service/view','SectionController@pviewService');
