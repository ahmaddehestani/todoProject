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
    
      $task = new Todo();
       $task->title=request("title");
        $task->description=request("description");
        $task->status=request("status");
        Todo::createOrExist($task);
      
        return redirect('http://127.0.0.1:8000/taskList');
      }

}
