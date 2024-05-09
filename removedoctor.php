
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    DOCTOR ID<input type="int" name="id">
    DOCTOR NAME<input type="text" name="doctorname" required>
    
    <input type="submit" value="Remove" >
</form>
<button>
<a href="getdoctor.php">View Doctor</a>

</button>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
$id=$_POST['id'];
$name=$_POST['doctorname'];

include_once('connectdatabase.php');
global $conn;
$sql="DELETE FROM doctors WHERE did=$id && name='$name' ";
$query=mysqli_query($conn,$sql);
if($query){
    echo"Data deleted";

}
else{
    echo mysqli_error($conn);
}
}
?>