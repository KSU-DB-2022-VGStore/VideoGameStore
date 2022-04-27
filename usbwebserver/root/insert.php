<!DOCTYPE html>
<html lang="en", xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		<title>Korby Store</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>

	<body>
		<?php
		//include connection file
		include "conneciton. php";
		?>
		<div class="centered">
		<h1> Choose a Table to Modify. </h1>
			<a class = "btn-bgstroke" href="../publisher/publish.php"> Publishers </a> <br>
			<a class = "btn-bgstroke" href="../game/game.php"> Games </a> <br>
			<a class = "btn-bgstroke" href="../employee/employ.php"> Employees </a> <br>
			<a class = "btn-bgstroke" href="../customer/customer.php"> Customers </a> <br>
			<a class = "btn-bgstroke" href="../order/order.php"> Orders </a>
		</div>
	</body>
</html>