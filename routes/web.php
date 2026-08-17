<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/ 

Route::group(['namespace' => 'App\Http\Controllers'], function()
{  
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/about', 'HomeController@about')->name('home.about');
    Route::get('/services', 'HomeController@services')->name('home.services');
    Route::get('/industries', 'HomeController@industries')->name('home.industries');
    Route::get('/partnerships', 'HomeController@partnerships')->name('home.partnerships');
    Route::get('/sustainability', 'HomeController@sustainability')->name('home.sustainability');
    Route::get('/downloads', 'HomeController@downloads')->name('home.downloads');
    Route::get('/contact', 'HomeController@contact')->name('home.contact');
    Route::post('/contact', 'HomeController@contact')->name('home.contact');
    Route::get('/subsidiaries', 'HomeController@subsidiaries')->name('home.subsidiaries');

});
