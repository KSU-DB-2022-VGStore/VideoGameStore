<!DOCTYPE html>
<html lang="en", xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		<title>Korby Store</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>

	<body>
	<h3>Korby Store: Orders (<a href="https://github.com/KSU-DB-2022-VGStore/VideoGameStore">GitHub</a>)</h3>
		<fieldset>
		<legend>Insert Data</legend>
		<form action="orderadd.php">
			<p>
			<label for="oid"> Order ID </label>
			<input type= "text" name="oid">
			</p>
			<p>
			<label for="odate"> Date </label>
			<input type="text" name="odate">
			</p>
            <p>
			<label for="status"> Status </label>
			<input type="text" name="status">
			</p>
            <p>
			<label for="discount"> Discount </label>
			<input type="text" name="discount">
			</p>
            <p>
			<label for="emp_id"> Employee ID </label>
			<input type="text" name="emp_id">
			</p>
            <p>
			<label for="cus_id"> Customer ID </label>
			<input type="text" name="cus_id">
			</p>
            <p>
			<label for="game_id"> Game ID </label>
			<input type="text" name="game_id">
			</p>
            <p>
			<label for="amount"> Amount </label>
			<input type="text" name="amount">
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
		<form action="oidsearch.php">
			<p>
			Order ID
			<input type= "text" name="search_key">
			</p>
			<p>
			<input type="submit" value="Submit">
			</p>
		</form>
		<form action="odatesearch.php">
			<p>
			Date
			<input type= "text" name="search_key">
			</p>
			<p>
			<input type="submit" value="Submit">
			</p>
		</form>
        <form action="ostatsearch.php">
			<p>
			Status
			<input type= "text" name="search_key">
			</p>
			<p>
			<input type="submit" value="Submit">
			</p>
		</form>
        <form action="discount.php">
			<p>
			Discount
			<input type= "text" name="search_key">
			</p>
			<p>
			<input type="submit" value="Submit">
			</p>
		</form>
        <form action="empsearch.php">
			<p>
			Employee ID
			<input type= "text" name="search_key">
			</p>
			<p>
			<input type="submit" value="Submit">
			</p>
		</form>
        <form action="cussearch.php">
			<p>
			Customer ID
			<input type= "text" name="search_key">
			</p>
			<p>
			<input type="submit" value="Submit">
			</p>
		</form>
        <form action="gamesearch.php">
			<p>
			Game ID
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
		$sql = "SELECT * FROM orders";
		$result = $conn->query($sql);
		
		echo "<table border=1>
		<tr>
		<th> Order ID </th>
		<th> Date </th>
        <th> Status </th>
        <th> Discount </th>
        <th> Employee ID </th>
        <th> Customer ID </th>
        <th> Game ID </th>
        <th> Amount </th>
		</tr>";

		if ($result->num_rows > 0) {
			while($row = $result->fetch_array()) {
			echo "<tr>";
			echo "<td>" . $row['order_id']. "</td>";
			echo "<td>" . $row['order_date']. "</td>";
            echo "<td>" . $row['status']. "</td>";
            echo "<td>" . $row['discount']. "</td>";
            echo "<td>" . $row['employee_id']. "</td>";
            echo "<td>" . $row['customer_id']. "</td>";
            echo "<td>" . $row['game_id']. "</td>";
            echo "<td>" . $row['amount']. "</td>";
			echo "<tr>";
			}
		}
		echo "</table>";

		$conn->close();
		?>
		</fieldset>
	</body>
</html>