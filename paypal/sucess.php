<?php
require_once "config.php";
if(array_key_exists('paymentId', $_GET)&& array_key_exists('PayerID', $_GET)){
    $transaction = $gateway->completePurchase(array(
        'transactionReference' => $_GET['paymentId'],
        'payerId' => $_GET['PayerID']
    ));

    $response = $transaction->send();

    if ($response->isSuccessful()) {

        $arr_body = $response->getData();

        $paymentId = $arr_body['id'];
        $payerId = $arr_body['payer']['payer_info']['payer_id'];
        $payerEmail = $arr_body['payer']['payer_info']['email'];
        $amount = $arr_body['transactions'][0]['amount']['total'];
        $currency = PAYPAL_CURRENCY;
        $paymentStatus = $arr_body['state'];

        $sql = "INSERT INTO orders (paymentId, payerId, payerEmail, amount, currency, paymentStatus) VALUES('$paymentId', '$payerId', '$payerEmail', '$amount', '$currency', '$paymentStatus')";
        
        echo "Transaction Successful";
    }else{
        echo $response->getMessage();
    }

}else{
    echo "Transaction Failed";
}
?>