<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Read</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h3><a href="create">Create</a></h3>
<hr>
<br/>
	<h5>Student Details</h5>
	<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>id</th>
      <th>Name</th>
      <th>Rollnumber</th>
      <th>Gender</th>
      <th>StudentDepartment</th>
      <th>Show</th>
      <th>Update</th>
      <th>Delete</th>
    </tr>
  </thead>
  @foreach($user as $users)
  	<tr>
  		<td>{{$users->id}}</td>
  		<td>{{$users->name}}</td>
  		<td>{{$users->rollnumber}}</td>
  		<td>{{$users->gender}}</td>
  		<td>{{$users->studept}}</td>
  		<td><a href="show/{{$users->id}}">show</td>
  		<td><a href="edit/{{$users->id}}">update</td>
  		<td><a href="delete/{{$users->id}}">delete</td>
  	</tr>
  	@endforeach
  </table> 
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>

</body>
</html>