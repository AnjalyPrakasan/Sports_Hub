<?php
 session_start();
?>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
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
  background-image: url("ann.jpg");
  min-height: 100%;  /* Center and scale the image nicely */
  background-position: absolute;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
/* Add styles to the form container */
.container {
  position: left;
  left: 400;
  margin: 30px;
  max-width: 500px;
  min-height: 120px;
  padding: 16px;
  background-color: transparent;
 }
/* Set a style for the submit button */
.btn {
  background-color: black;
  position: center;
  color: white;
  padding: 16px 20px;
  margin-left: 90px;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}
.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<div class="bg-img">
 <div>
<?php require('menu.php'); ?>
</div>
<form  action="additemprocess.php" method="POST"  class="container">
<h1><center><br><br><font color="black">Sports Items</center></h1>
<br>
	<table align="center">
                        

					<tr>
					<td><b><i><font color="black" >CATEGORY:</b>&nbsp;&nbsp;</td><td>
						<select name="cat_id" >
						<?php
									
						require('dbconnect.php');									
			
							$query="select * from category ";
			
							$res=mysqli_query($conn,$query);
											
						while($row=mysqli_fetch_assoc($res))
											
							{
								echo "<option value='".$row['cat_id']."'>".$row['cat_name'];												
											
							}	

							
								
						?>
                   <tr><td>&nbsp;</td></tr> 

												
					</select></td>	</tr>
												
						
												
						<tr>
				 <td><b><i><font color="black" >ITEM  :</b>&nbsp;&nbsp;</td>
				<td><input type='text' size="30" maxlength="30" name='item' onkeyup="this.value=this.value.toUpperCase()" required></td>
				<td>&nbsp;</td>
													
				</tr>
												
				<tr><td>&nbsp;</td></tr>
												
				<tr>
					<td><b><i><font color="black" >PRICE:</b>&nbsp;&nbsp;</td>
					<td><input type='text' name='price' size="30" required></td>
													 
				</tr>
				<tr><td>&nbsp;</tr>
				
						<tr>
					<td><b><i><font color="black" >DESCRIPTION:</b>&nbsp;&nbsp;</td>
					<td><input type='text' name='description' size="30" required></td>
													
					</tr>
											
				<tr><td>&nbsp;</td></tr>			
					<tr>
					<td><b><i><font color="black" >QUANTITY:</b>&nbsp;&nbsp;</td>
					<td><input type='text' name='quantity' size="30" required></td>
													
					</tr>
											
				<tr><td>&nbsp;</td></tr>

					
<tr>
					<td><b><i><font color="black" >OPRICE:</b>&nbsp;&nbsp;</td>
					<td><input type='text' name='oprice' size="30" required></td>
													
					</tr>
											
				<tr><td>&nbsp;</td></tr>
<tr>
					<td><b><i><font color="black">IMG:</font></b>&nbsp;&nbsp;</td>

					<td><input type="file" name="img" required></td>
													 
					</tr>	
												
				<tr><td>&nbsp;</td></tr>


<tr>
<td colspan="2" align="center">
						
						<input  type='submit'  value='ADD ITEM'></td>
</tr>

	
<?php


if(isset($_GET['yes']))
	{

echo '<th><i><b><font  color="white" size="4">Added successfully.....</font></th>';
			echo '<br><br>';
}
if(isset($_GET['no']))
	{
echo '<th><font color="white" size="4">please fill up.....</font></th>';
			echo '<br><br>';
        


}
?>


</table>
</div>
</form>

</div>
</body>
</html>