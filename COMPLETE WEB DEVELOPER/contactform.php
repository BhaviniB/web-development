<?php

 








?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
	<h1>Get In Touch!</h1>
    </div>
    <div id="error"></div>
	<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea name="text"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button name="submit" ssssssstype="submit" id="submit"  class="btn btn-primary">Submit</button>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <script type="text/javascript">
  
  $("form).submit(function(e)
  {
	  e.preventDefault();
	  var error="";
	  if($("#subject").val()=="")
	  {
		  error=error+"<p>The subject field  is required</p>";
	  }
	  
	  if($("#content").val()=="")
	  {
		  error=error+"<p>The content field  is required</p>";
	  }
	  if($("#email").val()=="")
	  {
		  error=error+"<p>The email field  is required</p>";
	  }
	  
	  
	  
 
  
     if(error!="")
	 {
		 
  $("#error").html(<'div class="alert alert-danger" role="alert">
  There were errors!'+error+
'</div>');
  
  
  
	 } 
 else
 {
	 $("form".unbind("submit").submit();
	 
	 
	 
 }
 
 
  });
 </script>
  
  
  
  
  
  
  </body>
  
</html>