<?php
	$host = "localhost";
    $username = "root";
    $password = "usbw";
    $database = "korby_store";

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die('Failed to connect: ' .mysql_error());
    }

?>