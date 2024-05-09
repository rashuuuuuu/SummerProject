

<body>
    <table border="1">
        <tr><th>APPOINTMENT ID</th>
        <th>PATIENT NAME</th>
        <th>DOCTOR NAME</th>
        <th>CONTACT</th>
        <th>Time</th>
</tr>
<?php  

include('connectdatabase.php'); 

// Function to get appointment

    global $conn;
    $sql = "SELECT * FROM appointment";
    $result = $conn->query($sql);
   if ($result->num_rows < 0) {
    echo "no data found";
   }
   else{
    while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['patient_name'];?></td>
            <td><?php echo $row['doctor_name'];?></td>
            <td><?php echo $row['appointment_date'];?></td>
            <td><?php echo $row['appointment_time'];?></td>
    </tr>
    <?php
    }
   }


?></table></body>

