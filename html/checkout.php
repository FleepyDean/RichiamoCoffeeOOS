<?php
$total = $_GET['total'];

require __DIR__ . '/../vendor/autoload.php';

$stripe_secret_key = 'sk_test_51O7JlyAbDilK82sARO8MUKO8o0qsK0VhVHOtmQpi2LjUuRaRM3WDKRBElt9DsWrhceHCFtqDfCCR6TTTFAMIbArk001XR3WMv0';

\Stripe\Stripe::setApiKey($stripe_secret_key);
// Convert the total amount to cents
$amount_in_cents = (int) ($total * 100);

$checkout_session = \Stripe\Checkout\Session::create([
    'mode' => 'payment',
    'success_url' => 'https://richiamocoffee.online/html/receipt.php',
    'cancel_url' => 'https://richiamocoffee.online/html/CustomerViewMenu.php',
    'line_items' => [
        [
            'quantity' => 1,
            'price_data' => [
                'currency' => 'myr',
                'unit_amount' => $amount_in_cents, // Amount in cents
                'product_data' => [
                    'name' => "Your Order Total"
                ]
            ]
        ]
    ]
]);
http_response_code(303);
header("Location: " . $checkout_session->url);
?>
