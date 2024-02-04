<html>
    <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <script src='https://npm.fontawesome.com' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />;
        <link rel="stylesheet" href="hospital.php">
        <link rel="icon" type="image/x-icon" href="logo.jpg" >
</head>
    <body>
    
      <?php include('header.php'); ?>
           <form method="POST" action="database.php" >
        <div class="login">
            <div class="role" ><h5>USER ROLE</h5>
                <select name="role[]" aria-placeholder="select Role">
                <option value="accountant" name="accountant">Accountant</option>
                <option value="admin" name="admin">ADMIN</option>
                <option value="clericalstaff" name="clericalstaff">clerical staff</option>
                <option value="doctor" name="doctor">Doctor</option>
                <option value="housekeeping" name="housekeeping">House Keeping</option>
                <option value="janitorialstaff" name="janitorialstaff">Janitorial staff</option>
                <option value="labtechnician" name="labtechnician">Lab technician</option>
                <option value="nurse" name="nurse">Nurse</option>
                <option value="physician" name="physician">physician</option>
                <option value="receiptionist" name="receiptionist">Receiptionist</option>
                
            </select></div>
            <div class="name" ><input type="text" placeholder="USER NAME" id="name" name="name" ></div>
            <div class="pass" ><input type="password" placeholder="PASSWORD" id="password" name="password"></div>
            <!-- <div class="rememberme" ><input type="checkbox" name="rememberme" name="rememberme">REMEMBER ME</div> -->
            <div class="submit" ><input type="button" value="submit" name="submit" ></div>
           
            <!-- <div class="forgotpass"><a href="forgotpassword.html" name="forgotpass">Forgot PASSWORD</a></div> -->
</div>


        <?php include('footer.php'); ?>
</body>
</html>