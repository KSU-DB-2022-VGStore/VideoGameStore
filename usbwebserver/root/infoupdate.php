<?php
    include "connection.php";

    ini_set('display_errors', 1);

    $search_in = $_GET["search_in"];
    // Adding new values to Database

    $pkey = $_GET["pkey"];
    $updatekey = $_GET["updatekey"];
    $newvalue = $_GET["newvalue"];
    $id = $search_in . "_id";

    echo "<h3> Updating Table: '' $search_in  '' by $id </h3>";

    $sqli = "UPDATE $search_in SET $updatekey= '$newvalue' WHERE $id = $pkey";
    
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
