<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
 <style>
    .container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="text"],
input[type="email"],
input[type="password"],
button {
    width: 100%;
    margin-bottom: 10px;
    padding: 10px;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Signup</h1>
        <form id="signupForm" action="signup.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Signup</button>
        </form>
    </div>
    <script >
        document.getElementById("signupForm").addEventListener("submit", function(event){
    event.preventDefault();
    var form = event.target;
    var formData = new FormData(form);

    fetch(form.action, {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Handle response from PHP
        // You can redirect the user or show a success message here
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
    </script>
    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Here you can perform validation and database operations
    // For simplicity, I'm just echoing back the data
    echo "Username: " . $username . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password . "<br>";
}
?>
</body>
</html>