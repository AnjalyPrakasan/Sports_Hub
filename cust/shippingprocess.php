<?php
session_start();
require('dbconnect.php');
if(isset($_SESSION['cart']))
{

  $cid=$_SESSION['c_id'];
  $dt=$_SESSION['dte'];	

   $qq = "select max(o_id) as o_id from order_master where order_date='$dt' and c_id=$cid";									
   $ress = mysqli_query($conn,$qq) or die("wrong  query..");
  $roww = mysqli_fetch_assoc($ress);
  $oid=$roww['o_id'];

	foreach($_SESSION['cart'] as $id=>$x)
    {	
		$n=$x['itid'];
       	$q=$x['qty'];	
       	$r=$x['rate'];
		    $query="insert into order_details(o_id,s_id,quantity,rate,o_status) values('$oid','$n','$q','$r','ordered')";	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");	
	
    }

if(!empty($_POST))
{
			$snm=$_POST['sname'];
			$hname=$_POST['hname'];
			$stname=$_POST['stname'];
            $city=$_POST['city'];
            $dist=$_POST['dist'];
            $state=$_POST['state'];
			$pin=$_POST['pin'];
             $cno=$_POST['cntno'];
			
		
			
	$query="insert into shipping_details(shipname,ch_name,street_name,city,district,state,pin,ph_no,c_id,o_id) values ('$snm','$hname','$stname','$city','$dist','$state','$pin','$cno','$cid','$oid')";
			
			mysqli_query($conn,$query) or die("Can't Execute...");
			header("location:deliverydetails.php");
			
			
	}	
  }    
  
      ?>  
