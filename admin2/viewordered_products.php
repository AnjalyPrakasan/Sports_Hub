<html>
<head>
<style>
table,th,td {
	border: 1px solid #fff;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 50%;
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
 <form method="POST" action="vieworder.php">
				 
	<table cellpadding="10"  id="fb" align="center">
	<caption align="center">
	<b><h1><font color="white">ORDERED PRODUCTS</font></h1>
	</caption>
	<tr>

	<th><b>SL NUMBER</b></th>
	<th><b>ITEM ID</b></th>
	<th><b>ITEM NAME</b></th>
	<th><b>QUANTITY</b></th>
	<th><b>PRICE</b></th>
	<th><b>STATUS</b></th>
	<th colspan=2><b>ACTION</b></th>
	
	</tr>
		<?php
			require('dbconnect.php');
			if(isset($_GET)) 
			{
				$oid=$_GET['oid'];

			$query="select i.s_id,i.item,d.quantity qty1,i.quantity qty2,i.price , d.o_status from order_details d,order_master m ,product_details i
						where d.o_id=m.o_id and i.s_id=d.s_id and d.o_status!='delivered' and d.o_id='$oid'" ;
			$result = mysqli_query($conn,$query);
			$i=1;
			while($row = $result->fetch_assoc())
			{
				$qty=$row['qty2']-$row['qty1'];
		?>
			<tr><td><?php echo $i ?></td>		
				<td><?php echo $row['s_id'] ?></td>
				<td><?php echo $row['item'] ?></td>
				<td><?php echo $row['qty1'] ?></td>
				<td><?php echo $row['price'] ?></td>
				<td><?php echo $row['o_status'] ?></td>
				<td ><a href="orderstatusupdateprocess.php?oid=<?php echo $oid;?>&qty=<?php echo $qty;?> & s_id=<?php echo $row['s_id'];?>">Update Status</a></td>					
			</tr>
						<?php 
						$i++;
						}
						?>		
						
			<tr><td colspan=7><a href="vieworder.php">GO BACK</a></td></tr>			
	</table>
<?php } ?>	
	</form>
					
</body>
</html>
