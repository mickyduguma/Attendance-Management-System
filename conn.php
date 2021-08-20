<?php
	$link = new mysqli('localhost', 'root', '', 'apsystem');

	if ($link->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>