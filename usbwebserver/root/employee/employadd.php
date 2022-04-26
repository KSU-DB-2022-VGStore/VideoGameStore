<?php
    include "../connection.php";

    ini_set('display_errors', 1);

    $emp_id = $_GET["emp_id"];
    $firstn = $_GET["firstn"];
    $lastn = $_GET["lastn"];
    $role = $_GET["role"];
    $salary = $_GET["salary"];
    // Adding new values to Database

    echo "<h3> Inserting new Employee: </h3> <p> ID: $emp_id , Name: $firstn, $lastn, Role: $role , Salary: $salary </p>";

    $sql = "INSERT INTO employee (employee_id, first_name, last_name, role, salary) VALUES ('$emp_id', '$firstn', '$lastn', '$role', '$salary')";
    $result = $conn->query($sql);
?>
