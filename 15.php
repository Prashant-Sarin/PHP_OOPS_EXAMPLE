<?php
class c1
{
 private $a=10;
 protected $b=20;
 public $c=30;
 public function output1()
 {
 echo "a=".$this->a."<br>";
 echo "b=".$this->b."<br>";
 echo "c=".$this->c."<br>";
 }
}
/*$obj=new c1();
$obj->output1();
//$obj->a=20;
//$obj->b=40;
$obj->c=50;
$obj->output1();*/

class c2 extends c1
{
 private $d=40;
 public $e=50;
 public function output2()
 {
  echo "a=".$this->a."<br>";
  echo "b=".$this->b."<br>";
  echo "c=".$this->c."<br>";
  echo "d=".$this->d."<br>";
  echo "e=".$this->e."<br>";
  
 }
}

/*$obj=new c2();
$obj->output2();
//echo $obj->b;
echo $obj->c;
$obj->output1();*/

class c3 extends c2
{
 public function output3()
 {
  echo "a=".$this->a."<br>";
  echo "b=".$this->b."<br>";
  echo "c=".$this->c."<br>";
  echo "d=".$this->d."<br>";
  echo "e=".$this->e."<br>";  
 }
}
 
 $obj=new c3();
 $obj->output3();

?>