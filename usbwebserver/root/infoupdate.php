<?php
    include "connection.php";

    ini_set('display_errors', 1);

    $search_in = $_GET["search_in"];
    // Adding new values to Database

    echo "<h3> Updating Table: '' $search_in  '' </h3>";

    $sql = "SELECT * FROM $search_in";
		$result = $conn->query($sql);

        echo "<table border = 1>";
        if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach($row as $row) {
			        echo "<td> $row  \n </td>";
                }
                echo "<tr>";
			}
		}
		echo "</table>";

    
?>
