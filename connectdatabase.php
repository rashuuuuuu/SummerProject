<?php

// Connect to the database
$conn = new mysqli('localhost','root','','hospital');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>