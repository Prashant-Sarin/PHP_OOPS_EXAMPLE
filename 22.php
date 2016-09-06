<?php
//Multiple Interfaces
interface i1
{
 function sum();
}
interface i2
{
 function sub();
}
class c1 implements i1,i2
{
 function sum()
 {
 return 10+20;
 }
 function sub()
 {
 return 20-10;
 }
}
$obj=new c1;
$m=$obj->sum();
echo $m."<br>";
$n=$obj->sub();
echo $n;
?>