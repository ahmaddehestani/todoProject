<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TodoController\taskList;
use App\Http\Controllers\TodoController\store;
use App\Http\Controllers\TodoController\findOne;
use App\Http\Controllers\TodoController\remove;

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
Route::get('todos/about', function () {
    return view('about');
});
Route::get('todos/editTask', function () {
    return view('edit');
});
Route::get('todos/createTask', function () {
    return view('create');
});

Route::get('todos/taskList', [TodoController::class ,'taskList'])->name('taskList');
Route::post('todos/taskStore', [TodoController::class ,'store'])->name('taskStore');
Route::post('todos/taskUpdate', [TodoController::class ,'taskUpdate'])->name('taskUpdate');
Route::post('todos/findOne', [TodoController::class ,'findOne'])->name('findOne');
Route::post('todos/remove', [TodoController::class ,'remove'])->name('remove');

Route::get('todos/findTask', function () {
    return view('search');
});

Route::get('todos/task/{todo}/edit', function (Todo $todo) {
    return view('create',compact('todo'));
});



// Todo::query()->where('id',$request->id)->update(['title'=>request->title])