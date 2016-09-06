<?php
//function overriding
class A
{
 function disp()
 {
  echo "Inside the Base class<br/>";
 }
}
class B extends A
{
 function disp()
 {
  echo "Inside the Chlid class<br/>";
 }
}
class C extends A
{

}
$obj=new B();
$obj->Disp();
$obj2=new C();
$obj2->Disp();
?>
