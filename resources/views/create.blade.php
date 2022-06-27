<title>create</title>
@extends('layouts.layout')
@section('content')
<div>
  
</br></br>


<h1> create a new pizza</h1>
<form  action="http://127.0.0.1:8000/taskStore" method="POST">
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

<input type="submit" value="create Task">

</form>
</div> 
@endsection
