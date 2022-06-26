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
    <th>Task Name</th>
    <th>Description</th>
    <th>state</th>
  </tr>
  @foreach($tasks as $)
  <tr>
  <td> {{$task->id}}</td>
  <td> {{$task->task}}</td>
  <td>{{$task->description}}</td>
  <td>{{$task->state}} </td>    
    </tr>
  @endforeach
 
</table>