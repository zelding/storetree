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
    Route::group(['prefix' => 'internal', 'namespace' => 'Api\\External'], function () {

        Route::group(['prefix' => 'v1'], function () {

        });

    });

    /** External API mostly for people who live in jars */
    Route::group(['prefix' => 'external', 'namespace' => 'Api\\Internal'], function () {

        Route::group(['prefix' => 'v1'], function () {
            Route::get('test', 'Controller@test');

            Route::group(['prefix' => 'items'], function () {
                Route::get('/', 'ItemController@index');
                Route::post('/', 'ItemController@store');

                Route::group(['prefix' => '{dota_id}'], function () {
                    Route::get('/', 'ItemController@show');
                    Route::put('/', 'ItemController@update');

                    Route::get('stats', 'StatController@showItemStats');
                    Route::put('stats', 'StatController@updateItemStat');
                    Route::delete('stats', 'StatController@updateItemStat');

                    Route::group(['prefix' => 'recipes'], function () {
                        Route::get('/', 'RecipeController@index');
                        Route::post('/', 'RecipeController@create');
                    });

                });

            });

            Route::group(['prefix' => 'recipes/{recipe_id}'], function () {
                Route::get('/', 'RecipeController@show');
                Route::put('/', 'RecipeController@update');
            });

            Route::group(['prefix' => 'stats'], function () {
                Route::post('/', 'StatController@store');
            });

        });

    });

});
