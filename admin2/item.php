<div class="bg-img">

<div class="center_div">
<form action="additemprocess.php"	method="POST" class="container">
	<h1><center><br><br><font color="black">Sport Items</center></h1>

		<br>
		 <table align="center">

		 	<tr>
		 		<td><b><i><font color="white" > CATEGORY: </b>&nbsp;&nbsp;</td>
		 		<td>
		 			<select name="cat">
		 			<?php
		 			
		 			require('dbconnect.php');

		 			 $query="select * from category";
		 			 $res=mysqli_query($conn,$query);

		 			 while($row=mysqli_fetch_assoc($res))
		 			 {
		 			 	echo "<option value='".$row['catid']."'>".$row['catname'];
		 			 }	
		 			 ?>
		 		<tr><td>&nbsp;</td></tr>
		 		</select>	 

		 		</td>	
		 	
		 </table>