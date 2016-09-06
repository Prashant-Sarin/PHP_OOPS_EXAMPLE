<?php
//Multilevel inheritance
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
class c3 extends c2
{
 function mul($e,$f)
 {
 return $e*$f;
 }
}

$obj=new c3();
$a=$obj->sum(10,20);
echo "Add=".$a."<br>";
$b=$obj->sub(30,20);
echo "Sub=".$b."<br>";
$c=$obj->mul(30,20);
echo "Mul=".$c;

?>