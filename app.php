<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointment Calendar</title>
  <style>
    .container {
  width: 50%;
  margin: 0 auto;
}

h2 {
  text-align: center;
}

.calendar {
  border-collapse: collapse;
  width: 100%;
}

.calendar caption {
  font-size: 1.5em;
  margin-bottom: 10px;
}

.calendar th,
.calendar td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

.calendar th {
  background-color: #f2f2f2;
}

.calendar a {
  text-decoration: none;
  color: #333;
}

.calendar a:hover {
  background-color: #f0f0f0;
}
    </style>

</head>
<body>
  <div class="container">
    <h2>Appointment Calendar</h2>
    <div class="calendar">
      <?php 
     
      // Get current month and year
      $month = isset($_GET['month']) ? $_GET['month'] : date('n');
      $year = isset($_GET['year']) ? $_GET['year'] : date('Y');
      
      // Get the first day of the month
      $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);
      
      // Get the number of days in the month
      $numDays = date('t', $firstDayOfMonth);
      
      // Get the name of the month
      $monthName = date('F', $firstDayOfMonth);
      
      // Get the day of the week the first day of the month falls on
      $firstDayOfWeek = date('N', $firstDayOfMonth);
      
      // Create a table to display the calendar
      echo "<table>";
      echo "<caption>$monthName $year</caption>";
      echo "<tr><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th></tr>";
      
      // Start the first row
      echo "<tr>";
      
      // Fill in the days of the previous month
      for ($i = 1; $i < $firstDayOfWeek; $i++) {
          echo "<td></td>";
      }
      
      // Fill in the days of the current month
      for ($day = 1; $day <= $numDays; $day++) {
          $timestamp = mktime(0, 0, 0, $month, $day, $year);
          $date = date('Y-m-d', $timestamp);
          echo "<td><a href='book_appointment.php?date=$date'>$day</a></td>";
          if (date('N', $timestamp) == 7) {
              echo "</tr><tr>";
          }
      }
      
      // Fill in the remaining cells in the last row
      while (date('N', $timestamp) != 7) {
          echo "<td></td>";
          $timestamp = strtotime('+1 day', $timestamp);
      }
      
      echo "</tr>";
      echo "</table>";
      ?>
      ?>
    </div>
  </div>
</body>
</html>