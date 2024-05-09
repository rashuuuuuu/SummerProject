<html>
    <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <script src='https://npm.fontawesome.com' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
        <link rel="icon" type="image/x-icon" href="logo.jpg" >
        <style>
            body{ padding-top:100px;
    background-color:aliceblue;
}
.container {
    height:300px;
    width:300px;
    display:flex;
    align-items: center;
    justify-content: space-evenly;
    flex-direction:row;
 
    background-color: white;
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0px 2px 8px rgba(0,0,0,25%);
}
button {

margin-top: 10px;
    background-color: blue;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

  </style>

</head>
    <body>
    
      <?php include('header.html'); ?>
      <div class="container">
    <h1>Login</h1>
           <form method="POST" action="roledatabase.php" >
          
        <p><label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br></p>

       <p> <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br></p>

      <p>  <label for="role">Role:      </label>
        <select id="role" name="role">
            <option value="admin">Admin</option>
            <option value="receptionist">Receptionist</option>
            <option value="doctor">Doctor</option>
            <option value="finance">Finance</option>
        </select><br></p>

       <p> <button><input type="submit" value="Login"></button></p>
    </form>
</div>

        <?php include('footer.html'); ?>
</body>
</html>