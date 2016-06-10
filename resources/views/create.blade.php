<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Create</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
</head>
<body>
<div class="container">
<form class="form-horizontal" action="store" method="POST">
  <fieldset>
    <legend>Student Details</legend>
    <div class="form-group">
      <label for="name" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input name="name" class="form-control"  placeholder="name" type="text">
      </div>
    </div><br/><br/>
    <div class="form-group">
      <label for="rollnumber" class="col-lg-2 control-label">Rollnumber</label>
      <div class="col-lg-10">
        <input name="rollnumber" class="form-control"  placeholder="rollnumber" type="text">
        </div>
        </div><br/><br/>
        <div class="form-group">
      <label for="studept" class="col-lg-2 control-label">StuDepartment</label>
      <div class="col-lg-10">
        <input name="studept" class="form-control" placeholder="studentdepartment" type="text">
        </div>
    </div><br/><br/>
        <div class="form-group">
      <label class="col-lg-2 control-label">Gender</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input name="gender" value="male" checked="" type="radio">
            Male
          </label>
        </div>
        <div class="radio">
          <label>
            <input name="gender"  value="female" type="radio">
            Female
          </label>
        </div>
      </div>
    </div>
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>

</body>
</html>