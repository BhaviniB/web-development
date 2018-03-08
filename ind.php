<?php

setcookie("customerid","1234",time()+ 60*60*24);//down to a day
setcookie("customerid","",time()-60*60);//unsets the cookie,doesnt remove until the next page load



$_COOKIE["customerid"]="test";
echo $_COOKIE["customerid"];



?>
