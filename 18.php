<?php
//static method
class c1
{
 static function ss()
 {
 echo "welcome";
 }
}
echo c1::ss();//call directly static method without creating object
?>