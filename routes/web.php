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

Route::group(['prefix' => '/', 'namespace' => 'Frontend'], function(){
   
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/about', 'AboutController@index')->name('about');
    Route::get('/product', 'ProductController@index')->name('product');
    Route::get('/pricelits', 'PricelistController@index')->name('pricelist');
    Route::get('/gallery', 'GalleryController@index')->name('gallery');
    Route::get('/contact', 'ContactController@index')->name('contact');
});
