<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Payment System</title>
</head>
<body>
    <h1>Online Payment System</h1>

    <form action="paymentprocess.php" method="post">
        <label for="amount">Amount:</label>
        <input type="text" name="amount" required><br>

        <label for="card_number">Card Number:</label>
        <input type="text" name="card_number" required><br>

        <label for="exp_month">Expiration Month:</label>
        <input type="text" name="exp_month" required><br>

        <label for="exp_year">Expiration Year:</label>
        <input type="text" name="exp_year" required><br>

        <label for="cvc">CVC:</label>
        <input type="text" name="cvc" required><br>

        <button type="submit">Pay Now</button>
    </form>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('your_publishable_key');
        const elements = stripe.elements();

        const card = elements.create('card');
        card.mount('#card-element');

        const form = document.querySelector('form');

        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            const { token, error } = await stripe.createToken(card);

            if (error) {
                console.error(error);
            } else {
                // Insert the token ID into the form so it gets submitted to the server
                const hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);

                // Submit the form
                form.submit();
            }
        });
    </script>
</body>
</html>