<?php
    include "../connection.php";

    ini_set('display_errors', 1);

    $cus_id = $_GET["cus_id"];
    $firstn = $_GET["firstn"];
    $lastn = $_GET["lastn"];

    // Adding new values to Database
    echo "<h3> Inserting new Customer: </h3> <p> ID: $cus_id , Name: $firstn , $lastn </p>";

    $sql = "INSERT INTO customer (customer_id, first_name, last_name) VALUES ('$cus_id', '$firstn', '$lastn')";
    $result = $conn->query($sql);
?>

