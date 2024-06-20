
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title> Login Page</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>


  
  <body>

   

    <!--form area start-->
    <div class="form">
      <!--login form start-->
      <form class="login-form" action="loginprocess.php" method="post">
        <i class="fas fa-user-circle"></i>
        <input class="user-input" type="text" name="u_name" placeholder="Username" required>
        <input class="user-input" type="password" name="pwd" placeholder="Password" required>
      
          <?php
    if(isset($_GET['usr']))
	{
               echo '<font color="white" size="4">Incorrect User Name...</font>';
	     echo '<br><br>';
	}
	if(isset($_GET['pwd']))
	{
               echo '<font color="white" size="4">Incorrect password...</font>';
	     echo '<br><br>';
	}
    if(isset($_GET['customer']))
	{
             echo '<script>window.open("menu.php","_top"); window.focus();</script>';
	}
	?>

         
        <input class="btn" type="submit" name="" value="LOGIN">
        <div class="options-02">
          <p>Not Registered? <a href="#">Create an Account</a></p>
        </div>
      </form>
      <!--login form end-->
      <!--signup form start-->

      <form class="signup-form" action="regprocess.php" method="post">
        <i class="fas fa-user-plus"></i>
        <input class="user-input" type="text" name="u_name" placeholder="Username" required>
        <input class="user-input" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter valid Email " required>
        <input class="user-input" type="password" name="pwd" placeholder="Password" required>
        <input class="btn" type="submit" name="" value="SIGN UP">
        <div class="options-02">
          <p>Already Registered? <a href="#">Sign In</a></p>
        </div>
      </form>
      <!--signup form end-->
    </div>
    <!--form area end-->

    <script type="text/javascript">
    $('.options-02 a').click(function(){
      $('form').animate({
        height: "toggle", opacity: "toggle"
      }, "slow");
    });
    </script>



  </body>
</html>