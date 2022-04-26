<?php
    include "connection.php";
    //display errors
    ini_set('display_errors', 1);

	$keyword = $_GET['keyword'];
	$tab1 = $_GET['tab1'];
    $tab2 = $_GET['tab2'];
	
    echo "<h3> Join $tab1 and $tab2 results...</h3>";

	if(isset($keyword)){
		$sql = "SELECT * FROM $tab1 INNER JOIN $tab2 ON $tab1.$keyword = $tab2.$keyword";
		$result = $conn->query($sql);

        echo "<table border = 1>";
        if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach($row as $row) {
			        echo "<td> $row . \n </td>";
                }
                echo "<tr>";
			}
		}
		echo "</table>";
	}
?>