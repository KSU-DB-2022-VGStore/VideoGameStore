<?php
    include "connection.php";

    ini_set('display_errors', 1);

    $pub_id = $_GET["pub_id"];
    $pub_name = $_GET["pub_name"];
    // Adding new values to Database

    echo "<h3> Inserting new Publisher: </h3> <p> ID: $pub_id , Name: $pub_name </p>";

    $sql = "INSERT INTO publisher (publisher_id, publisher_name) VALUES ('$pub_id', '$pub_name')";
    $result = $conn->query($sql);
?>

