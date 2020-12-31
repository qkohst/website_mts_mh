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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'LeandingPageController@index');
Route::get('/home/berita/{id}', 'LeandingPageController@show_berita');
Route::get('/home/berita', 'LeandingPageController@index_berita');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/profilemadrasah', 'ProfileMadrasahController');
Route::resource('/ekstrakulikuler', 'EkstrakulikulerController');
Route::get('/ekstrakulikuler/{id}/destroy', 'EkstrakulikulerController@destroy');
Route::resource('/gurutendik', 'GuruTendikController');
Route::get('/gurutendik/{id}/destroy', 'GuruTendikController@destroy');
Route::resource('/contact', 'ContactController');
Route::resource('/berita', 'BeritaController');
Route::get('/berita/{id}/destroy', 'BeritaController@destroy');
