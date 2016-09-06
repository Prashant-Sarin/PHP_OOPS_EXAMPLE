<?php

include_once 'include/functions.php';
$user = new User();

// Checking for user logged in or not
/*if (!$user->get_session())
{
   header("location:login.php");
}*/

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $register = $user->register_user($_POST['name'], $_POST['username'], $_POST['password'], $_POST['email']);
    if ($register) {
        // Registration Success
        echo 'Registration  successful <a href="login.php">Click here</a> to login';
    } else {
        // Registration Failed
        echo 'Registration failed. Email or Username already exits please try again';
    }
}
?>
<html>
    <head>
        <title>Register</title>
		<style>
		body
		{
		font-family:Arial, Helvetica, sans-serif;
		}
		</style>
		<script language="javascript" type="text/javascript"> 
		
	
            function submitregistration() {
                var form = document.reg;
				
     
 
if(form.name.value == "")
{
alert( "Enter name." );
return false;
}
else if(form.username.value == "")
{
alert( "Enter username." );
return false;
}
else if(form.password.value == "")
{
alert( "Enter password." );
return false;
}
else if(form.email.value == "")
{
alert( "Enter email." );
return false;
}
 
 
}
 
 
	</script> 
    </head>
    <body>
        <div id="container">
            
            <div id="main-body">
                <br/><br/>
				<table border="2" cellpadding="20">
				<tr><td>
                <form method="POST" action="register.php"  id="register_form" name="reg">
                    <div class="head">
                        <b> I am new user !</b><br/><br/>
                    </div>
                    <label>Full Name :</label><br/>
                    <input type="text" name="name"  required="true"/><br/><br/>
                    <label>Username :</label><br/>
                    <input type="text" name="username"  required="true"/><br/><br/>
                    <label>Password :</label><br/>
                    <input type="password" name="password" required="true"/><br/><br/>
                    <label>Email :</label><br/>
                    <input type="text" name="email" id="email"  required="true"/><br/><br/>
                    <input type="submit" name="register_btn" onClick="return( submitregistration());" value="Register"/><br/><br/>
                    <label><a href="login.php">I already Registered. Login here</a></label>                    
                </form>
				</td></tr>
				</table>
            </div>
            
        </div>
    </body>
</html>
