<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <script src='https://npm.fontawesome.com' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />;
       
        <link rel="icon" type="image/x-icon" href="logo.jpg" > 
    <title>Hospital Appointment System</title>
  
</head>
<style>
    
    h1{
        text-align:center;
    }
    .container{
        
  
    display: grid;
            grid-template-columns: repeat(3, 1fr); /* Three equal-width columns */
            grid-gap: 10px;

 
   
    }
 
.a{
    height:400px;
    width:400px;
   
 
  text-align:center;
 
   text-shadow:0px 2px 8px rgba(0,0,0,25%); 
    box-shadow:0px 2px 8px rgba(0,0,0,25%); 
}
button {
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

    .footer{
        display:flex;
    flex-direction: row;
    justify-content: space-evenly;
    }
    </style>
<body>
<!-- <?php require('header.html');?> -->
    <h1>Hospital Appointment System</h1>

    <!-- <form action="appointmentprocess.php" method="post">
        <label for="patientName">Patient Name:</label>
        <input type="text" name="patientName" required><br>

        <label for="doctorName">Doctor Name:</label>
        <input type="text" name="doctorName" required><br>

        <label for="appointmentDate">Appointment Date:</label>
        <input type="datetime-local" name="appointmentDate" required><br>

        <button type="submit">Schedule Appointment</button>
    </form> -->
    <form action="appointmentprocess.php" method="post">
<div class="container">
    <div class="a" id="b"> 
        <img src="pic/a.jpeg" alt="Description of the image">
        <h3>Dr.Pramila shakya</h3>  
        <p>Cardiologist</p>
        <div class="footer">
        <button id="app"><i class="fa-regular fa-calendar"><a href="AppointmentSLot.php"></a></i></button>
   <button id="phone"><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button id="message"><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button id="view"><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div> 
</div>
    <div class="a" id="c"> 
    <img src="pic/b.jpeg" alt="Description of the image">
        <h3>Dr.Alex frag</h3>  
        <p>Therapist</p>
        <div class="footer">
        <button><i class="fa-regular fa-calendar"><a href=""></a></i></button>
   <button><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div> 
         </div>
    <div class="a" id="d"> 
    <img src="pic/c.jpeg" alt="Description of the image">
        <h3>Dr.Sweta calix</h3>  
        <p>
Respiratory and Critical Care Medicine</p>
        <div class="footer">
        <button><i class="fa-regular fa-calendar"><a href=""></a></i></button>
   <button><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div>  </div>
    <div class="a" id="e"> 
    <img src="pic/d.jpeg" alt="Description of the image">
        <h3>Dr.John dev</h3> 
        <p>General Surgery, Colon and Rectal Surgery</p> 
        <div class="footer">
        <button><i class="fa-regular fa-calendar"><a href=""></a></i></button>
   <button><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div>  </div>
    <div class="a" id="f"> 
    <img src="pic/e.jpeg" alt="Description of the image">
        <h3>Dr.Henry lucas</h3>  
        <p>Endocrinology and Diabetes</p>
        <div class="footer">
        <button><i class="fa-regular fa-calendar"><a href=""></a></i></button>
   <button><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div> 
 </div>
    <div class="a" id="g">  
    <img src="pic/g.jpeg" alt="Description of the image">
    <h3>DR.Erica farnandes</h3>
        <p>Obstetrics and Gynaecology</p>  
        <div class="footer">
        <button><i class="fa-regular fa-calendar"><a href=""></a></i></button>
   <button><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div> 
    </div>
    <div class="a" id="h"> 
    <img src="pic/h.jpeg" alt="Description of the image">
    <h3>Dr.Omega Ghising</h3>
        <p>Chiropractic Medicine</p>  
        <div class="footer">
        <button><i class="fa-regular fa-calendar"><a href=""></a></i></button>
   <button><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div>  </div>
    <div class="a" id="i"> 
    <img src="pic/i.jpeg" alt="Description of the image">
    <h3>Dr.sincery Athik</h3>
        <p>Rheumatology and Immunology</p>  
        <div class="footer">
        <button><i class="fa-regular fa-calendar"><a href=""></a></i></button>
   <button><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div>  </div>
    <div class="a" id="j"> 
    <img src="pic/q.jpeg" alt="Description of the image">
    <h3>Dr.Ameha deluso</h3>
        <p>Pathology, Clinical Pathology</p>  
        <div class="footer">
        <button><i class="fa-regular fa-calendar"><a href=""></a></i></button>
   <button><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div>  </div>
    <div class="a" id="k"> 
    <img src="pic/t.jpeg" alt="Description of the image">
    <h3>Dr.William jane</h3>
        <p>General Surgery, Hepatobiliary Surgery</p>  
        <div class="footer">
        <button><i class="fa-regular fa-calendar"><a href=""></a></i></button>
   <button><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div>  </div>
    <div class="a" id="l">  
    <img src="pic/s.jpeg" alt="Description of the image">
    <h3>Dr.Sarika Alex</h3>
        <p>Cataract and Anterior Segment Surgery</p>  
        <div class="footer">
        <button><i class="fa-regular fa-calendar"><a href=""></a></i></button>
   <button><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div> 
    </div>
    <div class="a" id="m"> 
    <img src="pic/o.jpeg" alt="Description of the image">
    <h3>Dr.Levis Jack</h3>
        <p>Critical Care & Sleep Medicine</p>  
        <div class="footer">
        <button><i class="fa-regular fa-calendar"><a href=""></a></i></button>
   <button><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div>  </div>
    <div class="a" id="n">  
    <img src="pic/r.jpeg" alt="Description of the image">
    <h3>Dr.Mira Ghosal</h3>
        <p> Nutrition and Dietetics</p>  
        <div class="footer">
        <button><i class="fa-regular fa-calendar"><a href=""></a></i></button>
   <button><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div> 
    </div>
    <div class="a" id="o"> 
    <img src="pic/u.jpeg" alt="Description of the image">
    <h3>Dr.Esa kafle</h3>
        <p>Obstetrics and Gynaecology</p>  
        <div class="footer">
        <button><i class="fa-regular fa-calendar"><a href=""></a></i></button>
   <button><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div>  </div>
    <div class="a" id="p">  
    <img src="pic/v.jpeg" alt="Description of the image">
    <h3>Dr.Matrin King</h3>
        <p>Spine Trauma and Spinal Cord Injury</p>  
        <div class="footer">
        <button><i class="fa-regular fa-calendar"><a href=""></a></i></button>
   <button><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div> 
    </div>
    <div class="a" id="q"> 
    <img src="pic/k.jpg" alt="Description of the image">
    <h3>Dr.Pranima Lama</h3>
        <p>Paediatric Hemato Oncology</p>  
        <div class="footer">
        <button><i class="fa-regular fa-calendar"><a href=""></a></i></button>
   <button><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div>  </div>
    <div class="a" id="r"> 
    <img src="pic/x.jpeg" alt="Description of the image">
    <h3>Dr.Alisa Niti</h3>
        <p>Clinical Microbiology</p>  
        <div class="footer">
        <button><i class="fa-regular fa-calendar"><a href=""></a></i></button>
   <button><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div>  </div>
    <div class="a" id="s"> 
    <img src="pic/y.jpeg" alt="Description of the image">
    <h3>Dr.Mark Henrye</h3>
    <p>Interventional Radiology , Radiodiagnosis</p> 
        <div class="foot
        <p>Description below the imager">
        <button><i class="fa-regular fa-calendar"><a href=""></a></i></button>
   <button><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div>  </div>
    <div class="a" id="t"> 
    <img src="pic/z.jpeg" alt="Description of the image">
    <h3>Dr.pawina KC</h3>
        <p>Fetal Medicine</p>  
        <div class="footer">
        <button><i class="fa-regular fa-calendar"><a href=""></a></i></button>
   <button><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div>  </div>
    <div class="a" id="u">  
    <img src="pic/m.jpeg" alt="Description of the image">
    <h3>Dr.Govinda Misra</h3>
        <p>Gynaeocologic Oncologist</p>  
        <div class="footer">
        <button><i class="fa-regular fa-calendar"><a href=""></a></i></button>
   <button><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div> 
    </div>
    
    <div class="a" id="u">  
    <img src="pic/n.jpeg" alt="Description of the image">
    <h3>Dr.prelex Atini</h3>
        <p>Internal Medicine, Endoscopic Ultrasound</p>  
        <div class="footer">
        <button><i class="fa-regular fa-calendar"><a href=""></a></i></button>
   <button><i class="fa-solid fa-phone"><a href=""></a></i></button>
   <button><i class="fa-brands fa-facebook-messenger"><a href=""></a></i></button>
   <button><i class="fa-regular fa-eye"><a href=""></a></i></button>
    </div> 
    </div>
    
   
</div>
</form>
<script>
    
    const dayOfWeek = today.getDay();
    app.addEventListener("click",function(){
cont newitems='<div class="cooo">
<div class="date">Date</div>
<div class="slot">9 AM</div>
<div class="slot">10 AM</div>
<div class="slot">11 AM</div>
<div class="slot">1 PM</div>
<div class="slot">2 PM</div>
<div class="slot">3 PM</div>
</div>';
app.insertAdjacentHTML("beforeend", newitems);
    });
    </script>
</body>
</html>