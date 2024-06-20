<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<?php
require('home.php');
if(isset($_GET['oid']))
{
     $oid=$_GET['oid'];
     $session['oid']=$oid;
}
?>
<body bgcolor="grey">

<div class="bg-img">        
<form  align="center" action="feedbackprocess.php?oid=<?php echo $oid?>" method="POST">
  <center>
<table align="center" cellpadding="10" cellspacing="10">
<tr>     
<th colspan=2><h2> FEEDBACK</h2></th>
</tr>
<tr>
     <td><i><b><font color="indigo">FEEDBACK:</b>&nbsp;&nbsp;</td>
<td><input type='text' size="100" maxlength="50" name="feedback"
 required></td></font></tr>

<tr><td colspan="2" align='center'>
<input type="submit" value="SEND"></td></tr>  </table>           


<?php
if(isset($_GET['yes']))
   {

        echo '<i><b><font color="indigo" size="4">added feedback successfully...</font>';
         echo '<br><br>';
   }
   if(isset($_GET['not']))
   {

        echo '<font color="indigo" size="4">Please full up...</font>';
         echo '<br><br>';
   }
?>

</form>

</div>
</center>
</body>
</html>

