<?php
require("dbconnect.php");
?>

<html>

   <?php
	require('home.php');
?>
<div>
<br><br><br>
<form>
	<center>
	<table align="center"  >
			
    <?php
	
		$query="select * from category";								
		$res=mysqli_query($conn,$query) or die("Wrong Query...");
	
		$count=0;
			
		while($row=mysqli_fetch_assoc($res))
			{
				if($count==0)
				{
				echo '<tr>';
             	}
                 
	            
				echo '<td valign="top" width="20%" align="center">
                    
					<a href="categorylist.php?cat_id='.$row['cat_id'].'">
										<img src="../bin/'.$row['cat_img'].'" width="200" height="200">
										<br>'.$row['cat_name'].'</a></td>';
						$count++;							
													
						if($count==4)
							{
							echo '</tr>';
							$count=0;
							}
			}
			
		
											
	echo "</table><br><br><br><center>";

											
			
   											
    ?>
    </center>
</form>
</div>
</body>
</html>
	