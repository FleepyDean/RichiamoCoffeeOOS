<?php
session_start();
include('db.php');

$phoneNum = $_SESSION['phoneNum'];
$total = $_GET['total'];

$mysql = mysqli_query($con, "SELECT * FROM customer WHERE phoneNum = '$phoneNum'");
$row = mysqli_fetch_array($mysql);

$fName = $row['fName'];
$phoneNum = $row['phoneNum'];

if (isset($_POST['cash'])) {
    $paymentMode = 'cash';
    $PaymentId = '00000';
    $sql= "INSERT INTO orders( totalPrice, paymentMode, PaymentId, stat, createdOn, phoneNum) VALUES ('$total', '$paymentMode', '$PaymentId', 1, NOW(), '$phoneNum')";
}
//if (isset($_POST['cash'])) {
    //$paymentId = '00000'; // Replace with the actual payment ID or generate it as needed
    //$orderStat = 1;

    // Prepare the SQL statement with placeholders
    //$sql = "INSERT INTO orders (totalPrice, paymentMethod, PaymentId, stat, phoneNum) VALUES ('$total', '$paymentMethod1', '$paymentId', '$orderStat', '$phoneNum')";

    // Create a prepared statement
    //$stmt = mysqli_stmt_init($con);
    //if (mysqli_stmt_prepare($stmt, $sql)) {
    //    // Bind parameters and execute the statement
    //    mysqli_stmt_bind_param($stmt, "dssds", $total, $paymentMethod1, $paymentId, $orderStat, $phoneNum);
     //   $result = mysqli_stmt_execute($stmt);
//
        // Check if the query was successful
    //    if ($result) {
    //        echo '<script>alert("Checkout successful"); window.location.href="#";</script>';
    //    } else {
   //         echo '<script>alert("Failed to Checkout"); window.location.href="#";</script>';
   //     }
   // } else {
  //      echo '<script>alert("Failed to Checkout"); window.location.href="#";</script>';
  //  }
//}


?>



