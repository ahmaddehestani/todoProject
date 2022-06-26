<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Todo;

class TodoController extends Controller
{
    public function taskList(){
        $tasks= todo::all();
        return view('taskList', ["tasks"=>$tasks]);
      }
      public function store(){
    
      $task = new Task();
       $task->name=request("title");
        $task->type=request("description");
        $task->base=request("status");
        TAsk::createOr($task);
      
        return redirect('http://127.0.0.1:8000/taskList');
      }

}
