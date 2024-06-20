<html>
<head>
<style>
table,th,td {
	border: 1px solid #fff;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 15%;
}
th,td {
	padding: 6 px;
	text-align: center;
	text-color: violet;
}
#fb tr:nth-child(even){background-color: #f2f2f2;}

#fb tr:hover {background-color: #ddd;}

th {
  background-color: black;
  color: white;
 }
 

</style>
</head>
<div>
<?php
require('home.php');
?>
</div>
<body bgcolor="grey">
                 
				
<form>

<table style="width:100%" id="fb">
<caption align="center">
<b><h1><font color="white"> MY ORDER DETAILS </font></h1>
</caption>

						<?php
						require('dbconnect.php');
						$query="select* from order_master om,order_details od,product_details pr where om.o_id=od.o_id and od.s_id=pr.s_id";
						$result = mysqli_query($conn,$query);
						
						while($row = $result->fetch_assoc())
						{
							?>
							<tr>
								<td><img src=../bin/<?php echo $row['s_img'] ?> width="200"></td>
								<td>PRODUCT NAME:<?php echo $row['item'] ?><br>
								PRICE:<?php echo $row['price']?><br>
								QUANTITY: <?php echo $row['quantity']?><br></td>
								<td>ORDER STATUS: <?php echo $row['o_status']?></td>
								<?php
								$stat=$row['o_status'];
								if($stat=='Delivered')
								{
								?>
								
								<td><a href="feedback.php?oid=<?php echo $row['o_id']?>">send feedback</a></td>


								
								
								
							
						<?php 
						
						}
						?>	
						</tr>
						<?php
						}
						?>	
						
										
</table>
	
</form>
					
</body>
</html>
