<body>
    <table border="1">
        <tr><th>DOCTOR ID</th>
        <th>DOCTOR NAME</th>
        <th>SPECILIZATION</th>
        <th>CONTACT</th>
</tr>
<?php  

include('connectdatabase.php'); 

// Function to get all doctors

    global $conn;
    $sql = "SELECT * FROM doctors";
    $result = $conn->query($sql);
   if ($result->num_rows < 0) {
    echo "no data found";
   }
   else{
    while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['did'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['specilization'];?></td>
            <td><?php echo $row['contactnumber'];?></td>
    </tr>
    <?php
    }
   }


?></table></body>

