<!DOCTYPE html>
<html>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
</style>
<body>

<!-- Navbar (Sits on top) -->
<div class="w3-top w3-bar w3-xlarge w3-black w3-opacity-min">
<a href="http://127.0.0.1:8000" class="w3-bar-item w3-button">HOME</a>
<a href="http://127.0.0.1:8000/createTask" class="w3-bar-item w3-button">CREATE TASK</a>
<a href="http://127.0.0.1:8000/taskList" class="w3-bar-item w3-button">TASK LIST</a>
<a href="http://127.0.0.1:8000/editTask" class="w3-bar-item w3-button">EDIT TASK</a>
<a href="http://127.0.0.1:8000/about" class="w3-bar-item w3-button">ABOUT</a>
</div>

@yield('content')
</body>