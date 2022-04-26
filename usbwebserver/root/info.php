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
		
		<h3>Korby Store (<a href="https://github.com/KSU-DB-2022-VGStore/VideoGameStore">GitHub</a>)</h3>
		<h3>Update Information... </h3>

		<fieldset>
		<legend>Select Table to Update: </legend>
		<form action = "infoupdate.php">
		<div class="search-box">
			<div>
            <label class="search-label">Choose from the Following: <br></label>
            <br>
            <div>
				<select name="search_in" id="search_in">
                    <option value="customer">Customer</option>
                    <option value="game">Game</option>
					<option value="employee">Employee</option>
					<option value="orders">Orders</option>
					<option value="publisher">Publisher</option>
				</select>
			</div>
			<br>
		</div>
		</form>
		</fieldset>
	<br>
	</body>
</html>