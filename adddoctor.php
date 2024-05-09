
<html>
    <head>

</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    DOCTOR ID<input type="int" name="id">
    DOCTOR NAME<input type="text" name="doctorname" required>
    SPECIALIZATION<input type="text" name="specilization" required>
    CONTACT<input type="text" name="contact" required>
    <input type="submit" value="ADD" onclick="addDoctor()";>
</form>
<button>
<a href="getdoctor.php">View Doctor</a>

</button>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
$id=$_POST['id'];
$name=$_POST['doctorname'];
$specilization=$_POST['specilization'];
$contactNumber=$_POST['contact'];

 include_once('connectdatabase.php'); 

// Function to add doctor information
// function addDoctor($id,$name, $specialization, $contactNumber) {
    global $conn;
    $sql = "INSERT INTO doctors (did,name, specilization, contactnumber) 
            VALUES ($id,'$name', '$specilization', '$contactNumber')";
    $success= $conn->query($sql);
    if($success){
        echo "successful";
    }
    else{
        echo"failure";
    }
// }
}
?>
</body>
</html>