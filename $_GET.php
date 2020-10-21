<?php

    // Getting data send from POST method
    $sensor = $_GET["sensor"];
    $date = $_GET["date"];
    $predict = $_GET["predict"];

    $servername = "localhost";
    $username = "root";
    $password = "Felicidade";
    $dbname = "estagio";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into specified table
    $sql = "INSERT INTO sensores (sensor, date_time, predict) VALUES ($sensor, $date, $predict)";

    // Checks for errors
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }


    // Disconnect from DB
    $conn->close();

?>