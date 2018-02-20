<?php
if($_POST)
{
	$fam=array("bhavini","manu","monika");
	$isk="false";
	foreach($fam as $value)
	{
		if($value==$_POST['name'])
			$isk="true";
			
		else
			$isk="false";
	
			}
if($isk)
echo
 "hey".$_POST['name'];
else
		echo "fuckoff";
			
			}


?>






<p> What is your name?</p>
<form method="post">
 <input name="name" type="text">
 <input type="submit" value="go"> 
 </form>