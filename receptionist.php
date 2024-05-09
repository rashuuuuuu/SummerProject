<html>
    <head>
    <link rel="stylesheet" href="hospital.php">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
       
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
     
    <link rel="stylesheet" href="style.css">

    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />;
        <link rel="icon" type="image/x-icon" href="logo.jpg" >
   
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    
</head>
<body>
<?php include('header.html');?>
<h1 > Receiptionist page</h1>
<div class="coo">

    <div class="diva"><a href="NewpatientRegistration.php">Patient Registration</a></div>
    <div class="divb"><a href="viewdoctor.php">View Doctor</a></div>
    <div class="divc"><a href="nurse.php">View Nurse</a></div>
    <div class="divd"><form method="POST" action="searchpatient.php">Search Patient<input type="search" name="search"><input type="submit" value="submit"></form></div>
</div>
<?php include('footer.html');?>
</body>
</html>


