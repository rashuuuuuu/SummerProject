<!-- <?php
session_start();

include ('appointmentdatabase.php');
if(isset($_SESSION['patientname'])){
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $patientName = $_POST['patientName'];
    $doctorName = $_POST['doctorName'];
    $appointmentDate = $_POST['appointmentDate'];
    $appointmentTime = $_POST['appointmentTime'];
     // Example: Saving the appointment to a file (replace this with database storage or other method)
  $appointmentInfo = "PatientName: $patientName\nDoctorName: $doctorName\nAppointmentDate: $appointmentDate\n AppointmentTime: $appointmentTime\n";
  file_put_contents("appointments.txt", $appointmentInfo, FILE_APPEND | LOCK_EX);

    if (addAppointment($patientName, $doctorName, $appointmentDate,$appointmentTime)) {
        echo "Appointment scheduled successfully.";
    } else {
        echo "Error scheduling appointment.";
    }
}}else{
    header('location:NewPatientRegistration.php');
}
?> -->