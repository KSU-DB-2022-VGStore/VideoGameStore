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
					<option value="publisher">Publisher</option>
				</select>
			</div>
			<br>
		</div>
        <div class="search-box">
            <label for="pkey"> Enter Primary Key: </label>
			<input type="text" name="pkey">
			</p>
		</div>
        <div class="search-box">
            <label for="updatekey"> Enter Field to Update: </label>
			<input type="text" name="updatekey">
			</p>
		</div>
        <div class="search-box">
            <label for="newvalue"> Enter New Value: </label>
			<input type="text" name="newvalue">
			</p>
		</div>
        <input type="submit" value="Submit">
		</form>
		</fieldset>
        <br>

        <fieldset>
		<legend>Select Table to Delete From: </legend>
		<form action = "infodelete.php">
		<div class="search-box">
			<div>
            <label class="search-label">Choose from the Following: <br></label>
            <br>
            <div>
				<select name="search_in" id="search_in">
                    <option value="customer">Customer</option>
                    <option value="game">Game</option>
					<option value="employee">Employee</option>
					<option value="publisher">Publisher</option>
				</select>
			</div>
			<br>
		</div>
        <div class="search-box">
            <label for="pkey"> Enter Primary Key: </label>
			<input type="text" name="pkey">
			</p>
		</div>
        <input type="submit" value="Submit">
		</form>
		</fieldset>
	<br>
	</body>
</html>