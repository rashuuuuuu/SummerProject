 <form action="appointmentprocess.php" method="post">
        <label for="patientName">Patient Name:</label>
        <input type="text" name="patientName" required><br>

        <label for="doctorName">Doctor Name:</label>
        <input type="text" name="doctorName" required><br>

        <label for="appointmentDate">Appointment Date:</label>
        <input name="appointmentDate" required><br>
        <label for="appointmentTime">Appointment Time:</label>
        <input name="appointmentTime" required><br>

        <button type="submit">Schedule Appointment</button>
    </form>