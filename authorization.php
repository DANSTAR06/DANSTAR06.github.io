<?php

//require 'vendor/autoload.php';

use GuzzleHttp\Client;

function getAccessToken($consumerKey, $consumerSecret) {
    $client = new Client();
    $response = $client->request('GET', 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials',
     [
        'auth' => [$consumerKey, $consumerSecret]
    ]);

    $body = json_decode($response->getBody());
    return $body->access_token;
}

$consumerKey = 'y2aCl7n7auaSgrtc2hgBprZ0ofGm9X13tkUiTFJ2dcQUzaCs';
$consumerSecret = 'Lt41jVDSbvRw97VaakGSiviAGrfmDYh5XwOkCFD4Mnjh5TRBqe6RGkLdvfaxiSPe';

$accessToken = getAccessToken($consumerKey, $consumerSecret);
