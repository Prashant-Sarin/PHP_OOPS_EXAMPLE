<?php
/* Abstract Class:- An Abstract class is one that is not used to create objects. If a class contains abstract method then the class must be declared as abstract. Any method which is declared as abstract must not have the implementation part but the declaration part only.
The child classes which inherits the property of abstract base class, must define all the methods declared as abstract. */
abstract class c1
{
 public $name;
 public $age;
 public $city;
 function getdata($n,$a,$c)
 {
  $this->name=$n;
  $this->age=$a;
  $this->city=$c;
 }
 abstract function show(); // Abstract method
}

class c2 extends c1
{
 function show()
 {
  echo "Your name is  ".$this->name."<br>";
  echo "Your age is  ".$this->age."<br>";
  echo "Your city is  ".$this->city."<br>";
 }
}

//$obj=new c1;
$obj=new c2;
$obj->getdata("Amit",23,"Noida");
$obj->show();
?>