<?php 
session_start();
require('dbconnect.php');
if(!empty($_POST))
          {
          	$cat=$_POST['txtcat'];
            $img=$_POST['txtimg'];
            $q="insert into category(cat_name,cat_img)values('$cat','$img')";
            mysqli_query($conn,$q) or die("wrong query");
            header("location: category.php?added=1");
          }
          else
          {
          	header("location:category.php?not=1");
          }

?>