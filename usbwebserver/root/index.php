<!DOCTYPE html>
<html lang="en", xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		<title>Korby Store</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>

	<body>
		<h3>Korby Store (<a href="https://github.com/KSU-DB-2022-VGStore/VideoGameStore">GitHub</a>)</h3>
		
		<?php
		//include connection file
		include "conneciton.php";
    	echo "Connected Successfully...";
		?>
		<br>
		
		<h3> Table of Content </h3>
		<ul>
			<li> <a href="../publisher/publish.php"> Publishers </a> </li>
			<li> <a href="../game/game.php"> Games </a> </li>
			<li> <a href="../employee/employ.php"> Employees </a> </li>
			<li> <a href="../customer/customer.php"> Customers </a> </li>
			<li> <a href="../order/order.php"> Orders </a> </li>
		</ul>
	</body>
</html>