<?php
session_start();

if (isset($_GET['item_key'])) {
    $item_key = $_GET['item_key'];

    if (isset($_SESSION["cart"][$item_key])) {
        unset($_SESSION["cart"][$item_key]);
    }
}

header("Location: cart.php");
exit();
?>