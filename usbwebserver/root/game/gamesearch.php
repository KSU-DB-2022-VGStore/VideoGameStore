<?php
    include "../connection.php";

    $keyword = $_GET['keyword'];
    $search_in = $_GET['search_in'];
    
    if(isset($search_in)){
        $sql = "SELECT * FROM game WHERE $search_in LIKE '%" . $keyword . "%'";
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
    }
?>