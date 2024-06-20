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
.bg-img {
  /* The image used */
  background-image: url("nn.jpg");
  min-height: 100%;
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
  max-width: 600px;
  padding: 10px;
  background-color: transparent;
}

/* Set a style for the submit button */
.btn {
  background-color: black;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.btn:hover {
  opacity: 1;
}
.foot {
	background-color: black;
}
</style>
</head>
<body>
<div>
<div class="bg-img">
<div>
<?php require('menu.php'); ?>
</div>

<form align="left" action="deletecatprocess.php" method="POST" class="container">
<table align="center"  cellpadding="10" cellspacing="10">

  <caption> <font color="white" size="10"> <b><i>Delete Category</i></b></font></caption>

  <tr><td>&nbsp;<br></td></tr>

<tr>
<td><b><i><font color="white" size="5">Delete category:</b>&nbsp;&nbsp;</td>

<td>
<select name="del">
<?php
require('dbconnect.php');									
$query="select * from category ";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res)){
echo "<option>".$row['cat_name'];	}
?>
</td>
<tr><td  colspan="2" align='center'>
<input type="submit" value="DELETE"></td></tr><br><br></tr>
<tr><td>&nbsp;<br></td>
</tr>
</table>
</form>
</div>
<?php
if(isset($_GET['d']))
{ echo '<i><b><font color="white" size="4">DELETED SUCCESSFULLY!!!......</font>';
echo '<br><br>';
        }
?> 
</div>
</div>
</body>
</html>
