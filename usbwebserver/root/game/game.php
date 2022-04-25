<!DOCTYPE html>
<html lang="en", xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		<title>Korby Store</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>

	<body>
	<h3>Korby Store: Games (<a href="https://github.com/KSU-DB-2022-VGStore/VideoGameStore">GitHub</a>)</h3>
		<fieldset>
		<legend>Insert Data</legend>
		<form action="gameadd.php">
			<p>
			<label for="game_id"> Game ID </label>
			<input type= "text" name="game_id">
			</p>
			<p>
			<label for="game_name"> Name </label>
			<input type="text" name="game_name">
			</p>
            <p>
			<label for="console"> Console </label>
			<input type= "text" name="console">
			</p>
            <p>
			<label for="genre"> Genre </label>
			<input type= "text" name="genre">
			</p>
            <p>
			<label for="price"> Price </label>
			<input type= "text" name="price">
			</p>
            <p>
			<label for="publisher_id"> Publisher ID </label>
			<input type= "text" name="pub_id">
			</p>
            <p>
			<label for="esrb"> ESRB Rating </label>
			<input type= "text" name="esrb">
			</p>
            <p>
			<label for="stock"> Stock </label>
			<input type= "text" name="stock">
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
		<form action="gamesearch.php">
			<p>
			Game ID
			<input type= "text" name="search_key">
			</p>
			<p>
			<input type="submit" value="Submit">
			</p>
		</form>
		<form action="gamensearch.php">
			<p>
			Name
			<input type= "text" name="search_key">
			</p>
			<p>
			<input type="submit" value="Submit">
			</p>
		</form>
        <form action="consolesearch.php">
			<p>
			Console
			<input type= "text" name="search_key">
			</p>
			<p>
			<input type="submit" value="Submit">
			</p>
		</form>
        <form action="genresearch.php">
			<p>
			Genre
			<input type= "text" name="search_key">
			</p>
			<p>
			<input type="submit" value="Submit">
			</p>
		</form>
        <form action="pubsearch.php">
			<p>
			Publisher ID
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
		$sql = "SELECT * FROM game";
		$result = $conn->query($sql);
		
		echo "<table border=1>
		<tr>
		<th> Game ID </th>
		<th> Name </th>
        <th> Console </th>
        <th> Genre </th>
        <th> Price </th>
        <th> Publisher ID </th>
        <th> ESRB </th>
        <th> Stock </th>
		</tr>";

		if ($result->num_rows > 0) {
			while($row = $result->fetch_array()) {
			echo "<tr>";
			echo "<td>" . $row['game_id']. "</td>";
			echo "<td>" . $row['name']. "</td>";
            echo "<td>" . $row['console']. "</td>";
            echo "<td>" . $row['genre']. "</td>";
            echo "<td>" . $row['price']. "</td>";
            echo "<td>" . $row['publisher_id']. "</td>";
            echo "<td>" . $row['esrb']. "</td>";
            echo "<td>" . $row['stock']. "</td>";
			echo "<tr>";
			}
		}
		echo "</table>";

		$conn->close();
		?>
		</fieldset>
	</body>
</html>