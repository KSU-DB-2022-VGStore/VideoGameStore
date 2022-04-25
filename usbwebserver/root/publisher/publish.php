<!DOCTYPE html>
<html lang="en", xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		<title>Korby Store</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>

	<body>
	<h3>Korby Store: Publishers (<a href="https://github.com/KSU-DB-2022-VGStore/VideoGameStore">GitHub</a>)</h3>
		<fieldset>
		<legend>Insert Data</legend>
		<form action="pubadd.php">
			<p>
			<label for="publisher_id"> Publisher ID </label>
			<input type= "text" name="pub_id">
			</p>
			<p>
			<label for="publisher_name"> Publisher Name </label>
			<input type="text" name="pub_name">
			</p>
			<p>&nbsp;</p>
			<p>
			<input type="submit" value="Submit">
			</p>
		</form>
		</fieldset>
		<br>

		<fieldset>
		<legend>Search Data</legend>
		<form action="pubsearch.php">
			<p>
			Publisher ID
			<input type= "text" name="search_key">
			</p>
			<p>
			<input type="submit" value="Submit">
			</p>
		</form>
		<form action="pubnsearch.php">
			<p>
			Publisher Name
			<input type= "text" name="search_key">
			</p>
			<p>
			<input type="submit" value="Submit">
			</p>
		</form>
		</fieldset>
		<br>
		
		<fieldset>
		<legend> View Data </legend>
		<?php
		//include connection file
		include "../connection.php";

		//display errors
		ini_set('display_errors', 1);
		//view data in the database
		$sql = "SELECT publisher_id, publisher_name FROM publisher";
		$result = $conn->query($sql);
		
		echo "<table border=1>
		<tr>
		<th> Publisher ID </th>
		<th> Publisher Name </th>
		</tr>";

		if ($result->num_rows > 0) {
			while($row = $result->fetch_array()) {
			echo "<tr>";
			echo "<td>" . $row['publisher_id']. "</td>";
			echo "<td>" . $row['publisher_name']. "</td>";
			echo "<tr>";
			}
		}
		echo "</table>";

		$conn->close();
		?>
		</fieldset>
	</body>
</html>