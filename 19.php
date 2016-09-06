<?php
//Overriding Methods:- this means that you can redefine a base class method in a derived class.
class person
{
var $name;
 function set_name($data)
 {
 $this->name=$data;
 }
 function get_name()
 {
 return $this->name;
 }
}
class friend extends person
{
 var $name;
 function speak()
 {
  echo $this->name. " is speaking.";
 }
 function set_name($data)
 {
  $this->name=strtoupper($data);
 }
}
$obj=new friend;
$obj->set_name("Amit");
$obj->speak();

?>