<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h3>Update Student Details</h3>
{{Form::model($user, ['method'=>'patch','action'=> ['UserController@update', $user->id]])}}

{{Form::label('id','ID')}}<br>
{{Form::text('id')}}<br/>

{{Form::label('name','Name')}}<br>
{{Form::text('name')}}<br/>

{{Form::label('rollnumber','Rollnumber')}}<br>
{{Form::text('rollnumber')}}<br/>

{{Form::label('studept','studentDept')}}<br>
{{Form::text('studept')}}<br/>



Gender{{Form::radio('gender','male')}}Male
{{Form::radio('gender','female')}}Female<br/>
<br/>
{{Form::submit('Update')}}


{{Form::close()}}
</div>
</body>
</html>