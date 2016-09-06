<?php
/* Final keyword prevents child classes from overriding a method of super or parent class. If we declare a class as final then it could not have any child class that means no class can inherit the property of this class. */
class A
{
 final public function disp()
 {
 echo "Inside the final function";
 }
}
class B extends A
{
 function disp()
 {
 echo "Inside the final function";
 }
}
$obj=new B();
$obj->disp();
?> 





?>