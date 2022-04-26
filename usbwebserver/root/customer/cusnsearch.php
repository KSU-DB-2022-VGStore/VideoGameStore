<?php
    include "../connection.php";
    $key = $_GET["search_key"];

    echo "<h3> Customers with Name containing $key ... </h3> <p> &nbsp; </p>";

    $sql = "SELECT * FROM customer WHERE first_name LIKE '%" . $key . "%' OR last_name LIKE '%" . $key . "%'";
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
?>