<html>
    <head>
    <link rel="stylesheet" href="hospital.php">
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


