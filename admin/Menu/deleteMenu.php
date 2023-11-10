<?php
  //session
  include('session.php');
  
  //dapatkan idbilik
  $id = $_GET['id'];
  
  //delete data bilik dalam jadual
  $mysql = "DELETE FROM menu
          WHERE id = '$id'";
		
  if(mysqli_query($con, $mysql))
  {
     //papar js popup mesej jika maklumat bilik berjaya delete
     echo '<script>alert("Bilik berjaya dipadam!");
             window.location.href="MenuList.php";</script>';
  }
  else
  {
     echo "Error ; " . mysqli_error($con);
  }
  ?>