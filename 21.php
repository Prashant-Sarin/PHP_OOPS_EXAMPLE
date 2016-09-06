<?php
//Single Interface

/*PHP does not support multiple inheritance directly, to implement this we need Interface. It is much similar to Interface of Java.

In PHP, signature of the method are declared in the Interface body, and the body part of the method is implemented in derived class. Variables are declared as constant and it can not be changed in the child classes.

We use implement keyword to extend this kind of class, at the same time we can implement more than one interface and one interface can be implemented by another interface.

All methods declared in an interface must be public and the variables should be constant.
This is mandatory that we must declare the body part of the method in the derived class otherwise an error message will be generated. */

interface i1
{
 function sum();
 function sub();
}
class c1 implements i1
{
 function sum()
 {
 return 10+20;
 }
 function sub()
 {
 return 20-10;
 }
}
$obj=new c1;
$m=$obj->sum();
echo $m."<br>";
$n=$obj->sub();
echo $n;
?>