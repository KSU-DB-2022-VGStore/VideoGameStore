<?php
    include "../connection.php";

    ini_set('display_errors', 1);

    $game_id = $_GET["game_id"];
    $game_name = $_GET["game_name"];
    $console = $_GET["console"];
    $genre = $_GET["genre"];
    $price = $_GET["price"];
    $pub_id = $_GET["pub_id"];
    $esrb = $_GET["esrb"];
    $stock = $_GET["stock"];
    // Adding new values to Database

    echo "<h3> Inserting new Game: </h3> <p> ID: $game_id , Name: $game_name </p>";
    echo "<p> Console: $console , Genre: $genre, Price: $price, Publisher: $pub_id, ESRB: $esrb </p>";
    echo "<p> Stock: $stock </p>";

    $sql = "INSERT INTO game (game_id, name, console, genre, price, publisher_id, esrb, stock) VALUES ('$game_id', '$game_name', '$console', '$genre', '$price', '$pub_id', '$esrb', '$stock')";
    $result = $conn->query($sql);
?>
