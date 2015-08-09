<?php
session_start();
if (empty($_SESSION['myusername'])) {
    include '../init.php';
} else {
	
  include '../config.php';	
	
	$id = $_GET['id'];

	$sql = "DELETE FROM Categories WHERE CategoriesID ='$id'" ;
	
	$mysqli->query($sql);
		
	$mysqli->close();
}
?>