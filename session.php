<?php


session_start();

if($_SESSION['email'])
{
	
	echo "you are logged in";
}
else
{
	
	header("location:form.php");
}
	

?>
