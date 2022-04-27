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
		<h1>Update Information. </h1>

		<div class="fields">
		<form action = "infoupdate.php">
		<div class="search-box">
			<div>
            <label class="search-label">Select Table to Update: <br></label>
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
			<p> &nbsp; </p>
		</div>
        <input type="submit" value="Submit">
		</form>
		</div>
		</div>
		<p> &nbsp; </p>
        <div class="fields">
		<form action = "infodelete.php">
		<div class="search-box">
			<div>
            <label class="search-label">Select Table to Delete From: <br></label>
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
			<p> &nbsp; </p>
		</div>
        <input type="submit" value="Submit">
		</form>
	</div>
	</div>
	</body>
</html>