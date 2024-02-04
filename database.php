<?php
// $conn=mysqli_connect("localhost","root","","login",3306);
//function for bloodgroup selcetion
include("execution.php");

// if(
//   isset($_POST['name'], $_POST['password'])&& !empty($_POST['name'])&&!empty($_POST['password'])){

// function validate($data){
//     $data=trim($data);
//     $data=stripcslashes($data);
//     $data=htmlspecialchars($data);
//     return($data);

// }
// $name=validate($_POST['name']);
// $password=$_POST['password'];
// // $role=$_POST['role'];



// if($_SERVER['REQUEST_METHOD']=="POST"){
//   if(isset($_POST['role'])){
//     $role=$_POST['role'];
    
// switch($role){
//   case "accountant";
//    if($name=="accountant"&&$password=="accountant"){
//     header('location:accountant.php');
//    }
//     break;
//    case "receiptionist";
//    if($name=="receiptionist"&&$password=="receiptionist"){
//     header('location:receiptionist.php');
//    }  break;
//    case "admin";
//    if($name=="admin"&&$password=="admin"){
//     header('location:admin.php');
//    }  break;
//     case "clericalstaff";
//    if($name=="clericalstaff"&&$password=="clericalstaff"){
//     header('location:clericalstaff.php');
//    }  break;
//     case "doctor";
//    if($name=="doctor"&&$password=="doctor"){
//     header('location:doctor.php');
//    }  break;
//     case "housekeeping";
//    if($name=="housekeeping"&&$password=="housekeeping"){
//     header('location:housekeeping.php');}  break;
//     case "janitorialstaff";
//    if($name=="janitorialstaff"&&$password=="janitorialstaff"){
//     header('location:janitorialstaff.php');
//    }  break;
//     case "labtechnician";
//    if($name=="labtechnician"&&$password=="labtechnician"){
//     header('location:labtechnician.php');
//    }  break;
//     case "nurse";
//    if($name=="nurse"&&$password=="nurse"){
//     header('location:nurse.php');}  break;
//     case "physician";
//    if($name=="physician"&&$password=="physician"){
//     header('location:physician.php');}  break;
//     case "receiptionist";

//    if($name=="receiptionist"&&$password=="receiptionist"){
//     header('location:receptionist.php');}
   
   

// } 
   
//     }
//   }
//   else{
//     echo("select at least one choice");
//   }

// function selection(){
//   if(in_array("accountant",$aaa)){
//   header('location:accountant.php');}
//   if(in_array("accountant",$aaa)){
//     header('location:accountant.php');}
//     if(in_array("admin",$aaa)){
//       header('location:admin.php');}
//       if(in_array("clericalstaff",$aaa)){
//         header('location:clericalstaff.php');}
//         if(in_array("doctor",$aaa)){
//           header('location:doctor.php');}
//           if(in_array("housekeeping",$aaa)){
//             header('location:housekeeping.php');}
//             if(in_array("janitorialstaff",$aaa)){
//               header('location:janitorialstaff.php');}
//               if(in_array("labtechnician",$aaa)){
//                 header('location:labtechnician.php');}
//                 if(in_array("nurse",$aaa)){
//                   header('location:nurse.php');}
//                   if(in_array("physician",$aaa)){
//                     header('location:physician.php');}
//                     if(in_array("receiptionist",$aaa)){
//                       header('location:receiptionist.php');}
// }

// }


//newpatientregistration

$conn=mysqli_connect("localhost","root","","hello",3306);
// $co="CREATE TABLE registration(
//     uid VARCHAR(10) PRIMARY KEY,
//     fname  VARCHAR(10),
//     mname  VARCHAR(10 ),
//     lname  VARCHAR(10 ),
//     birthdate  VARCHAR(10),
//     age INT ,
//     address  VARCHAR(20),
//     city  VARCHAR(20),
//     phone1  VARCHAR(10),
//     phone2  VARCHAR(10),
//     gender  VARCHAR(10),
//     bloodgroup  VARCHAR(10),
//     email VARCHAR(30)
//     )";

// if ($conn->query($co) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " ;
// }


if($_SERVER['REQUEST_METHOD']=="POST"){
  if(isset($_POST['fname'],$_POST['mname'],$_POST['lname'],
  $_POST['uid'],$_POST['bdate'],$_POST['age'],$_POST['address'],
  $_POST['city'],$_POST['phone1'],$_POST['phone2'])){
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$uid=$_POST['uid'];
$rdate=$_POST['rdate'];
$bdate=$_POST['bdate'];
$age=$_POST['age'];
$address=$_POST['address'];
$city=$_POST['city'];
$phone1=$_POST['phone1'];
$phone2=$_POST['phone2'];
 $gender=$_POST['gender'];
 $bloodgroup=$_POST['bloodgroup'];
 $email=$_POST['email'];

  
  $aaaa="INSERT INTO registration VALUES ('$uid','$fname','$mname','$lname',
  ,'$bdate','$age','$address',
  '$city','$phone1','$phone2','$gender','$bloodgroup','$email')";
  $inn=mysqli_query($conn,$aaaa);
 if($inn) {
 $sql="SELECT * FROM registration ";
 $query=mysqli_query($conn,$sql);
 if(mysqli_num_rows($query)<=0){
  echo "no data found"; 
 }else{
 
 ?>
<body>
  <table border="1">
    <tr>
      <th>ID</th>
     
      <th >firstName</th>
      <th> middleName</th>
      <th>lastname </th>
      <th> Birth Date</th>
      <th> age</th>
      <th>address </th>
      <th>city </th>
      <th>phone1 </th>
      <th>phone2 </th>
      <th> gender</th>
      <th> bloodgroup</th>
      <th>email </th>
 </tr><?php 

 while($row=(mysqli_fetch_assoc($query))){
  ?>
<tr>
<td> <?php echo $row['uid'];?></td>

<td> <?php echo $row['fname'];?></td>
<td> <?php echo $row['lname'];?></td>
<td> <?php echo $row['bdate'];?></td>
<td> <?php echo $row['age'];?></td>
<td> <?php echo $row['address'];?></td>
<td> <?php echo $row['city'];?></td>
<td> <?php echo $row['phone1'];?></td>
<td> <?php echo $row['phone2'];?></td>
<td> <?php echo $row['gender'];?></td>
<td> <?php echo $row['bloodgroup'];?></td>
<td> <?php echo $row['email'];?></td>
 </tr>
 <?php 
 }
} 
  }
else{
  echo"error inserting data";
}
}
}
 ?>
