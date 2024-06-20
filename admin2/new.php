<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<div>
	<?php
	require('menu.php');
	?>
</div>
<body>
	<div class="center_div">
		<form action="updateitemprocess.php" method="POST" class="container">
		<h1><center><br><br><font color="black">Update Items</center></h1>
		<br>

		<table align="center" cellspacing="10" cellpadding="10">
			<?php
			      session_start();
			      require('dbconnect.php');
			      if(!empty($_GET['s_id']))
	        {
			  	$s_id=$_GET['s_id'];
			  	$_SESSION=array();
				$_SESSION['s_id']=$s_id;
			 	$query="select * from product_details where s_id='$s_id'";
				$res=mysqli_query($conn,$query);
				$row=mysqli_fetch_assoc($res);
				$cat=$row['cat_id'];
			


			
        


            
            echo"<tr><td>ITEM NAME :</td>
				<td><input type='text' size='30' maxlength='30' name='item' required onkeyup='this.value=this.value.toUpperCase()' value=".$row['item']."></td></tr>";
					
				    echo"<tr><td>PRICE:</td>
		            <td><input type='text' name='price' size='30' required value=".$row['price']."></td></tr>";
		           
					echo"<tr><td>O_PRICE:</td>
		            <td><input type='text' name='o_price' size='30' required value=".$row['o_price']."></td></tr>";

					echo"<tr><td>QUANTITY:</td>
		            <td><input type='text' name='quantity' size='30' required value=".$row['quantity']."></td></tr>";
					echo"<tr><td>AVAILABLE:</td>
		            <td><input type='radio' name='avl' value='yes' checked>Yes<br><input type='radio' name='avl' value='no'>No</td></tr>";

					echo"<tr><td>IMAGE:</td>
		            <td><img src=../bin/". $row['s_img']." width='100'></td>
		            <td>NEW IMAGE:</td>
		            <td><input type='file' name='image1' ></td>
		            </tr>";
					echo "<tr><td colspan=2 align=center>
						
					<input  type='submit'  value='SAVE CHANGES' ></td>

					</tr>";

				}

					?>

						
		


			    </table> 
		</form>

	</div>

</body>
</html>