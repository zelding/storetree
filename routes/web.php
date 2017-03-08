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

use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', function () {

    return view('welcome', [
        "hasAuth" => Route::has('login')
    ]);
})->name('home');

Route::group(['prefix' => 'storetree'], function() {

    Route::get('/', 'HomeController@index')->name('storetree');

    Route::resource('shops', 'ShopController');
    Route::resource('items', 'ItemController');
    Route::resource('stats', 'StatController');
    Route::resource('abilities', 'AbilityController');
    Route::resource('scripts', 'ScriptController');

    Route::group(['prefix' => 'items/{id}'], function () {
        Route::group(['middleware' => 'utf16'], function () {
            Route::get('tooltip', 'ItemController@showTooltip')->name('item.tooltip');
        });

        Route::get('lua', 'ItemController@showScript')->name('item.lua');
        Route::get('copy', 'ItemController@copy')->name('items.copy');

        Route::get('edit/components', 'ItemController@editComponent')->name('items.edit.components');
        Route::put('edit/components', 'ItemController@updateComponent')->name('items.update.components');

        Route::get('edit/stats', 'ItemController@editStats')->name('items.edit.stats');
        Route::put('edit/stats', 'ItemController@updateStats')->name('items.update.stats');

        Route::get('translations', 'ItemController@editTranslations')->name('items.edit.translations');
        Route::put('translations', 'ItemController@updateTranslations')->name('items.update.translations');

        Route::get('abilities', 'ItemController@editAbilities')->name('items.edit.abilities');
        Route::put('abilities', 'ItemController@updateAbilities')->name('items.update.abilities');

        Route::get('scripts', 'ItemController@editScripts')->name('items.edit.scripts');
        Route::post('scripts', 'ItemController@updateScripts')->name('items.update.scripts');
    });

    Route::group(['prefix' => 'build'], function () {
        Route::get('/', 'BuildController@index')->name('builds.index');

        Route::get('show/{id}', 'BuildController@show')->name('builds.show');

        Route::get('related/{id}', 'BuildController@listRelated')->name('builds.related');
    });

    Route::get('export', 'ExportController@index')->name('export.index');
    Route::post('export', 'ExportController@run')->name('export.run');
});
