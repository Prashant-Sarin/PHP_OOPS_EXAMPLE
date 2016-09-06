<?php
//creating class constant
class abc
{
 const val=20;
 function show()
 {
 echo self::val;
 }
}

$obj=new abc();
$obj->show();
?>