<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<table>
  <tr>
  <th>Task ID</th>
    <th>Task Title</th>
    <th>Description</th>
    <th>status</th>
  </tr>
  @foreach($tasks as $task)
  <tr>
  <td> {{$task->id}}</td>
  <td> {{$task->title}}</td>
  <td>{{$task->description}}</td>
  <td>{{$task->status}} </td>    
    </tr>
  @endforeach
 
</table>