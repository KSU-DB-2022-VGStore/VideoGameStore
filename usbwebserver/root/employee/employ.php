<!DOCTYPE html>
<html lang="en", xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		<title>Korby Store</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>

	<body>
	<h3>Korby Store: Employees (<a href="https://github.com/KSU-DB-2022-VGStore/VideoGameStore">GitHub</a>)</h3>
		<fieldset>
		<legend>Insert Data</legend>
		<form action="employadd.php">
			<p>
			<label for="emp_id"> Employee ID </label>
			<input type= "text" name="emp_id">
			</p>
			<p>
			<label for="firstn"> First Name </label>
			<input type="text" name="firstn">
			</p>
            <p>
			<label for="lastn"> Last Name </label>
			<input type="text" name="lastn">
			</p>
            <p>
			<label for="role"> Role </label>
			<input type= "text" name="role">
			</p>
            <p>
			<label for="salary"> Salary </label>
			<input type= "text" name="salary">
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
		<form action="empsearch.php">
			<p>
			Employee ID
			<input type= "text" name="search_key">
			</p>
			<p>
			<input type="submit" value="Submit">
			</p>
		</form>
		<form action="empnsearch.php">
			<p>
			Name
			<input type= "text" name="search_key">
			</p>
			<p>
			<input type="submit" value="Submit">
			</p>
		</form>
        <form action="rolesearch.php">
			<p>
			Role
			<input type= "text" name="search_key">
			</p>
			<p>
			<input type="submit" value="Submit">
			</p>
		</form>
        <form action="salarysearch.php">
			<p>
			Salary
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
		$sql = "SELECT * FROM employee";
		$result = $conn->query($sql);
		
		echo "<table border=1>
		<tr>
		<th> Employee ID </th>
		<th> First Name </th>
        <th> Last Name </th>
        <th> Role </th>
        <th> Salary </th>
		</tr>";

		if ($result->num_rows > 0) {
			while($row = $result->fetch_array()) {
			echo "<tr>";
			echo "<td>" . $row['employee_id']. "</td>";
			echo "<td>" . $row['first_name']. "</td>";
            echo "<td>" . $row['last_name']. "</td>";
            echo "<td>" . $row['role']. "</td>";
            echo "<td>" . $row['salary']. "</td>";
			echo "<tr>";
			}
		}
		echo "</table>";

		$conn->close();
		?>
		</fieldset>
	</body>
</html>