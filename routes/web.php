<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UtilController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UtilController::class, 'home']);

Route::get('/hello', [UtilController::class, 'welcome'])->name('utils.home');

Route::get('/turma/{course_name}' , function($name){
    return "<h4>Olá turma $name</h4>";
});

Route::get('/add_users', [UserController::class, 'addUser'])->name('users.add');
Route::get('/all_users', [UserController::class, 'allUsers'])->name('users.all');


Route::fallback(function(){
    return view('utils.fallback');
});

