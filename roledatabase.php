<?php

$users = [
    "patient" => ["password" => "patient"],
    "receptionist" => ["password" => "receptionist"],
    "doctor" => ["password" => "doctor"],
    "finance" => ["password" => "finance"]
];

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

// Validate username and password
if (isset($users[$role]) && $password === $users[$role]["password"]) {
    // Redirect based on role
    switch ($role) {
        case "patient":
            header("Location: patient.php");
            break;
        case "receptionist":
            header("Location: receptionist.php");
            break;
        case "doctor":
            header("Location: viewdoctor.php");
            break;
        case "finance":
            header("Location: billing.php");
            break;
        default:
            // Invalid role
            echo "Invalid role.";
            break;
    }
} else {
    // Invalid credentials
    echo "Invalid username or password.";
}
?>