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

Route::get('/', 'MessageController@index')->middleware('auth');

Route::group([
    'prefix' => 'messages',
    'middleware' => [
        'auth'
    ]
], function () {

    Route::get('', 'MessageController@fetch');
    Route::post('', 'MessageController@sent');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
