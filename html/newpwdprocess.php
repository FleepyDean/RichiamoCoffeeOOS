<?php

//Sambungan ke DB
include('db.php');
session_start();
//dapatkan id tempahan


###### jika user kLik button KEMASKINI,########
###### update record dalam jaduaL      ########

if(isset($_POST['edit']))
{

    $pwd = md5($_POST['pwd']);
    $newPwd = md5($_POST['newPwd']);
    $phoneNum = $_POST['phoneNum'];
    //semak tarikh yang dimasukkan
    //jika tarikhmasuk Lebih besar
    if ($pwd == $newPwd) {

     $sql= "UPDATE customer
     SET pwd ='$pwd'
     WHERE phoneNum= '$phoneNum'";
     
       if (mysqli_query($con, $sql)) {
     echo'<script>alert("Password Updated! Please Log In Again");
           window.location.href="#";
          </script>';
     } else {
       echo "Error ; " . mysqli_error($con); }

   } else {

     echo'<script>alert("New Password Does Not Match!");
           window.location.href="changePassword.php";
          </script>';
   }  
}

?>