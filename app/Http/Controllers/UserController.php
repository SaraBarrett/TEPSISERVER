<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function addUser(){
        $classDelegate = 'Daniel Borges';

        //busca dados da função desta class getUsersNotFromDB
        $usersNotFromDB = $this->getUsersNotFromDB();
        //dd($usersNotFromDB);

        return view('users.add_user', compact('classDelegate','usersNotFromDB'));
    }

    protected function getUsersNotFromDB(){
        //simulação de users vindos da base de dados
        $usersNotFromDB = [
            ['id'=>1, 'name'=>'Sara', 'email'=>'sara@gmail.com'],
            ['id'=>2, 'name'=>'Maria', 'email'=>'maria@gmail.com'],
            ['id'=>3, 'name'=>'Ricardo', 'email'=>'Ricardo@gmail.com'],
            ['id'=>4, 'name'=>'António', 'email'=>'António@gmail.com'],
        ];

        return  $usersNotFromDB;
    }
}
