<?php
class person
{
//Parameturized constructor
 private $name;
 private $age;
 private $city;
 function __construct($n,$a,$c)
 {
 $this->name=$n;
 $this->age=$a;
 $this->city=$c;
 }
 function __destruct()
 {
 echo "Your name is remove from memory ".$this->name."<br>";
 echo "Your age is remove from memory ".$this->age."<br>";
 }
 function show()
 {
 echo "Your name is ".$this->name."<br>";
 echo "Your age is ".$this->age."<br>";
 echo "Your city is ".$this->city."<br>";
 }
}
$obj=new person("Aman",23,"Noida");
$obj->show();
?>