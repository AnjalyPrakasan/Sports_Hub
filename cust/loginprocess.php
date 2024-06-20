<?php
   session_start();
   require('dbconnect.php');
      if (!empty($_POST))
	  {
			$username=$_POST['u_name'];
			$q="select * from customer_details where u_name='$username'";
			$res=mysqli_query($conn,$q)or die("wrong query");
			$row=mysqli_fetch_assoc($res);
			if(!empty($row))
			{
				if($_POST['pwd']!=$row['pwd'])
				{
					header("Location:login.php?pwd=1");
					
					
				    
				}
			
				else
				{
					$_SESSION=array();
					$_SESSION['c_id']=$row['c_id'];

					header('Location:entrance.php');
				}
			
	        }
	  else 
	  {
	      header("Location:login.php?usr=1");
	  }
	  }
?>	                                                                                            