<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth:api'], function () {

    //In time, all tables and updates will go through here
    Route::group(['prefix' => 'external', 'namespace' => 'Api\\External'], function () {

        Route::group(['prefix' => 'v1'], function () {

        });

    });

    /** External API mostly for people who live in jars */
    Route::group(['prefix' => 'internal', 'namespace' => 'Api\\Internal'], function () {

        Route::group(['prefix' => 'v1'], function () {
            Route::get('test', 'Controller@test');

            Route::group(['prefix' => 'items'], function () {
                Route::get('/', 'ItemController@index');

                Route::post('/', 'ItemController@store');
                Route::get('/create', 'ItemController@store');

            });

            Route::group(['prefix' => 'items'], function () {
                Route::get('{dota_id}', 'ItemController@show');
            });
        });

    });

});
