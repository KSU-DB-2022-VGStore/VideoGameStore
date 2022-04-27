<!DOCTYPE html>
<html lang="en", xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		<title>Korby Store</title>
		<link href="style.css"
			rel="stylesheet"/>
	</head>

	<body>
		<?php
			//include connection file
			include "conneciton. php";
    		//echo "Connected Successfully...";
		?>
		<div class="split left">
			<div class="header">
			<a href="https://github.com/KSU-DB-2022-VGStore/VideoGameStore">
			 <img src="../images/github.png" alt="Github" 
			 style="width:30px; height:30px;"> </a>

			 <a href="https://twitter.com/edelgard2448?t=JsdyuOuS-aQhNzgWCJIJUg&s=09">
			 <img src="../images/twitter.png" alt="Twitter" 
			 style="width:36px; height:30px;"> </a>

			 <a href="https://www.innersloth.com/games/among-us/">
			 <img src="../images/mongo.png" alt="AmongUs" 
			 style="width:30px; height:30px;"> </a>
		</div>
		<div class="centered">
		<h3> OH </h3>
			<div class="overlay">
				<p> hello. </p>
			</div>
		</div>
		</div>
		<div class="split right">
		<div class="centered">
		<h1>Welcome Admin.</h1>
			<a class = "btn-bgstroke" href="insert.php"> Insert New Data </a>
			<br> 
			<a class = "btn-bgstroke" href="join.php"> View Relations </a>
			<br>
			<a class = "btn-bgstroke" href="info.php"> Update Information </a>
		</div>
		</div>
		<br>
		
	
	</body>
</html>