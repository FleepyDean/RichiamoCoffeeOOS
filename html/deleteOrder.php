<?php
  //session
  include('session.php');
  
  //dapatkan idbilik
  $orderId = $_GET['orderId'];
  
  //delete data bilik dalam jadual
  $mysql = "DELETE FROM orders
          WHERE orderId = '$orderId'";
		
  if(mysqli_query($con, $mysql))
  {
     //papar js popup mesej jika maklumat bilik berjaya delete
     echo '<script>alert("Order Deleted!");
             window.location.href="orderDetails.php";</script>';
  }
  else
  {
     echo "Error ; " . mysqli_error($con);
  }
  ?>