<?php
 session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}
* {
  box-sizing: border-box;
}

.bg-img {   background-image: url("shuttle2.jpg");
min-height: 100%;
width: 1220px;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}


/* Add styles to the form container */
.container {
  position: left;
  left: 350;
  margin: 0px;
  width: 600px;
  padding: 10px;
  background-color: transparent;
}
/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 40px 40px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}.btn:hover {
  opacity: 1;}
.foot {
	background-color: white;
}
.link{
  color: white;
 }
</style>
</head>
<body>
<div>
<div class="bg-img">
<div>
<?php require('menu.php'); ?>
</div><form  align="left" action="categoryprocess.php" method="POST" class="container">
<table align="center" cellpadding="10" cellspacing="10">
<caption><font color="white" size="6"><b><i><center>Category</b></center></i></font></caption>

<tr><td>&nbsp;<br></td>
</tr>

<tr><td>&nbsp;<br></td>
<tr>
<td><i><b><font color="white">Category Name:</b>&nbsp;&nbsp;</td>
<td><input type='text' size="30" maxlength="30" name="txtcat" onkeyup="this.value=this.value.toUpperCase()" required></td></font></tr>
<tr>
<td><i><b><font color="white">Category Image :</b>&nbsp;&nbsp;</td>
<td><input type='file' size="30" maxlength="30" name="txtimg" required></td></font></tr>
<tr><td colspan="2" align='center'>
<input type="submit" value="SUBMIT"></td></tr>


<?php

if (isset($_GET['added']))
{
  echo '<i><b><font align="center" color="white" size="4">Added successfully...</font>';
}
if(isset($_GET['not']))
{
  echo '<i><b><font align="center" color="white" size="4">please fill up...</font>';
  echo '<br><br>';
}
?>


</form>


</div>


</body>
</html>
