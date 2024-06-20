<html>
<head>
	<title>WELCOME ADMIN</title>
	<style>
	h2 {
		background-color: white;
	}
	h3 {
		text-align: center;
	}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: none;
  background-color: white;
}
li {
  float: left;
}
li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 12px 16px;
  text-decoration: none;
}
li a:hover, .dropdown:hover .dropbtn {
  background-color:black;
}li.dropdown {
  display: inline-block;}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {background-color:white;}
.dropdown:hover .dropdown-content {
  display: block;
}
.div1 {
  background-image:url("blue.jpg");
  font-type: Arial white;
  width: 100%;
  border: 1px solid white;
  padding: 3%;
  margin: 0px;
.img1 {
	border-radius: 50%;
	}
</style>
</head>

<body bgcolor="white">
  <header>
  <div class="div1">
  
  <div class="main">
<br>
  <ul>
    <li><a href="admindashboard.php" class="active"><b>HOME</b></a></li>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><b>CATEGORY</b></a>
    <div class="dropdown-content">
      <a href="category.php"><b>ADD CATEGORY<b></a>
      <a href="deletecat.php"><b>DELETE CATEGORY<b></a>
      
        </div>
    </li>
      <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><b>SPORT ITEMS</b></a>
    <div class="dropdown-content">
      <a href="additems.php"><b>ADD ITEMS<b></a>
      <a href="deleteitems.php"><b>DELETE OR UPDATE ITEMS<b></a>
      
        </div>
  </li>
      </li>
    <li><a href="vieworder.php"><b>VIEW ORDER</b></a></li>
     <li><a href="feedback.php"><b>FEEDBACK<b></a></li>
    
        <li><a href="logout.php"><b>LOGOUT</b></a></li>
  </ul>
</div>