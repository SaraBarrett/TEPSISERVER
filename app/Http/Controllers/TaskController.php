<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    public function allTasks(){
        $tasks = DB::table('tasks')
        ->join('users', 'tasks.user_id', 'users.id')
        ->select('tasks.*', 'users.name as username')
        ->get();



        return view('tasks.all_tasks', compact('tasks'));
    }

     public function viewTask($id){

    $task = db::table('tasks')

     ->join('users', 'tasks.user_id', 'users.id')
        ->select('tasks.*', 'users.name as username')
    ->where('tasks.id', $id)->first();


   return view('tasks.view', compact('task'));
    }

    public function deleteTask($id){


        db::table('tasks')->where('id', $id)->delete();

        return back();
    }

   public function addTask(){
    $users = User::all();
        return view('tasks.add_task', compact('users'));
    }

    public function storeTask(Request $request){
        //dd($request->all());
        $request->validate([
            'name' => 'required|string|max:50',
            'user_id' => 'required'
        ]);

        db::table('tasks')->insert([
            'name' =>$request->name,
            'description' => $request->description,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('tasks.all')->with('message', 'Tarefa adicionado com sucesso!');
    }
}
