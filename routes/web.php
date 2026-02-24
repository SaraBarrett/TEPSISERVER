<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('utils.home');
});

Route::get('/hello', function () {
    return view('welcome');
})->name(('utils.home'));

Route::get('/turma/{course_name}' , function($name){
    return "<h4>Olá turma $name</h4>";
});


Route::fallback(function(){
    return '<h1>Ups, essa página não existe</h1>';
});

