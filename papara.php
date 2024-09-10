<?php
require 'vendor/autoload.php';

use Papara\PaparaClient;

$client = new PaparaClient('papara api key');

$paymentData = [
    'amount' => 459.99,
    'currency' => 'TRY',
    'description' => 'Test ödeme',
    'redirect_url' => 'https://cartelfx.live/return', // ödeme yaptıktan sonra yönlendireceği url
    'callback_url' => 'https://cartelfx.live/callback', // ödeme sonucu Papara tarafından yönlendireceği url
    'order_id' => 'siparis987163', // Ödeme bazlı sipariş numarası
    'metadata' => [
        'ornek data 1' => 'ornek data',
        'ornek data 2' => 'ornek data'
    ]
];

try {
    $response = $client->createPayment($paymentData);
    print_r($response);
} catch (Exception $e) {
    echo 'api istegi basarisiz oldu ' . $e->getMessage();
}
?>
