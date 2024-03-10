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

Route::group([
    'namespace' => 'App\Http\Controllers',
], function () {
    Route::get('/', 'HomeController@actionIndex')->name('home');
    Route::get('/aboutus', 'HomeController@actionAboutUs')->name('aboutus');
    Route::get('/contact', 'HomeController@actionContact')->name('contact');
    Route::post('/contact', 'HomeController@actionContact')->name('contact.save');
    Route::get('/reviews', 'HomeController@actionReviews')->name('reviews');
    Route::get('/service', 'ServiceController@actionIndex')->name('service');
    Route::get('/service/{id}', 'ServiceController@actionView')->name('service.view');
});
