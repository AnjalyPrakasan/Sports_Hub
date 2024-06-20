
<html>
<head>
	<title>DETAIL</title>
</head>


	<?php
	require('home.php');
?>
<?php 
    
	require('dbconnect.php');
	
	$id=$_GET['id'];
	$query="select * from product_details,category where category.cat_id=product_details.cat_id and product_details.available='yes' and product_details.s_id='$id'";
	
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);
?>


	
<div>	
<h1 class="title"><?php echo $row['item'];?></h1>
									
<?php
										
echo '<table border="0" width="100%">
 <tr>
<td><hr color="#ADD8E6"></td>
</tr>
<tr align="center" >
 <td><font color="#0000A0">Product Details</font></td>
</tr>
<tr>
<td><hr color="#ADD8E6"></td>
</tr>
</table>
											
<table border="0"  width="100%" bgcolor="#ffffff">
<tr> 
													
<td width="15%" rowspan="3">
<img src=../bin/'.$row['s_img'].' width="200">
													
</td>
</tr>
											
<tr> 
<td width="50%" height="100%">
<table border="0"  width="100%" height="100%">
<tr valign="top">
<td align="right" width="20%%"><font color="#0000A0">Product Name</font></td>		

<td width="6%">:</td>
<td align="left"><font color="#0000A0">'.$row['item'].'</font></td></tr>
<tr>
<td align="right"><font color="#0000A0">description</font></td>
						
<td>: </td>
							
<td align="left"><font color="#0000A0">'.$row['description'].'</font></td>
							
</tr>
															

<tr>
<td align="right"><font color="#0000A0">Category</font></td>
						
<td>: </td>
							
<td align="left"><font color="#0000A0">'.$row['cat_name'].'</font></td>
							
</tr>							
																					
<tr>
																
<td align="right"><font color="#0000A0"> Price</font></td>
																
<td>: </td>
																
<td align="left"><font color="#0000A0">'.$row['price'].'</font></td>
</tr>

<tr>
																
<td align="right"><font color="#0000A0"> Offer Price</font></td>
																
<td>: </td>
																
<td align="left"><font color="#0000A0">'.$row['o_price'].'</font></td>
</tr>
</table>
										
														
</td>
</tr>
</table>
										

											
																	
									 
 <tr><td colspan=2><hr color="#ADD8E6"></td></tr>
											
<table border="0" width="100%">
												
		<tr align="center" >';


 if(isset($_SESSION['c_id']))


	{

echo ' <td><a href=processcart.php?s_id='.$row['s_id'].'&rate='.$row['price'].'&itm='.$row['item'].'&offer_rate='.$row['o_price'].'>
			<img src="images/addcart.jpg" height="50" width="50">
   					</a></td>';

}


					
else
{
					
echo '<td><h4><font color="blue">Please Login to buy..</font></h4></td>';
					
				echo '</tr></table>';
}
	
			?>
									
</div>
</html>
