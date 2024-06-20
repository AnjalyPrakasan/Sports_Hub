<html>
<head>
</head>
<div>
<?php
require('menu.php');
?>
</div>
<body bgcolor="white"><div>
<center>
<table border="1" cellpadding="25" cellspacing="10" width="500">
<tr>
<th colspan="3">FEEDBACKS</th>
</tr>
<tr>
<th>Orderid</th>
<th>User Name</th>
<th>Message</th>
</tr>
<?php
						require('dbconnect.php');
						$query="select f.o_id,u_name,feedback from feedback f,customer_details c,order_master o where c.c_id=o.c_id and f.o_id=o.o_id " ;
						$result = mysqli_query($conn,$query);
						$i=1;
						while($row = $result->fetch_assoc())
					     {
							?>
			            <tr>			
						    <td><?php echo $row['o_id'] ?></td>	
						    <td><?php echo $row['u_name'] ?></td>
						    <td><?php echo $row['feedback'] ?></td>
								
					    </tr>
						<?php }?>
			
</table>
</center>
</div>
</body>

</html>