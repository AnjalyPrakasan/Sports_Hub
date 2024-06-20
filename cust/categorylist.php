<?php 
require('dbconnect.php')
 ?>

<html>
   <?php
	require('home.php');
?>
<div>
<br><br><br>
<form>
	<center>
	<table align="center" border=1 cellpadding=5 cellspacing=5>
			
    <?php
	if(!empty($_GET['cat_id']))
    {
		
		$cat=$_GET['cat_id'];
		
	
	    $totalq="select count(*) total from product_details,category where
        category.cat_id=product_details.cat_id and product_details.available='yes' and category.cat_id=$cat";
	
		$totalres=mysqli_query($conn,$totalq) or die("Can't Execute Query...");
		$totalrow=mysqli_fetch_assoc($totalres);
	
	
			$page_per_page=6;
	
			$page_total_rec=$totalrow['total'];
	
			$page_total_page=ceil($page_total_rec/$page_per_page);
	
	
			if(!isset($_GET['page']))
			{
				$page_current_page=1;
			}
			else
			{
				$page_current_page=$_GET['page'];
			}
	
	   											
			$k=($page_current_page-1)*$page_per_page;
			$query="select cat_name,s_id,item,price,s_img from category,product_details where product_details.cat_id=category.cat_id and product_details.available='yes' and
			category.cat_id=$cat LIMIT ".$k .",".$page_per_page;								
									

	
			$res=mysqli_query($conn,$query) or die("Wrong Query...");
	
			$count=0;
			
			while($row=mysqli_fetch_assoc($res))
			{
				if($count==0)
				{
				echo '<tr>';
             	}
                 
	            
				echo '<td valign="top" width="20%" align="center">
                    
					<a href="detail.php?id='.$row['s_id'].'">
					<img src="../bin/'.$row['s_img'].'" width="150" height="150">
					<br>'.$row['item'].'<br>'.$row['price'].'</a></td>';
						$count++;							
													
						if($count==3)
							{
							echo '</tr>';
							$count=0;
							}
			}
			
		
											
	echo "</table><br><br><br><center>";

											
			if($page_total_page>$page_current_page)
			{
				echo '<a href="categorylist.php?cat_id='.$_GET['cat_id'].'&page='.($page_current_page+1).'">Next</a>';
			}
											
			for($i=1;$i<=$page_total_page;$i++)
			{
				echo '&nbsp;&nbsp;<a href="categorylist.php?cat_id='.$_GET['cat_id'].'&page='.$i.'">'.$i.'</a>&nbsp;&nbsp;';
			}
											
			if($page_current_page>1)
			{	
				echo '<a href="categorylist.php?cat_id='.$_GET['cat_id'].'&page='.($page_current_page-1).'">Previous</a>';
			}
    }											
    ?>
    </center>
</form>
</div>
</html>