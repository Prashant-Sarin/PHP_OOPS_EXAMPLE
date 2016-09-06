<?php
class abc
{
 //function with argument & with return value
 function add($a,$b)
 {
  return $a+$b;
 }
 function sub($c,$d)
 {
 return $c-$d;
 }
}
$obj=new abc();
$a=$obj->add(10,20);
echo "Add=".$a."<br>";
$b=$obj->sub(30,10);
echo "Sub=".$b."<br>";
?>