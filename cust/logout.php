<?php
session_start();
unset($_SESSION['c_id']);
session_destroy();
header('Location:entrance.php');
exit;
?>