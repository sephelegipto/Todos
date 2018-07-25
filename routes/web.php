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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', [
    'uses' => 'TodoController@index',
    'as' => 'todos'
]);

Route::post('/create/todo', [
    'uses' => 'TodoController@store'
]);

Route::post('/todo/save/{id}', [
    'uses' => 'TodoController@save',
    'as' => 'todo.save'
]);

Route::get('/todo/delete/{id}', [
    'uses' => 'TodoController@delete',
    'as' => 'todo.delete'
]);

Route::get('/todo/update/{id}', [
    'uses' => 'TodoController@update',
    'as' => 'todo.update'
]);

Route::get('/todo/completed/{id}', [
    'uses' => 'TodoController@completed',
    'as' => 'todo.competed'
]);