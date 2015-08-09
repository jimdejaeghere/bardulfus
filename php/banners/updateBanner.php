<?php
session_start();
if (empty($_SESSION['myusername'])) {
    include '../init.php';
} else {	
  include '../config.php';	
	
	$id = $_GET['id'];
	$active = $_GET['active'];

	$sql = "UPDATE Banner SET BannerActive='$active' WHERE BannerID ='$id'" ;
	
	$mysqli->query($sql);
		
	$mysqli->close();
}
?>