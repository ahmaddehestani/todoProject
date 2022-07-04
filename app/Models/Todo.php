<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable=['title','description','status'];
    
    public static function createOrExist($data){
        self::firstorcreate(['title'=>$data->title],['title'=>$data->title,'description'=>$data->description,'status'=>$data->status]);
  return true;
      }


      public static function destroy($id){
        $task = self::findOrFail($id);
      $task->delete();
        }

       
}
