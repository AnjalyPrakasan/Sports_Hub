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
require('menu.php');
?>
</div>
<body bgcolor="grey">
                 
				
<form>

<table style="width:100%" id="fb">
<caption align="center">
<b><h1><font color="white">ORDER DETAILS</font></h1>
</caption>
<tr>

<th><b>SL NUMBER</b></th>
<th><b>ORDER ID</b></th>
<th><b>ORDER DATE</b></th>
<th><b>SHIPPING ADDRESS</b></th>	

<th colspan=2><b>ACTION</b></th>
			
							
						</tr>
						<?php
						require('dbconnect.php');
						$query="select * from shipping_details sh,order_master od,order_details o where o.o_status!='delivered' and od.o_id=sh.o_id and od.o_id=o.o_id" ;
						$result = mysqli_query($conn,$query);
						$i=1;
						while($row = $result->fetch_assoc())
						{
							?>
							<tr><td><?php echo $i ?></td>		
								<td><?php echo $row['o_id'] ?></td>
								<td><?php echo $row['order_date'] ?></td>
								<td><?php echo $row['shipname'].",".$row['ch_name'] .",".$row['street_name'] .",".$row['city'].",".$row['district'].",".$row['state'].",".$row['pin']?></td>
								
								<td ><a href="viewordered_products.php?oid=<?php echo $row['o_id'];?>">View products</a></td>
								
							</tr>
						<?php 
						$i++;
						}
						?>		
						
										
</table>
	
</form>
					
</body>
</html>
