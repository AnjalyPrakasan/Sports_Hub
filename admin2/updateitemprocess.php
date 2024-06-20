<?php
session_start();
require('dbconnect.php');
$s_id=$_SESSION['s_id'];

	if(!empty($_POST))
	{
			
			
			$item=$_POST['item'];
			
			$price=$_POST['price'];
			$o_price=$_POST['o_price'];
			$quantity=$_POST['quantity'];
			$avl=$_POST['avl'];
			$img=$_POST['image1'];
			$query="UPDATE product_details SET item='$item',price='$price',o_price='$o_price',quantity='$quantity',available='$avl' WHERE s_id='$s_id'";
						
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");		
			header("location:deleteitems.php");

	}


			if(!empty($_POST['image1']))
			{
				$query="UPDATE product_details SET s_img='$img'WHERE s_id='$s_id'";
				
				mysqli_query($conn,$query) or die($query."Can't Connect to Query...");	
				header("location:deleteitems.php");
				
			}
		
			
	
	
	
?>    