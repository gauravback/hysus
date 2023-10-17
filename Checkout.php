<?php

require_once '../vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$stripeSecretKey = "sk_test_51Ncj2ASBYuAkX7FEihysDOWWpdvjvgllpuxjwj8guywdFIkiust0uYlEJUerCYdf16MaLlal9mF1975TgTWSbnow00dBMexfbB"
\Stripe\Stripe::setApiKey($stripeSecretKey);
header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost:4242';

$checkout_session = \Stripe\Checkout\Session::create([
  success_url = $YOUR_DOMAIN + '/success',
                cancel_url = $YOUR_DOMAIN + '/cancel',
                payment_method_types = ['card'],
                line_items=[
                    {
                        'price_data': {
                            'currency': 'inr',
                            'unit_amount': int(booking.payment_amount * 100),  # Amount in cents
                            'product_data': {
                                'name': f'Booking #{booking.id}',
                            },
                        },
                        'quantity': 1,
                    },
                ],
                mode='payment',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
}

