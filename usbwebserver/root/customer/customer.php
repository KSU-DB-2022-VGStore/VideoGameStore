<!DOCTYPE html>
<html lang="en", xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		<title>Korby Store</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>

	<body>
	<h3>Korby Store: Customers (<a href="https://github.com/KSU-DB-2022-VGStore/VideoGameStore">GitHub</a>)</h3>
		<fieldset>
		<legend>Insert Data</legend>
		<form action="cusadd.php">
			<p>
			<label for="cus_id"> Customer ID </label>
			<input type= "text" name="cus_id">
			</p>
			<p>
			<label for="firstn"> First Name </label>
			<input type="text" name="firstn">
			</p>
            <p>
			<label for="lastn"> Last Name </label>
			<input type="text" name="lastn">
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
		<form action="cussearch.php">
		<div class="search-box">
			<div>
				<label class="search-label">Enter Keyword:</label>
				<input type= "text" name="keyword"/>
			</div>
			<br>
			<label class="search-label">Search Keyword in:</label>
			<div>
				<select name="search_in" id="search_in">
					<option value="customer_id">Publisher ID</option>
					<option value="first_name">First Name</option>
					<option value="last_name">Last Name</option>
				</select>
			</div>
			<br>
			<input type="submit" value="Search">
		</div>
		</div>
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
		$sql = "SELECT * FROM customer";
		$result = $conn->query($sql);
		
		echo "<table border=1>
		<tr>
		<th> Customer ID </th>
		<th> First Name </th>
        <th> Last Name </th>
		</tr>";

		if ($result->num_rows > 0) {
			while($row = $result->fetch_array()) {
			echo "<tr>";
			echo "<td>" . $row['customer_id']. "</td>";
			echo "<td>" . $row['first_name']. "</td>";
            echo "<td>" . $row['last_name']. "</td>";
			echo "<tr>";
			}
		}
		echo "</table>";

		$conn->close();
		?>
		</fieldset>
	</body>
</html>