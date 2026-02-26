<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function addUser(){
    $classDelegate = 'Daniel Borges';
    return view('users.add_user', compact('classDelegate'));
}
}
