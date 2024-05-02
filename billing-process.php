<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Bill</title>
    <link rel="stylesheet" href="bill.css">
</head>
<body>

<div class="container">
    <h1>Generated Bill</h1>
    <div id="billDetails">
        <?php
        $patientName = $_POST['patientName'];
        echo "<p><strong>Patient Name:</strong> $patientName</p>";
        $totalAmount = 0;
        for ($i = 1; isset($_POST["description$i"]) && isset($_POST["amount$i"]); $i++) {
            $description = $_POST["description$i"];
            $amount = floatval($_POST["amount$i"]);
            if ($amount >= 0) {
                
                echo "<p><strong>$description:</strong> $ $amount</p>";
                $totalAmount += $amount;
            }
        }
        echo "<p><strong>Total Amount:</strong> $ $totalAmount</p>";
        ?>
    </div>
</div>

</body>
</html>