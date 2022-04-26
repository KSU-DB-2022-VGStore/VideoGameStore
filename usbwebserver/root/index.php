<!DOCTYPE html>
<html lang="en", xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		<title>Korby Store</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>

	<body style="background-image: url('../images/background.jpg');">
		<h3>Korby Store (<a href="https://github.com/KSU-DB-2022-VGStore/VideoGameStore">GitHub</a>)</h3>
		<?php
		//include connection file
		include "conneciton. php";
    	echo "Connected Successfully...";
		?>
		<br>
		<br>
		<h3> Welcome User, What Would You Like to Do Today? </h3>
		<ul>
			<li> <a href="insert.php"> Insert New Data </a> </li>
			<li> <a href="join.php"> View Relations </a> </li>
			<li> <a href="info.php"> Update Information </a> </li>
		</ul>
	</body>
</html>