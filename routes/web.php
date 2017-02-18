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

Auth::routes();

Route::get('/', function () {

    return view('welcome', [
        "hasAuth" => Route::has('login')
    ]);
})->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'storetree'], function() {

    Route::get('/', 'HomeController@index')->name('storetree');

    Route::resource('shops', 'ShopController');
    Route::resource('items', 'ItemController');

    Route::put('items/{id}/edit/components', 'ItemController@updateComponent')->name('items.update.components');

    Route::group(['prefix' => 'build'], function () {
        Route::get('/', 'BuildController@index')->name('builds.index');

        Route::get('show/{id}', 'BuildController@show')->name('builds.show');

        Route::get('related/{id}', 'BuildController@listRelated')->name('builds.related');
    });
});
