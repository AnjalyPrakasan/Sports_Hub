

<html>
<?php
	require('home.php');
?>
<div>
			
							<h1 class="title" align="center">Viewcart</center></h1>
							<div class="entry">
						
							<pre><?php
							//print_r($_SESSION);
							?></pre>
						
							<form action="processcart.php" method="POST" color="black">
							<table width="100%" border="0">
								<tr >
									<Td> <b>No
									
									<td> <b>Item Name
									
									<td> <b>Qty
									<td> <b>Rate
									<td> <b>Price
									<td> <b>Delete
								</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
								$tot = 0;
									$i = 1;
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										echo '
											<tr>
											<Td> '.$i.'
											
											<td> '.$x['itm'].'</td>
											
						<td> <input type=text size=2 value="'.$x['qty'].'" name="'.$id.'">
											<td> '.$x['rate'].'
											<td> '.($x['qty']*$x['rate']).'
							<td> <a href="processcart.php?id='.$id.'">Delete</a>
										</tr>';										
										
							$tot = $tot + ($x['qty']*$x['rate']);
										$i++;
									}
									}
								
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							<tr>
							<td colspan="6" align="right">
							<h4>Total:</h4>
							
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							<Br>
								</table>						

								<br><br>
							<center>
							<input type="submit" value=" Re-Calculate " > 
							<?php
                                echo '<a href="shipping.php?t='.$tot.'">CONFIRM & PROCEED</a>';
                                                         ?>
							</center>
							</form>
							
</div>
</html>
