<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


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

        $search = request()->query('search')? request()->query('search'): null;

        $usersFromDB = DB::table('users');
            if($search){
            $usersFromDB = $usersFromDB->where('name', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%");
            }
        $usersFromDB = $usersFromDB->get();
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

    public function updateUser(Request $request){
        $request->validate([
            'name' => 'required|string|max:50',
            'nif' => 'min:8'
        ]);


        $photo = null;
        if($request->hasFile('photo')){
        $photo = Storage::putFile('uploadedFiles', $request->photo);
        };

        User::where('id', $request->id)->update([
            'name'=> $request->name,
            'nif'=> $request->nif,
            'photo' =>$photo
        ]);


        return redirect()->route('users.all')->with('message', 'User actualizado com sucesso!');
    }

    public function storeUsers(Request $request){
        //dd($request->all());
        $request->validate([
            'name' => 'required|string|max:50',
            'email' =>'required|unique:users|email',
            'password' => 'required|min:8'
        ]);

        User::insert([
            'name' =>$request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('users.all')->with('message', 'User adicionado com sucesso!');
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
