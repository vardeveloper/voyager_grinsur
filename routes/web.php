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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('nosotros', 'HomeController@about_us')->name('about_us');

Route::get('micky-express', 'HomeController@micky_express')->name('micky_express');

Route::get('contacto', 'HomeController@contact_us')->name('contact_us');

Route::post('sendmail', 'HomeController@sendmail')->name('sendmail');

Route::get('inmueble/{slug}', 'HomeController@property_show')->name('property_show');

Route::get('inmuebles', 'HomeController@property_list')->name('property_list');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
