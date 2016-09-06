<?php
class person
{
 //Use of this keyword
  var $name;//global variable
 function set_name($data)
 {
  global $name;
  $name=$data;
 }
 function get_name()
 {
  global $name;
  return $name;
 }
}
$obj=new person();
$obj->set_name("Aman");
echo "Your name is ".$obj->get_name();
?>