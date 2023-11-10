<?php
  //session
  include('session.php');
  
  //dapatkan idbilik
  $phoneNum = $_GET['phoneNum'];
  
  //delete data bilik dalam jadual
  $mysql = "DELETE FROM customer
          WHERE phoneNum = '$phoneNum'";
		
  if(mysqli_query($con, $mysql))
  {
     //papar js popup mesej jika maklumat bilik berjaya delete
     echo '<script>alert("Customer Deleted!");
             window.location.href="customerList.php";</script>';
  }
  else
  {
     echo "Error ; " . mysqli_error($con);
  }
  ?>