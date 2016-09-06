<?php
//single inheritance
class c1
{
 function sum($a,$b)
 {
 return $a+$b;
 }
}
class c2 extends c1
{
 function sub($c,$d)
 {
 return $c-$d;
 }
}
$obj=new c2();
$a=$obj->sum(10,20);
echo "Add=".$a."<br>";
$b=$obj->sub(30,20);
echo "Sub=".$b;
?>