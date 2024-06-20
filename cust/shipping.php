
<html>

<?php
	require('home.php');

	require('dbconnect.php');
if(isset($_SESSION['cart']))
{									
	if(isset($_GET['t']))
	{
    $t=$_GET['t'];
    $d=date("y/m/d");
    $_SESSION['dte']=$d;
	$cid=$_SESSION['c_id'];	

	$query="insert into order_master(order_date,c_id,total_amount) values('$d','$cid','$t')";	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
   }
 }
 else
 {
  	header("location:home.php");
 }  
?>


<form action="shippingprocess.php" method="POST">
<center>
<table align="center">
<caption><font color="black" size="5"><b><i>SHIPPING DETAILS</b></i></font>
</caption>

<tr><td>&nbsp;</td></tr>

<tr>
<td><b> NAME :</b>&nbsp;&nbsp;</td>
<td><input type='text' size="30" maxlength="30"name='sname' required></td>
<td>&nbsp;</td>
</tr>

<tr><td>&nbsp;</td></tr>

<tr>
<td><b>HOUSE NAME:</b>&nbsp;&nbsp;</td>
<td><input type='text' size="30" maxlength="30"name='hname' required></td>
<td>&nbsp;</td>
</tr>


<tr><td>&nbsp;</td></tr>

<tr>
<td><b>STREET NAME:</b>&nbsp;&nbsp;</td>
<td><input type='text' size="30" maxlength="30"name='stname' required></td>
<td>&nbsp;</td>
</tr>


<tr><td>&nbsp;</td></tr>


<tr>
<td><b>CITY:</b>&nbsp;&nbsp;</td>
<td><input type='text' size="30"  maxlength="30" name="city" required></td>&nbsp;&nbsp;&nbsp;

</td>
</tr>

<tr><td>&nbsp;</td></tr>


<tr>
<td><b>DISTRICT:</b>&nbsp;&nbsp;</td>
<td><input type='text' size="30"  maxlength="30" name="dist" required></td>&nbsp;&nbsp;&nbsp;

</td>
</tr>

<tr><td>&nbsp;</td></tr>

<tr>
<td><b>STATE:</b>&nbsp;&nbsp;</td>
<td><input type='text' size="30"  maxlength="30" name="state" required></td>&nbsp;&nbsp;&nbsp;

</td>
</tr>

<tr><td>&nbsp;</td></tr>


<tr>
<td><b>PIN:</b>&nbsp;&nbsp;</td>
<td><input type='text' size="30"  maxlength="30" name="pin" required></td>&nbsp;&nbsp;&nbsp;
</td>
</tr>

<tr><td>&nbsp;</td></tr>

<tr>
<td><b>CONTACT NO:</b>&nbsp;&nbsp;</td>
<td><input type='text' size="30"  maxlength="30" name="cntno" required></td>&nbsp;&nbsp;&nbsp;
</td>
</tr>
<tr>
<td>&nbsp;&nbsp;
</td>
</tr>
<tr>
<td colspan="2" align="center"><br/><br/>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='submit'   value='ADD'></td></tr>
</table>
</center>
</form>

<?php
    if(isset($_GET['yes']))
		{
			
			
        /*echo '<font color="red" size="4"><h2 align="center">pls full fill values...</h2></font>';
			echo '<br><br>';*/
			}
?>

</body>
</html>






