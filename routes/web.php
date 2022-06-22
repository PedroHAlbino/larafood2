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
Route::put('admin/plans/{url}','Admin\PlanController@update')->name('plan.update');
Route::get('admin/plans/{url}/edit','Admin\PlanController@edit')->name('plan.edit');
Route::any('admin/plans/search', 'Admin\PlanController@search')->name('plan.search');
Route::get('admin/plans/create','Admin\PlanController@create')->name('plan.create');
Route::delete('admin/plans/{url}', 'Admin\PlanController@destroy')->name('plan.destroy');
Route::get('admin/plans/{url}', 'Admin\PlanController@show')->name('plan.show');
Route::post('admin/plans/store', 'Admin\PlanController@store')->name('plan.store');
Route::get('admin/plans','Admin\PlanController@index')->name('plan.index');

Route::get('admin','Admin\PlanController@index')->name('admin.index');

Route::get('/', function () {
    return view('welcome');
});
