<?php
session_start();
unset($_SESSION['myusername']);
unset($_SESSION['mypassword']);
session_destroy();
header("location: ../indexa.php");
?>
