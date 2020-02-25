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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('my-todos','TodoController@getAllTodos');
Route::post('createTodos','TodoController@createTodo');
Route::get('show/{id}','TodoController@show');
Route::put('update/{id}','TodoController@updateById');
Route::delete('destroy/{id}','TodoController@destroy');
