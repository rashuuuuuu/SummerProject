
<?php
$aaa=array();
if($_SERVER['REQUEST_METHOD']=="POST"){
  if(isset($_POST['role'])){
    $aaa=$_POST['role'];
    foreach($aaa as $value){
     selection();
    }
  }
  else{
    echo("select at least one choice");
  }

function selection(){
  if(in_array("accountant",$aaa)){
  header('location:accountant.php');}
  if(in_array("accountant",$aaa)){
    header('location:accountant.php');}
    if(in_array("admin",$aaa)){
      header('location:admin.php');}
      if(in_array("clericalstaff",$aaa)){
        header('location:clericalstaff.php');}
        if(in_array("doctor",$aaa)){
          header('location:doctor.php');}
          if(in_array("housekeeping",$aaa)){
            header('location:housekeeping.php');}
            if(in_array("janitorialstaff",$aaa)){
              header('location:janitorialstaff.php');}
              if(in_array("labtechnician",$aaa)){
                header('location:labtechnician.php');}
                if(in_array("nurse",$aaa)){
                  header('location:nurse.php');}
                  if(in_array("physician",$aaa)){
                    header('location:physician.php');}
                    if(in_array("receiptionist",$aaa)){
                      header('location:receiptionist.php');}
}

}

