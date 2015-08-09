<?php
	$dbhost="";
	$dbuser=""";
	$dbpass="";
	$dbname="";

	$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

	if ($mysqli->connect_errno) {
		echo ("Connect failed: " . $mysqli->connect_error);
		exit();
	}
 ?>