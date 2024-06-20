<?php
session_start();
require('dbconnect.php');

	if(!empty($_POST))
	{
			
			
			$cat_id=$_POST['cat_id'];
			$item=$_POST['item'];
			$price=$_POST['price'];
			$img=$_POST['img'];
			$quantity=$_POST['quantity'];
			$description=$_POST['description'];
			$oprice=$_POST['oprice'];
						
			$query="insert into product_details(cat_id,item,price,s_img,quantity,description,o_price)values
			('$cat_id','$item','$price','$img','$quantity','$description','$oprice')";
		
			
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");

			header("location:additems.php?yes=1");	

			}


			else
			{
			header("location:additems.php?no=1");	
			}
		
		
	
	
	
?>    