<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CUSTOMER HOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      
      <label class="logo">SPORTS HUB</label>

      

      <ul>

        <li><a class="active" href="entrance.php">Home</a></li>
        <li><a href="homecat.php">Category</a></li>
        <li><a href="myorder.php">My orders</a></li>
        <li><a href="viewcart.php">View cart</a></li>
        <li><a href="aboutus.php">About us</a></li>
         
         <?php
         session_start();
         if(isset($_SESSION['c_id']))
         {
          ?>
          <li><a href="logout.php">Logout</a></li>
          <?php
         }
         else{ ?>
         <li> <a href="login.php">Login</a></li>
          <?php
        }
        ?>

        
      </ul>

    </nav>
    
   
    <section></section>
      
  </body>
</html>
