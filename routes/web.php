<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::prefix('todo')->group(function () {
    Route::get('/', [TodoController::class, 'index'])->name('todo');
    Route::post('/add', [TodoController::class, 'add'])->name('todo.add');
    Route::post('/delete/{id}', [TodoController::class, 'delete'])->name('todo.delete');
    Route::post('/done/{id}', [TodoController::class, 'done'])->name('todo.done');
});
