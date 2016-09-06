<?php
class abc
{
 //function with no argument & but return value
 function add()
 {
  return 10+20;
 }
 function sub()
 {
 return 20-10;
 }
}
$obj=new abc();
$a=$obj->add();
echo "Add=".$a."<br>";
$b=$obj->sub();
echo "Sub=".$b."<br>";
?>