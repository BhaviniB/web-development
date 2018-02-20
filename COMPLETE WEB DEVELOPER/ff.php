<?php



echo "hello";
$name="BHAVINI";
echo $name;
echo "$name";
$s1="<p>hey</p>"; 

$s2="<p>you suck</p>";
echo $s1." ".$s2;
$myBool=true; 
echo $myBool;

//variable within variable
$dis="$name";
echo $dis; //will display BHAVINI

$myarray[]= array("bhavini","manu","monika");
$myarray[]="ashwin";
echo ($myarray) ; //doesnt do anything but tell is an array
print_r($myarray);
echo "<br><br>";
$anotherarray[0]="pizza";
$anotherarray[1]="burger";
$anotherarray[2]="yoghurt";
$anotherarray["my fav food"]="..";

print_r($anotherarray);

//associative array
$yetanotherarray=array(
"France"=>"French",
"USA"=>"English",
"Germany"=>"German");

print_r($yetanotherarray);
//will delete from the array
unset($yetanotherarray["France"]);
//size
sizeof($yetanotherarray);
$fam[]=array("manu","bhavini","monika");
foreach($fam $key=> $value)
{ $fam[$key]=$value."batra";
echo("$key"."has a value"."$value");	
}



?>