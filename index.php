<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estagio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE sensores (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    sensor INT,
    date_time DATE,
    prediction INT
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  
  $conn->close();

?>