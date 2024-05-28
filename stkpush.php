<?php
//require /include access token
include 'authorization.php';
function lipaNaMpesaOnline($accessToken, $shortCode, $lipaNaMpesaOnlinePasskey, $amount, $phoneNumber, $callbackUrl, $accountReference, $transactionDesc) {
    $client = new Client();
    $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
    
    $timestamp = date('YmdHis');
    $password = base64_encode($shortCode . $lipaNaMpesaOnlinePasskey . $timestamp);

    $response = $client->request('POST', $url, [
        'headers' => [
            'Authorization' => 'Bearer ' . $accessToken,
            'Content-Type' => 'application/json'
        ],
        'json' => [
            'BusinessShortCode' => $shortCode,
            'Password' => $password,
            'Timestamp' => $timestamp,
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => $amount,
            'PartyA' => $phoneNumber,
            'PartyB' => $shortCode,
            'PhoneNumber' => $phoneNumber,
            'CallBackURL' => $callbackUrl,
            'AccountReference' => $accountReference,
            'TransactionDesc' => $transactionDesc
        ]
    ]);

    return json_decode($response->getBody());
}

$shortCode = 'YOUR_SHORT_CODE';
$lipaNaMpesaOnlinePasskey = 'YOUR_LIPA_NA_MPESA_ONLINE_PASSKEY';
$amount = '1'; // Example amount
$phoneNumber = '2547XXXXXXXX'; // User's phone number
$callbackUrl = 'http://danstar.lovestoblog.com/';
$accountReference = 'Reference';
$transactionDesc = 'Description';

$response = lipaNaMpesaOnline($accessToken, $shortCode, $lipaNaMpesaOnlinePasskey, $amount, $phoneNumber, $callbackUrl, $accountReference, $transactionDesc);

echo json_encode($response);
