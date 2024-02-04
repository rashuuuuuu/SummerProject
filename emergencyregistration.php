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
        <header>
            <div class="cointainer">
           <input type="submit" value="save" id="save" onclick="window.location.href('database.php')">
            <input type="submit" value="edit">
            <input type="submit" value="update">
            <input type="submit" value="clear" onclick="window.alert('are you sure to reset?');">
         </div> 
        </header>
        <h1>patient details</h1>
        <form method="POST" action="database.php"><div class="coo">
      <div> Unique id<input type="text" id="uid"> reg Date<input type="date" value="rdate" id="rdate"></div>
           <div><input type="text"  id="fname" placeholder="PATIENT FIRST NAME">
            <input type="text"  id="mname" placeholder="PATIENT MIDDLE NAME">
            <input type="text"  id="lname" placeholder="PATIENT LAST NAME"></div> 
            <input type="submit" value="ok"></div>
</body>
</html>