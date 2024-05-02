<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <script src='https://npm.fontawesome.com' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />;
                 

        <link rel="icon" type="image/x-icon" href="logo.jpg" >
        <title>Patient Registration Form</title>
        <style>

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color:aliceblue;
      
    }
    
    .container {
        background-color: white;
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0px 2px 8px rgba(0,0,0,25%);
    }
    
    h2 {
        text-align: center;
    }
    
    div {
        margin:20px;
    
    }
    
    label {
        font-weight: bold;
    }
    
    input[type="text"],
    input[type="email"],
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 5px;
    }
    
    input[type="submit"] {
        background-color:blue;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
            
    </head>
    <body>
      
            <div class="container">
            <h1>Patient Registration </h1>
       
        <form method="POST" action="database.php"><div class="coo">
      <div> Unique Id<input type="text" id="pid" name="pid"> Reg Date<input type="date" value="rdate" id="rdate"></div>
           <div><input type="text"  id="fname"  name="fname" placeholder="PATIENT FIRST NAME">
            <input type="text"  id="mname" name="mname" placeholder="PATIENT MIDDLE NAME">
            <input type="text"  id="lname" name="lname" placeholder="PATIENT LAST NAME"></div> 
           <div> Birth Date <input type="date" name="bdate" id="bdate"> 
                Age<input type="number"  id="age" name="age"></div> 
           <div> Address<input type="text"  id="address" name="address"> 
                City<input type="text" id="city" name="city"></div>
            <div> PhoneNo1<input type="number" name="phone1" id="phone1">
                 PhoneNo2<input type="number" name="phone2" id="phone2"></div>
           <div>Gender:<input type="text" name="gender" id="gender"></div>
           <div><input type="email" name="email" placeholder="Email"> 
           BloodGroup:<input type="text" name="bloodgroup">
    <input type="submit" value="ok"></div>
           </div>
           
           </div>
        </form>
    </body>
</html>