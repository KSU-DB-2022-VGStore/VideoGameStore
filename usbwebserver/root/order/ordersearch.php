<?php
include "../connection.php";

$keyword = $_GET['keyword'];
$search_in = $_GET['search_in'];

if(isset($search_in)){
	$sql = "SELECT * FROM orders WHERE $search_in LIKE '%" . $keyword . "%'";
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
}
?>