<?php
include "../connection.php";


$keyword = $_GET['keyword'];
$search_in = $_GET['search_in'];

if(isset($search_in)){
	$sql = "SELECT * FROM publisher WHERE $search_in LIKE '%" . $keyword . "%'";
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
}
?>