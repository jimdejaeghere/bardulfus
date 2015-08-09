<?php
  include '../config.php';

	$query = "SELECT ProductID, ProductName, ProductPrice, ProductCategorie, ProductLocation, ProductAdded, ProductActive FROM Products ORDER BY ProductName";
	$data = array();

	if ($result = $mysqli->query($query)) {
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
	}
	
	echo (json_encode($data));
	
	$mysqli->close();
?>