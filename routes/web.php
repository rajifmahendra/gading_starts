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
    Route::get('/visimisi', 'VisiController@index')->name('visi');
    Route::get('/legalitas', 'LegalController@index')->name('legalitas');
    Route::get('/project', 'ProjectController@index')->name('project');
    Route::get('/service', 'ServiceController@index')->name('service');
    Route::get('/flow', 'FlowController@index')->name('flow');
    Route::get('/pricelits', 'PricelistController@index')->name('pricelist');
    Route::get('/gallery', 'GalleryController@index')->name('gallery');
    Route::get('/contact', 'ContactController@index')->name('contact');
    Route::get('/client', 'ClientController@index')->name('client');
});
Route::post('/store/contact-us', 'Frontend\ContactController@storeContactUs')->name('store.contact-us');
