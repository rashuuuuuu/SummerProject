<?php
function displayCalendar($month, $year)
{
    /* draw table */
   
    $calendar = '<table border = 1>';
    $pre_month=date('m',mktime(0,0,0,$month-1,1,$year));
    $pre_year=date('m',mktime(0,0,0,$month,1,$year-1));
    $next_month=date('m',mktime(0,0,0,$month+1,1,$year));
    $next_year=date('m',mktime(0,0,0,$month,1,$year+1));
    $calendar.="<center><h2>$month $year</h2>";
    $calendar.="<a class='btn btn-primary btn-xs' href=?month=".$pre_month."&year=".$pre_year."'>previous month</a>";
    $calendar.="<a class='btn btn-primary btn-xs' href=?month=".date('m')."&year=".date('y')."'>current month</a>";
    $calendar.="<a class='btn btn-primary btn-xs' href=?month=".$next_month."&year=".$next_year."'>next month</a></center>";
    

    /* table headings */
    $headings = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    $calendar .= '<tr><td>' . implode('</td><td>', $headings) . '</td></tr>';

    /* days and weeks ... */
    $running_day = date('w', mktime(0, 0, 0, $month, 1, $year));
    $days_in_month = date('t', mktime(0, 0, 0, $month, 1, $year));
    $days_in_this_week = 1; // checks how many days are in this week and how many days has been printed
    $day_counter = 0;

    /* row for week one */
    $calendar .= '<tr>';

    /* print "blank" days until the first of the current week */
    for ($x = 0; $x < $running_day; $x++) {
        $calendar .= '<td> </td>';
        $days_in_this_week++;
    }

    /* keep going with days.... */
    for ($list_day = 1; $list_day <= $days_in_month; $list_day++) {
        $calendar .= '<td>';

        /* add in the day number */
        $calendar .=  $list_day;

        $calendar .= '</td>';

        if ($running_day == 6) {
            $calendar .= '</tr>';

            //if month is running then tr should be opened
            if (($day_counter + 1) != $days_in_month) {
                $calendar .= '<tr>';
            }
            $running_day = -1; //running day starts from 0 and end at 6
            $days_in_this_week = 0; //afer last day of the week counter has been reset
        }

        $days_in_this_week++;
        $running_day++;
        $day_counter++;
    }

    /* finish the rest of the days in the week */
    if ($days_in_this_week < 8 && $days_in_this_week != 1) {
        for ($x = 1; $x <= (8 - $days_in_this_week); $x++) {
            $calendar .= '<td> </td>';
        }
    }

    /* final row */
    $calendar .= '</tr>';

    /* end the table */
    $calendar .= '</table>';

    /* all done, return result */
    return $calendar;
}

/* sample usages */
$dateComponents=getdate();
if(isset($_GET['month'])&& isset($_GET['year'])){
    $month=$_GET['month'];
    $year=$_GET['year'];
}else{
$month=$dateComponents['mon'];
$year=$dateComponents['year'];}
echo displayCalendar($month,$year);
?>
<html>
    <head>
        <style>
            table{ 
                margin:200px;
                
            }
            </style>
</head>
<body>
</body></html>