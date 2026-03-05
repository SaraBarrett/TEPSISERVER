<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
   public function addUser(){
        $classDelegate = 'Daniel Borges';

        //busca dados da função desta class getUsersNotFromDB
        $usersNotFromDB = $this->getUsersNotFromDB();
        //dd($usersNotFromDB);

        return view('users.add_user', compact('classDelegate','usersNotFromDB'));
    }

    public function allUsers(){
        //carregar todos os dados da tabela de users
        $usersFromDB = User::get();
        //->where('password', 'Sara1234')

        //dd($usersFromDB);

        return view('users.all_users', compact('usersFromDB'));
    }
    public function viewUser($id){

    $user = User::where('id', $id)->first();


   return view('users.view', compact('user'));
    }

    public function deleteUser($id){


    DB::table('tasks')->where('user_id',$id)->delete();
        User::where('id', $id)->delete();

        return back();
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
