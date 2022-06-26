<title>create</title>
@extends('layouts.layout')
@section('content')
<div>
  
</br></br>


<h1> create a new pizza</h1>
<form  action="" method="POST">
    @csrf
    <label for="task"> your Task</label> 
    <input type="text" name="task" id="task" required>

    </br></br></br>
    
    <label for="description"> Task description</label> 
    <input type="text" name="description" id="description" required>

    </br></br></br>
    <label for="state"> your state</label> 
    <input type="text" name="state" id="state" required>



    </br></br></br>

<input type="submit" value="create Task">

</form>
</div> 
@endsection
