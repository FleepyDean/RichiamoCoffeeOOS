<?php
include ("db.php");
require_once "vendor/autoload.php";

use Omnipay\Omnipay;

define("CLIENT_ID","ARczKHigxFACXVIpJfCfsmpMpt4VpwxDGBB72FwcBtc8nApo5lRnH0F86DPF3f_barfbtJ2jUDSI3VHi");
define("CLIENT_SECRET","EFA7hS6sA_6mSXkxBC38xEvj7hiatooaFh9hwN6wu-FZBsAtSUuX7KXmRFSWccAE6wFiRnjaEQg4smcF");

define("PAYPAL_RETURN_URL","../paypal/sucess.php");
define("PAYPAL_CANCEL_URL","../paypal/cancel.php");
define("PAYPAL_CURRENCY","MYR");

$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true);


?>