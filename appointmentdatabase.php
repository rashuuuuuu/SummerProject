
<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'hospital';

// Connect to the database
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to add an appointment
function addAppointment($patientName, $doctorName, $appointmentDate) {
    global $conn;
    $sql = "INSERT INTO appointment (patient_name, doctor_name, appointment_date) 
            VALUES ('$patientName', '$doctorName', '$appointmentDate')";
    return $conn->query($sql);
}

// Function to get all appointments
function getAppointments() {
    global $conn;
    $sql = "SELECT * FROM appointment";
    $result = $conn->query($sql);
    return ($result->num_rows > 0) ? $result->fetch_all(MYSQLI_ASSOC) : [];
}

// Close the database connection

