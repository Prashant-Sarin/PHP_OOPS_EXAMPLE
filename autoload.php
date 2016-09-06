<?php
function __autoload($class_name)
{
 require $class_name.'.php';
}
$obj=new friend;
$obj->set_name("Amit");
$obj->set_message("Deep from Amit.");
echo "Name of your friend is ",$obj->get_name(),".<br>";
echo $obj->get_name(), " says \" ",$obj->speak(),"\"<br>";
?>