<?php
$q=0;
 if(is_numeric($_GET['number'])&&$_GET['number']>0&&round($_GET['number'],0))
	 
 {
	 for($i=1;$i<=($_GET['number']);$i++)
		 
	 
	 {
		 if($_GET['number']%$i==0)
		 $q++;
		 
		 
	 }
	 if($q>2)
		 echo "not prime";
	 else
		 echo "prime";
 }
 else if($_GET)
 echo "the number isnt whole";
?>



<p> What is your number?</p>
<form>
 <input name="number" type="text">
 <input type="submit" value="go">
 </form>