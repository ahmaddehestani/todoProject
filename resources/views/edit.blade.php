<title>edit form</title>
@extends('layouts.layout')
@section('content')
<div>
  
</br></br>
<fieldset style="background-color: #eeeeee">

<h1> EDIT YOUR TASK</h1>
<form  action="{{route('taskUpdate')}}" method="POST" style="margin:30px">
    @csrf
    <label for="title">insert your Task title</label> 
    <input type="text" name="title" id="title" required>

    </br></br></br>
    
    <label for="description"> Task description</label> 
    <input type="text" name="description" id="description" required>

    </br></br></br>
    <label for="status"> your status</label> 
    <input type="text" name="status" id="status" required>



    </br></br></br>

<input type="submit" value="edit Task">

</form>
</fieldset>
</div> 
@endsection
