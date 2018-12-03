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

Route::get('todos', 'TaskController@fetchAll');
Route::post('todos', 'TaskController@store');
Route::delete('todos/{task}', 'TaskController@delete');
