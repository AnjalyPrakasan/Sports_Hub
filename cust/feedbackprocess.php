<?php
session_start();
require('dbconnect.php');
   
   if(isset($_GET['oid']))
   {
	if(!empty($_POST))
	{
			
			$id=$_GET['oid'];
			$g=$_POST['feedback'];
		     $query="insert into feedback(o_id,feedback)values('$id','$g')";
		     
		
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");

			header("location:feedback.php?yes=1");

			}


			else
			{
			header("location:feedback.php?no=1");	
			}
		
		
	
	}
	
?>    