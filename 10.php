<?php
class c1
{
 private $a;
 private $b;
 function c1()
 {
  $this->a=10;
  $this->b=20;
 }
 function show()
 {
 echo "a=".$this->a."<br>";
 echo "b=".$this->b;
 }
}
$obj=new c1();
$obj->show();
?>