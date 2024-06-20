<?php
   session_start();
   require('dbconnect.php');
      if (!empty($_POST))
	  {
			$username=$_POST['username'];
			$q="select * from admin_login where username='$username'";
			$res=mysqli_query($conn,$q)or die("wrong query");
			$row=mysqli_fetch_assoc($res);
			if(!empty($row))
			{
				if($_POST['password']!=$row['password'])
				{
					header("Location:adminlogin.php?pwd=1");
					
					
				    
				}
			
				else
				{
					$_SESSION=array();
					$_SESSION['username']=$row['username'];
					header('Location:admindashboard.php');
				}
			
	        }
	  else 
	  {
	      header("Location:adminlogin.php?usr=1");
	  }
	  }
?>	                                                                                            