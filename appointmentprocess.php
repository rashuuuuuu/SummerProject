<!-- <?php
include ('appointmentdatabase.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $patientName = $_POST['patientName'];
    $doctorName = $_POST['doctorName'];
    $appointmentDate = $_POST['appointmentDate'];
     // Example: Saving the appointment to a file (replace this with database storage or other method)
  $appointmentInfo = "PatientName: $patientName\nDoctorName: $doctorName\nAppointmentDate: $appointmentDate\n";
  file_put_contents("appointments.txt", $appointmentInfo, FILE_APPEND | LOCK_EX);

    if (addAppointment($patientName, $doctorName, $appointmentDate)) {
        echo "Appointment scheduled successfully.";
    } else {
        echo "Error scheduling appointment.";
    }
}
?> -->