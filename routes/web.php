<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UtilController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', [UtilController::class, 'home']);

Route::get('/hello', [UtilController::class, 'welcome'])->name('utils.home');

Route::get('/turma/{course_name}' , function($name){
    return "<h4>Olá turma $name</h4>";
});

Route::get('/add_users', [UserController::class, 'addUser'])->name('users.add');
Route::get('/all_users', [UserController::class, 'allUsers'])->name('users.all');
Route::get('/view_user/{id}',[UserController::class, 'viewUser'])->name('users.view');

Route::get('/delete/{id}',[UserController::class, 'deleteUser'])->name('users.delete');


Route::get('/all_tasks', [TaskController::class, 'allTasks'])->name('tasks.all');



Route::fallback(function(){
    return view('utils.fallback');
});

