<!DOCTYPE html>
<html lang="en" dir="1tr">
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
	<link rel="stylesheet"  href="adminstyle.css">
</head>
<body>
<form class="box" action="loginprocess.php" method="post">
<h1>Admin Login</h1>
<input type="text" name="username" placeholder="Username" required>
<input type="Password" name="password" placeholder="Password" required>
<input type="submit" name="" value="Login"> 

<?php
if(isset($_GET['usr']))
	{
               echo '<font color="white" size="4">Incorrect User Name...</font>';
	     echo '<br><br>';
	}
	if(isset($_GET['pwd']))
	{
               echo '<font color="white" size="4">Incorrect password...</font>';
	     echo '<br><br>';
	}
   if(isset($_GET['admin']))
	{
             echo '<script>window.open("admindashboard.php","_top"); window.focus();</script>';
	}
	?>

</form>
</body>
</html>