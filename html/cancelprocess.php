<?php
include("db.php");

$orderId = $_GET['orderId'];

$mysql = "INSERT INTO cancelledorders (totalPrice, createdOn, orderId, phoneNum)
SELECT totalPrice, createdOn, orderId, phoneNum
FROM orders
WHERE orderId = '$orderId'";

if (mysqli_query($con, $mysql)) {
    $mysql2 = "UPDATE orders SET stat = 'Cancelled' WHERE orderId = '$orderId'";
    if (mysqli_query($con, $mysql2)) {
        echo '<script>alert("Order Cancelled!"); window.location.href="orderDetails.php";</script>';
    } else {
        echo "Error updating status: " . mysqli_error($con);
    }
} else {
    echo "Error: " . mysqli_error($con);
}

// Close connection
mysqli_close($con);
?>
