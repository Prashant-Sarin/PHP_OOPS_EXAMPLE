<?php
//Access Specifier
class person
{
 public $name;
 public function set_name($data)
 {
  $this->name=$data;
 }
 public function get_name()
 {
  return $this->name;
 }
}
$obj=new person();
$obj->set_name("Aman");
//echo "Your name is ".$obj->get_name();
echo "Your name is ".$obj->name;
?>