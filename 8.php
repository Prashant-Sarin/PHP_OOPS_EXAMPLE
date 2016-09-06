<?php
//Access Specifier
class person
{
 private $name;
 public function set_name($data)
 {
  $this->name=$data;
 }
 private function get_name()
 {
  return $this->name;
 }
 public function show()
 {
 return $this->get_name();
 }
}
$obj=new person();
$obj->set_name("Aman");
//echo "Your name is ".$obj->get_name();
//echo "Your name is ".$obj->name;
echo "Your name is ".$obj->show();
?>