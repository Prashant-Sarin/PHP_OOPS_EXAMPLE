<?php
//Overloading Methods:- this means that method name same but behaves differently according to their parameters.
class friend
{
 var $name;
 var $message;
 function speak()
 {
  echo $this->name , " says\ ",$this->message,"\<br>";
 }      
 function set_message($msg)
 {
 $this->message=$msg;
 }
 function __call($method,$arguments)
 {
  if($method=="set_name")
  {
   if(count($arguments)==1)
   {
   $this->name=$arguments[0];
   }
   if(count($arguments)==2)
   {
    $this->name=$arguments[0];
	$this->name=$arguments[1];
   }
  }
 }
}
$obj=new friend;
$obj->set_name("amit");
$obj->set_message("Hello from amit");
$obj->speak();
$obj->set_name("Deep","Deep here");
$obj->speak();
?>