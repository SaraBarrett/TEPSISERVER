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

//rota onde visualizamos o formulário
Route::get('/add_users', [UserController::class, 'addUser'])->name('users.add');

//rota POST que pega nos dados do formulário e os envia para o servidor, que envia para a base de dados
Route::post('/store-users', [UserController::class, 'storeUsers'])->name('users.store');


Route::get('/all_users', [UserController::class, 'allUsers'])->name('users.all');
Route::get('/view_user/{id}',[UserController::class, 'viewUser'])->name('users.view');

Route::put('/users-update', [UserController::class, 'updateUser'])->name('users.update');

Route::get('/delete/{id}',[UserController::class, 'deleteUser'])->name('users.delete');

Route::get('/view_task/{id}',[TaskController::class, 'viewTask'])->name('tasks.view');

Route::get('/delete-task/{id}',[TaskController::class, 'deleteTask'])->name('tasks.delete');


Route::get('/all_tasks', [TaskController::class, 'allTasks'])->name('tasks.all');


//rota onde visualizamos o formulário
Route::get('/add_tasks', [TaskController::class, 'addTask'])->name('tasks.add');

//rota POST que pega nos dados do formulário e os envia para o servidor, que envia para a base de dados
Route::post('/store-task', [TaskController::class, 'storeTask'])->name('tasks.store');



Route::fallback(function(){
    return view('utils.fallback');
});

