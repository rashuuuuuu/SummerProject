<?php
$conn=mysqli_connect("localhost","root","","hospital",3306);
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['search'];
    $aa="SELECT * FROM patient WHERE fname='$name'";
    $success=mysqli_query($conn,$aa);
    if(mysqli_num_rows($success)>0){
    echo "<table><tr><th>ID</th><th>FirstName</th> <th>LastName</th>
    <th >RegistrationDate</th> <th>BirthDate</th><th>Gender</th><th>Address</th></tr>";
   
  while( $row= mysqli_fetch_assoc($success)){
  
    echo "<tr><td>".$row["pid"]."</td><td>".$row["fname"]."</td><td> ".$row["lname"]."</td><td>".$row["registrationdate"].
    "</td><td>".$row["birthdate"]."</td><td>".$row["gender"]."</td><td>".$row["address"]
."</td>    </tr>";

  }
echo "</table>";
    }
    else{
        echo"no data found";
    }
}
  