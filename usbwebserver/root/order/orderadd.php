<?php
    include "../connection.php";

    ini_set('display_errors', 1);

    $oid = $_GET["oid"];
    $odate = $_GET["odate"];
    $status = $_GET["status"];
    $discount = $_GET["discount"];
    $emp_id = $_GET["emp_id"];
    $cus_id = $_GET["cus_id"];
    $game_id = $_GET["game_id"];
    $amount = $_GET["amount"];
    // Adding new values to Database

    echo "<h3> Inserting new Order: </h3> <p> ID: $oid , Date: $odate , Status: $status , Discount: $discount </p>";
    echo "<p> Employee ID: $emp_id , Customer ID: $cus_id, Game ID: $game_id, Amount: $amount </p>";

    $sql = "INSERT INTO orders (order_id, order_date, status, discount, employee_id, customer_id, game_id, amount) 
    VALUES ('$oid', '$odate', '$status', '$discount', '$emp_id', '$cus_id', '$game_id', '$amount')";
    $result = $conn->query($sql);
?>
