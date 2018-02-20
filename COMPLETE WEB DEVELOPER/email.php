<?php

$emailTo="lassiebhavini@gmail.com";
$subject="hey";
$body="You are great";
$headers="From: batrabhavini15@stu.upes.ac.in";
if(mail($emailTo,$subject,$body,$headers))
{
	echo "sent successfully";
}
else
{
	echo "couldnt be sent";
}
	
	








?>