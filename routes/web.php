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

Route::prefix('admin')->namespace('Admin')->group(function(){

    /**
     * Rotas Detalhes Plans
     */
    Route::get('plans/{url}/details','DetailPlanController@index')->name('details.plan.index');

    /**
     * Routes Plans
     */
    Route::get('plans/create','PlanController@create')->name('plan.create');
    Route::put('plans/{url}','PlanController@update')->name('plan.update');
    Route::get('plans/{url}/edit','PlanController@edit')->name('plan.edit');
    Route::any('plans/search', 'PlanController@search')->name('plan.search');
    Route::delete('plans/{url}', 'PlanController@destroy')->name('plan.destroy');
    Route::get('plans/{url}', 'PlanController@show')->name('plan.show');
    Route::post('plans/store', 'PlanController@store')->name('plan.store');
    Route::get('plans','PlanController@index')->name('plan.index');

    /**
     * Home Dashboard
     */
    Route::get('/','PlanController@index')->name('admin.index');

});



Route::get('/', function () {
    return view('welcome');
});
