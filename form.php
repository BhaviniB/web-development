 <?php
 
 
 if(array_key_exists('email',$_POST) OR array_key_exists('password',$_POST))
 {


if($_POST['email']=='')
{
	
	echo "the email; address is required";
}
else if($_POST['password']=='')
{
	
	echo "the pass is required";
}
//checking if user exists
$query="SELECT id from users WHERE email='".mysqli_real_escape_string($link,$_POST['email']."'";
$result=mysqli_query($link,$query);
if(mysqli_num_rows($result)>0)
	echo "email address has been taken";
 }
 else{
	 
	 $query="INSERT INTO users (email,password ) VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."'",'".mysqli_real_escape_string($link,$_POST['password'])."'")";
	 
	 if(mysqli_query($link,$query))
	 {
		 echo "you have been signed up";
		 
	 }
	 else{
		 echo" there was a problem";
	 }
 
 }

 
$user='root';
$pass='';
$db='testdb';
$link=new mysqli ('localhost',$user,$pass,$db)
 or die("Unable to connect");
?>
<form method="post">
<input name="email" type="text" >
<input name="password" type="password">
<input type="submit" value="sign up">







</form>