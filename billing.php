<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Billing System</title>

 <link rel="stylesheet" href="bill.css">

</head>
<body>

<div class="container">
    <h1>Hospital Billing System</h1>
    
    <form id="billingForm" action="billing-process.php" method="post">
    <label for="patientName">Patient Name:</label>
        <input type="text" id="patientName" name="patientName" required><br>

        <div id="billingItems">
            <!-- Billing items will be dynamically added here -->
        </div>
        <button type="button" id="addItemBtn">Add Item</button>
        <button type="submit">Generate Bill</button>
    </form>
    <div id="totalAmount"></div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const addItemBtn = document.getElementById("addItemBtn");
    const billingItems = document.getElementById("billingItems");
    const totalAmount = document.getElementById("totalAmount");

    let itemCount = 0;

    addItemBtn.addEventListener("click", function () {
        itemCount++;
        const newItem = `
            <div class="billing-item">
                <label for="description${itemCount}">Description:</label>
                <input type="text" id="description${itemCount}" name="description${itemCount}" required>
                <label for="amount${itemCount}">Amount:</label>
                <input type="number" id="amount${itemCount}" name="amount${itemCount}" min="0" step="0.01" required>
            </div>
        `;
        billingItems.insertAdjacentHTML("beforeend", newItem);
    });

    document.getElementById("billingForm").addEventListener("submit", function () {
        let total = 0;
        for (let i = 1; i <= itemCount; i++) {
            const amount = parseFloat(document.getElementById(`amount${i}`).value);
            if (!isNaN(amount)) {
                total += amount;
            }
        }
        totalAmount.textContent = `Total Amount: $${total.toFixed(2)}`;
    });
});
</script>

</body>
</html>