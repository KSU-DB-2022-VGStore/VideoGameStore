<?php
    include "connection.php";

    ini_set('display_errors', 1);

    $search_in = $_GET["search_in"];
    // Adding new values to Database

    $pkey = $_GET["pkey"];
    $id = $search_in . "_id";

    echo "<h3> Removing from Table: '' $search_in  '' by $id </h3>";

    $sqli = "DELETE FROM $search_in WHERE $id = $pkey";
    
    $stmt=$conn->prepare($sqli);
    $stmt->execute();
  
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
