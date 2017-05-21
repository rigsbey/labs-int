<?php
	$mysqli = new mysqli('localhost', 'root', '', 'db1');
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
	$mysqli->query("SET NAMES utf8");
	
		
?>