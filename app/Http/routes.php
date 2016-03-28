<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/create-ads', [
        'uses' => 'AdController@index',
        'as' => 'create-ads'
    ]);

    Route::post('/ajax/get-city-options', [
        'uses' => 'AdController@getCityOptions',
        'as' => 'ajax.get-city-options'
    ]);

    Route::post('/ajax/get-city-input', [
        'uses' => 'AdController@getCityInput',
        'as' => 'ajax.get-city-input'
    ]);

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
