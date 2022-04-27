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
		<h1>View a Relation. </h1>

		<div class= "fields">
		<form action = "innerjoin.php">
		<div class="search-box">
			<label class="search-label">Choose Table 1:</label>
			<div>
				<select name="tab1" id="tab1">
					<option value="customer">Customer</option>
					<option value="game">Game</option>
					<option value="employee">Employee</option>
				</select>
			</div>
			
		</div>

		<div class="search-box">
			<label class="search-label">Choose Table 2:</label>
			<div>
				<select name="tab2" id="tab2">
					<option value="orders">Orders</option>
					<option value="publisher">Publisher</option>
				</select>
			</div>
			<br>
		</div>

		<div class="search-box">
			<label class="search-label">Join on variable: </label>
			<input type=text name=keyword>
			<br>
		</div>
		<p>&nbsp;</p>
		<input type="submit" value="Join">
		</form>
		</div>
		</div>
	</body>
</html>