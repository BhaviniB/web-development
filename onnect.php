<?php
$user='root';
$pass='';
$db='testdb';
$link=new mysqli ('localhost',$user,$pass,$db)
 or die("Unable to connect");

 //$query="INSERT INTO users(email,password) VALUES ('batrabhavini@stu.com','gdszvu')";
 
 
 
 //$query="UPDATE users SET email='lalala.com' WHERE id=1 LIMIT 1";
 //mysqli_query($link,$query);

 //$query1="UPDATE users SET password='lalala123' WHERE email='lalala.com' LIMIT 1";
 
 //mysqli_query($link,$query1);
 /* $query="SELECT * FROM users"; 
*/
if($result=mysqli_query($link,$query))
{
	while($row=mysqli_fetch_array($result))
	{
	//echo "your email is".$row['email']."
	//your password is".$row['password'];

	print_r($row);
	}
	}
?>