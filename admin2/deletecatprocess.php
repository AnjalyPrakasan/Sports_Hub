<?php
session_start();
require('dbconnect.php');
	if(!empty($_POST['del']))
         {
	$delcat=$_POST['del'];
           $query="delete from category where cat_name ='$delcat' ";
	mysqli_query($conn,$query) or die("can't Execute...");
	header("location:deletecat.php?d=1");
	}	?>
