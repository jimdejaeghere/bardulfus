<?php
  include '../config.php';

	$query = "SELECT CategoriesID, CategorieName, COUNT(Products.ProductCategorie) AS Counted
              FROM Categories LEFT JOIN Products ON Categories.CategoriesID = Products.ProductCategorie
			  GROUP BY CategoriesID
			  ORDER BY CategorieName";
	$data = array();

	if ($result = $mysqli->query($query)) {
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
	}
	
	echo (json_encode($data));
	
	$mysqli->close();
?>