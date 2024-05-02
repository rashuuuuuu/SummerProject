<?php
require_once 'vendor/autoload.php';

$stripe_secret_key = 'your_secret_key';
\Stripe\Stripe::setApiKey($stripe_secret_key);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = $_POST['amount'];
    $token = $_POST['stripeToken'];

    try {
        $charge = \Stripe\Charge::create([
            'amount' => $amount * 100, // Amount in cents
            'currency' => 'usd',
            'source' => $token,
            'description' => 'Online Payment',
        ]);

        echo "Payment successful. Charge ID: " . $charge->id;
    } catch (\Stripe\Exception\CardException $e) {
        echo "Card declined: " . $e->getError()->message;
    } catch (\Stripe\Exception\RateLimitException $e) {
        echo "Rate limit exceeded";
    } catch (\Stripe\Exception\InvalidRequestException $e) {
        echo "Invalid parameters";
    } catch (\Stripe\Exception\AuthenticationException $e) {
        echo "Authentication error";
    } catch (\Stripe\Exception\ApiConnectionException $e) {
        echo "Network error";
    } catch (\Stripe\Exception\ApiErrorException $e) {
        echo "Stripe API error";
    }
}