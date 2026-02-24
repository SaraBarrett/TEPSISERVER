<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

Route::get('/', function () {
    return view('utils.home');
});

Route::get('/hello', function () {
    return view('welcome');
})->name(('utils.home'));

Route::get('/turma/{course_name}' , function($name){
    return "<h4>Olá turma $name</h4>";
});

Route::get('/add_users', function(){
    return view('users.add_user');
})->name('users.add');


Route::fallback(function(){
    return view('utils.fallback');
});

