<?php

use Illuminate\Http\Request;

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

    Route::group(['prefix' => 'external', 'namespace' => 'Api\\External'], function () {

        Route::group(['prefix' => 'v1'], function () {

        });

    });

    Route::group(['prefix' => 'internal', 'namespace' => 'Api\\Internal'], function () {

        Route::group(['prefix' => 'v1'], function () {
            Route::get('test', 'Controller@test');
        });

    });

});
