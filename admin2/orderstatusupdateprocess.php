<html>
<head>
	
</head>
<div>
<?php
require('menu.php');
?>
</div>
<body>
<div class="bg-img">

<div class="center_div">
<form  action="orderstatusupdateprocess.php" method="POST"  class="container">
<h1><center><br><br><font color="black">Update Sports Items</center></h1>
<br>
<table align="center" cellspacing="10" cellpadding="10">
<?php

 session_start();

require('dbconnect.php');

	if(!empty($_GET['oid'])&!empty($_GET['qty'])&!empty($_GET['s_id']))
	{
     $oid=$_GET['oid'];
     $qty=$_GET['qty'];
     $s_id=$_GET['s_id'];
     echo"<tr><td>ORDER ID:</td>
		       <td><input type='text' name='oid' size='30' disable value=".$oid."></td>
		       <td><input type='hidden' name='qty' size='30' disable value=".$qty."></td>
		       <td><input type='hidden' name='s_id' size='30' disable value=".$s_id."></td></tr>";
	 echo"<tr><td>STATUS:</td>
		      <td>
               <select name='stat'>
               <option value='Not yet dispatched'>Not yet dispatched</option>
               <option value='Packed'>Packed</option>
               <option value='Shipped'>Shipped</option>
               <option value='Delivered'>Delivered</option>
               </select>
		      </td></tr>";
	echo "<tr><td colspan=2 align=center>
						
					<input  type='submit'  value='SAVE CHANGES' ></td>

		</tr>";
	}

?>
</table>
</div>
</form>

</div>
</body>
</html>
<?php


	if (isset($_POST['oid']) and isset($_POST['stat']) and isset($_POST['qty'])and isset($_POST['s_id']))
         {
		
			$delfd=$_POST['oid'];
			$stat=$_POST['stat'];
			$qty=$_POST['qty'];
			$s_id=$_POST['s_id'];
			$query="update order_details set o_status ='$stat' where o_id='$delfd'";
			mysqli_query($conn,$query) or die("can't Execute...");
			if ($stat=='Delivered') {
				$query="update product_details set quantity='$qty' where s_id='$s_id'";
			mysqli_query($conn,$query) or die("can't Execute...");
			}
			
			if($qty==0){
				$query="update product_details set available='no' where s_id='$s_id'";
				mysqli_query($conn,$query) or die("Can't Execute...");
			}

			header("location:viewordered_products.php?oid=$delfd");
	} 	
			
?>