<?php session_start();

	if(isset($_GET['s_id']) and isset($_GET['offer_rate']) and isset($_GET['itm']))
	{
		//add item
		$_SESSION['cart'][] = array("itid"=>$_GET['s_id'],"itm"=>$_GET['itm'],"rate"=>$_GET['offer_rate'],"qty"=>"1");

		header("location: viewcart.php");
	}
	else if(isset($_GET['id']))
	{
		//del a item
		$id = $_GET['id'];
		unset($_SESSION['cart'][$id]);
		header("location: viewcart.php");
	}
	else if(!empty($_POST))
	{
		//update qty
		foreach($_POST as $id=>$val)
		{
			$_SESSION['cart'][$id]['qty']=$val;
			header("location: viewcart.php");
		}
	}


?>