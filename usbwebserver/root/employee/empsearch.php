<?php
include "../connection.php";


$keyword = $_GET['keyword'];
$search_in = $_GET['search_in'];

if(isset($search_in)){
    $sql = "SELECT * FROM publisher WHERE $search_in LIKE '%" . $keyword . "%'";
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
}
?>
