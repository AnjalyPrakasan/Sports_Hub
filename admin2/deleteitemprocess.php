<?php

 session_start();

require('dbconnect.php');

	if(!empty($_GET['itid']))
         {
		
			$delfd=$_GET['itid'];
			
			$query="delete from product_details where s_id ='$delfd' ";
			$query="UPDATE product_details SET available='no'WHERE s_id='$delfd'";
			mysqli_query($conn,$query) or die("can't Execute...");
			header("location:deleteitems.php");
	      } 	
			
?>