<?php
  //session
  include('session.php');
  
  //dapatkan idbilik
  $id = $_GET['id'];
  
  //delete data bilik dalam jadual
  $mysql = "DELETE FROM feedback
          WHERE id = '$id'";
		
  if(mysqli_query($con, $mysql))
  {
     //papar js popup mesej jika maklumat bilik berjaya delete
     echo '<script>alert("Feedback Deleted!");
             window.location.href="ViewFeedbackStaff.php";</script>';
  }
  else
  {
     echo "Error ; " . mysqli_error($con);
  }
  ?>