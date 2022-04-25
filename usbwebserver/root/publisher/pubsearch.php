<?php
    include "../connection.php";
    $key = $_GET["search_key"];

    echo "<h3> Publishers with ID containing $key ... </h3> <p> &nbsp; </p>";

    $sql = "SELECT publisher_id, publisher_name FROM publisher WHERE publisher_id LIKE '%" . $key . "%'";
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
?>