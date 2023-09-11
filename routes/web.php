<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use \App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/todos',
    [TodoController::class, 'list']
)->name('todo_list');


Route::get(
    '/todos/{id}',
    [TodoController::class, 'single']
)->name('todo_single');

Route::get(
    '/todos/create/',
    [TodoController::class, 'create']
)->name('todo_create');

Route::get(
    '/todos/{id}/done',
    [TodoController::class, 'done']
)->name('todo_done_get');

Route::post(
    '/todos/{id}/done',
    [TodoController::class, 'done']
)->name('todo_done');