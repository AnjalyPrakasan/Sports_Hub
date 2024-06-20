<?php
session_start();
require('dbconnect.php');

	if(!empty($_POST))
	{
			
			
			$username=$_POST['u_name'];
			$email=$_POST['email'];
			$password=$_POST['pwd'];
			
						
			$query="insert into customer_details(u_name,email,pwd)values
			('$username','$email','$password')";
		
			
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");

			header("location:login.php?yes=1");	

			}


			else
			{
			header("location:login.php?no=1");	
			}
		
		
	
	
	
?>    