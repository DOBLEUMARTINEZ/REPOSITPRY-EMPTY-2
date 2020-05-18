<?php

	$mysqli = new mysqli("localhost", "root", "", "wm_db");

	if ($mysqli->connect_errno) {
	    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	//echo '</br>'.$mysqli->host_info . "\n";

	/*

		user: root
		password: 
		database: wm_db
		server: localhost;

	*/

?>

