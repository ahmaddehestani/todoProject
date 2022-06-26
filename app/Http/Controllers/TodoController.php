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
}
