<?php
include ("db.php");
require_once "vendor/autoload.php";

use Omnipay\Omnipay;

define("CLIENT_ID","PAYPAL_CLIENT_ID");
define("CLIENT_SECRET","PAYPAL_CLIENT_SECRET_HERE");

define("PAYPAL_RETURN_URL","https://api.sandbox.paypal.com");
define("PAYPAL_CANCEL_URL","https://api.sandbox.paypal.com");
define("PAYPAL_CURRENCY","MYR");

$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true);


?>