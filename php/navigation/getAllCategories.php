<?php
  include '../config.php';

	$query = "SELECT * FROM Categories ORDER BY CategorieName";
	$data = array();

	if ($result = $mysqli->query($query)) {
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
	}
	
	echo (json_encode($data));
	
	$mysqli->close();
?>