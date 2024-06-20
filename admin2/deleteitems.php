<html>
<div>
<?php
require('menu.php');
?>
</div>
<head>
<script type="text/javascript">
	
		function sureToApprove(itid)
		{
			if(confirm("Are you sure you want to discontinue this item?")){
				window.location.href ='deleteitemprocess.php?itid='+itid;
			}
		}
		
	</script>

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

<body bgcolor="grey" >
	<form >
		
			
		<br>
	                	
				     <table style="width:100%" id="fb">
						<caption align="center">
						 <b><h1><font color="white">ITEM DETAILS</font></h1>
					   </caption>

					
						<tr>

                          <th><b>ITEM ID</b></th>
                          <th><b>CATEGORY NAME</b></th>
                          <th><b>ITEM NAME</b></th>
                          <th><b>PRICE</b></th>
                          <th><b>O_PRICE</b></th>

                          <th><b>QUANTITY</b></th>
                          <th><b>IMAGE</b></th>
                          <th colspan="6"><b>Action</b></th>
			
                        </tr						
    <?php
		
		require('dbconnect.php');
		
			
		$select = "SELECT *,cat_name FROM product_details,category where product_details.cat_id=category.cat_id and product_details.available='yes'";
		$result =mysqli_query($conn,$select);
		while($row = mysqli_fetch_assoc($result)){
	?>
						
	                        <tr> 					
	                            <td><?php echo $row['s_id'] ?></td>
								<td><?php echo $row['cat_name'] ?></td>
								<td><?php echo $row['item'] ?></td>
								<td><?php echo $row['price'] ?></td>
								<td><?php echo $row['o_price'] ?></td>
								
								<td><?php echo $row['quantity'] ?></td>

								<td><img src="../bin/<?php echo $row['s_img']; ?>" width=100></td>
								<td><a href="new.php?s_id=<?php echo $row['s_id'];?>">Update</a></td>
								
								<td>
									<a href="javascript:sureToApprove(<?php echo $row['s_id'];?>)" >Discontinue</a>

									</td>
							
							</tr>
							
								<?php
								
								}
								
								?>
											
							</table>
						
					
</body>
</html>




