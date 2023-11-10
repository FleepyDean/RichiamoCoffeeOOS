<?php
session_start();

if (isset($_POST['add'])) {
    $id = $_POST['id'];
    $price = $_POST['price'];
    $foodName = $_POST['foodName'];

    $item_array = array(
        'id' => $id,
        'foodName' => $foodName,
        'price' => $price,
    );

    if (isset($_SESSION['cart'])) {
        // If the cart already exists, add the item to the existing cart
        $_SESSION['cart'][] = $item_array;
    } else {
        // If the cart doesn't exist, create a new cart and add the item
        $_SESSION['cart'] = array($item_array);
    }
}

?>