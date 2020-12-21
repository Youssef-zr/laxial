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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// see to laravel we well use vueJs route to catch the error 404 when refresh page
Route::get('{any}', function () {
    return view('website.welcome');
})->where('any', '.*');


