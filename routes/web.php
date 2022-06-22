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

Route::post('admin/plans/store', 'Admin\PlanController@store')->name('plan.store');
Route::get('admin/plans','Admin\PlanController@index')->name('plan.index');
Route::get('admin/plans/create','Admin\PlanController@create')->name('plan.create');


Route::get('/', function () {
    return view('welcome');
});
