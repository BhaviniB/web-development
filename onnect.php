<?php
$user='root';
$pass='';
$db='testdb';
$link=new mysqli ('localhost',$user,$pass,$db)
 or die("Unable to connect");

$query="SELECT * FROM users"; 
if(mysqli_query($link,$query))
{
	echo "query was successful";
	
}
?>