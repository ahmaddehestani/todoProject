<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoCreateRequest;


use App\Models\Todo;

class TodoController extends Controller
{
    public function taskList(){
        $tasks= todo::all();
        return view('taskList', ["tasks"=>$tasks]);
      }
      public function store(TodoCreateRequest $request){
     $task = new Todo();
       $task->title=$request->title;
        $task->description=$request->description;
        $task->status=$request->status;
        Todo::createOrExist($task);
      return redirect()->route('taskList');
      }


      public function taskUpdate($id){
        Todo::findTaskById($id);
        $task = new Todo();
        $task->title=request("title");
         $task->description=request("description");
         $task->status=request("status");
         Todo::createOrExist($task);
       return redirect()->route('taskList');
      }
      public function findOne(){
        $id=request('id');
       
      $task=Todo::find($id);

    
      if($task){
      return view('findOne',['task'=>$task]);
      }else{
        return redirect('http://127.0.0.1:8000/todos/taskList');
      }
    }
    public function remove(){
      $id=request('id');
     
      Todo::destroy($id);
      return redirect('http://127.0.0.1:8000/todos/taskList');

}
}