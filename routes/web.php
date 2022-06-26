<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/about', function () {
    return view('welcome');
});
Route::get('/editTask', function () {
    return view('welcome');
});
Route::get('/createTask', function () {
    return view('create');
});
Route::get('/taskList', function () {
    return view('taskList');
});
Route::get('/findTask', function () {
    return view('welcome');
});
