<?php

// Connect to the database
$conn = new mysqli('localhost','root','','hospital');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to add doctor information
function addDoctor($name, $specialization, $contactNumber) {
    global $conn;
    $sql = "INSERT INTO doctors (name, specilization, contactnumber) 
            VALUES ('rashmita', 'cardiyology', '9898989898')";
    $success= $conn->query($sql);
    if($success){
        echo "successful";
    }
}

// Function to get all doctors
function getDoctors() {
    global $conn;
    $sql = "SELECT * FROM doctors";
    $result = $conn->query($sql);
    return ($result->num_rows > 0) ? $result->fetch_all(MYSQLI_ASSOC) : [];
}

// Close the database connection
$conn->close();
?>