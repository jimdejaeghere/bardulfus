<?php
  include '../config.php';

	$query = "SELECT * FROM Banner";
	$data = array();

	if ($result = $mysqli->query($query)) {
		while ($row = $result->fetch_assoc()) {
			$data[] = array(
        'BannerID' => $row['BannerID'],
        'BannerLocation' => $row['BannerLocation'],
        'BannerActive' => (int)$row['BannerActive']
      );
		}
	}
	
	echo (json_encode($data));
	
	$mysqli->close();
?>