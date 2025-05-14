<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'Home'])->name('Home');
Route::get('/completed', [TaskController::class, 'completed']);
Route::get('/update_status/{task_id}', [TaskController::class, 'update_status'])->name('update.status');
Route::get('/update_status2/{task_id}', [TaskController::class, 'update_status2'])->name('update.status2');
Route::post('/add', [TaskController::class, 'add']);
Route::get('/edit/{task_id}', [TaskController::class, 'edit'])->name('edit');
Route::post('/task_edit/{task_id}', [TaskController::class, 'task_edit'])->name('task.edit');
Route::get('/delete/{task_id}', [TaskController::class, 'delete'])->name('delete');
