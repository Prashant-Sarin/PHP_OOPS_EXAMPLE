<?php
class base
{
 function __construct()
 {
 echo "base class constructor <br>";
 }
 function show_base()
 {
 echo "I am in base class <br>";
 }
}
class derive extends base
{
 function __construct()
 {
 parent:: __construct();
 echo "derive class constructor <br>";
 }
 function show_derive()
 {
 echo "I am in derive class <br>";
 }
}
$obj=new derive();
$obj->show_base();
$obj->show_derive();
?>