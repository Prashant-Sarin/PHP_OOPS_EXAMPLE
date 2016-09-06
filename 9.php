<?php
//Constructor & Destructor
class c1
{
 /*function c1()
 {
 echo "Constructor is called<br>";
 }*/
 function __construct()
 {
  echo "Constructor is called<br>";
 }
 function __destruct()
 {
 echo "Destructor is called";
 }
}
$obj=new c1();
?>