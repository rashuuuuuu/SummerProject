<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="hospital.php">
        <link rel="icon" type="image/x-icon" href="logo.jpg" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />;
        <link rel="stylesheet"  href="hospital.php">
        <style>
            .package{
                background-image:url("checkup.jpeg");
             
            }
            .appoint{
                background-image:url("abroad.jpg");
             
                
            }
            .con{
                
    width: 200px; /* Adjust as needed */
    height: 200px; /* Adjust as needed */
    border: 1px solid #ccc; /* Optional: Add a border for visual clarity */
    overflow: hidden; /* Ensure the image does not overflow the div */
    /* display:grid;
    grid-template-columns:repeat(auto-fit,minmax(270px,1fr));

   margin-top:80px; */
            }

.container img {
    max-width: 100%; /* Ensure the image does not exceed the width of the div */
    max-height: 100%; /* Ensure the image does not exceed the height of the div */
    display: block; /* Remove any default spacing around the image */
    margin: auto; /* Center the image horizontally within the div */
}
    
            </style>
    </head>
    <body>
       
    <?php include_once('header.html');?>
    <h1>Appointment/Package</h1>
           <div id="con">
        
       <div class="appoint"><button><a href=appointment.php>OPD APPOINTMENT</a></button>
    </div>
       <!-- <div class="appoint">You can book, View and manage your appointments and other services here<button id="selfcare">Self Patient Service</button></div> -->
       <div class="package">Prevention is better than Cure! <button><a href="bookhealthcheck.php">Book a Health CheckUP</a></button></div>

    </div>    
    <?php include_once('footer.html');?>
           </body></html>

