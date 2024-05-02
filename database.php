<?php


//newpatientregistration

$conn=mysqli_connect("localhost","root","","hospital",3306);



if($_SERVER['REQUEST_METHOD']=="POST"){

  
  $aaaa="INSERT INTO patient
  SET
  pid='".$_POST['pid']."',
  registrationdate='".date('y-m-d')."',
  	fname='".$_POST['fname']."',
    mname='".$_POST['mname']."',
    lname='".$_POST['lname']."',
     birthdate='".$_POST['bdate']."',
   	address='".$_POST['address']."',
     city='".$_POST['city']."',
     phone1='".$_POST['phone1']."',
     phone2='".$_POST['phone2']."',
   	gender='".$_POST['gender']."',
     email='".$_POST['email']."',	
             bloodgroup='".$_POST['bloodgroup']."'
					
					  ";
$success=mysqli_query($conn,$aaaa);
if($success){
// 	$headers=array(
// 		'pid',
// 		'registrationdate',
// 		'fname',
// 		'mname',
// 		'lname',
// 		'birthdate',
// 		'address',
// 		'city',
// 		'phone1',
// 		'phone2',
// 		'gender',
// 		'email',
// 		'bloodgroup');
// $data=array();
?>
<table border="1">
	<tr>
		<th>Patient Id</th>
	<th>Registrationdate</th>
 		<th>Fname</th>
 		<th>Mname</th>
 		<th>Lname</th>
	<th>Birthdate</th>
	<th>Address</th>
	<th>City</th>
		<th>Phone1</th>
 		<th>Phone2</th>
 		<th>Gender</th>
	<th>Email</th>
		<th>Bloodgroup</th></tr>
		<?php
	$bb="SELECT *FROM patient";
	$cc=mysqli_query($conn,$bb);
	if($cc){
	if(mysqli_num_rows($cc)>=0){
		while($row=mysqli_fetch_assoc($cc)){
			?>
			<tr><td><?php echo $row['pid'];?></td>
			<td><?php echo $row['registrationdate'];?></td>
			<td><?php echo $row['fname'];?></td>
			<td><?php echo $row['mname'];?></td>
			<td><?php echo $row['lname'];?></td>
			<td><?php echo $row['birthdate'];?></td>
			<td><?php echo $row['address'];?></td>
			<td><?php echo $row['city'];?></td>
			<td><?php echo $row['phone1'];?></td>
			<td><?php echo $row['phone2'];?></td>
			<td><?php echo $row['gender'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['bloodgroup'];?></td>
		</tr><?php
		}
		
	
	// $fh=fopen('patient.','w');
	// fputcsv($fh,$headers);
	
	// 	fputcsv($fh,$data);
	


	}
	
		

?>
</table>
<?php
}}}
?>