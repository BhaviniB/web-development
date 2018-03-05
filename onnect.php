<?php
$user='root';
$pass='';
$db='testdb';
$link=new mysqli ('localhost',$user,$pass,$db)
 or die("Unable to connect");

 //$query="INSERT INTO users(email,password) VALUES ('batrabhavini@stu.com','gdszvu')";
 
 
 
 $query="UPDATE users SET email='lalala.com' WHERE id=1 LIMIT 1";
 mysqli_query($link,$query);
/* $query="SELECT * FROM users"; 
if($result=mysqli_query($link,$query))
{
	$row=mysqli_fetch_array($result);
	echo "your email is".$row['email']."
	your password is".$row['password'];
}*/
?>