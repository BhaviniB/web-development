<?php
 session_start();
 echo $_SESSION['username'];
 
 if(array_key_exists('email',$_POST) OR array_key_exists('password',$_POST))
 {
 		$user='root';
		$pass='';
		$db='testdb';
 		$link = mysqli_connect("localhost", $user, $pass, $db);

            if (mysqli_connect_error()) {
        
                die ("There was an error connecting to the database");
        
            } 

if($_POST['email']=='')
{
	
	echo "<p>the email; address is required</p>";
}
else if($_POST['password']=='')
{
	
	echo "<p>the pass is required</p>";
}
//checking if user exists

 else{

 	$query="SELECT id from users WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."'";
	
	$result=mysqli_query($link,$query);
	
	if(mysqli_num_rows($result)>0) {
		echo "email address has been taken";
	}

	else {
	 
	 $query = "INSERT INTO users (email, password) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";
	 
	 if(mysqli_query($link,$query))
	 {
		  $_SESSION['email']=$_POST['email'];
		  header("Location: session.php");
		 
	 }
	 else{
		 echo" there was a problem";
	 }
 
 }

}
}

?>
<form method="post">
<input name="email" type="text" >
<input name="password" type="password">
<input type="submit" value="sign up">


