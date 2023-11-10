<?php
session_start();
//Sambungan ke DB
include('db.php');

//dapatkan id tempahan
$phoneNum = $_GET['phoneNum'];

$oldPwd = md5($_POST['oldPwd']);
$pwd = md5($_POST['pwd']);
$newPwd = md5($_POST['newPwd']);

###### jika user kLik button KEMASKINI,########
###### update record dalam jaduaL      ########

if(isset($_POST['pwdBtn']))
{
    //semak tarikh yang dimasukkan
    //jika tarikhmasuk Lebih besar
   if ($oldPwd == $newPwd) {
     echo'<script>alert("Old Password Cannot be same as the New Password!");
               window.location.href="changePassword.php";
              </script>';

   } else if ($pwd == $newPwd) {

     $sql= "UPDATE customer
     SET pwd = '".$_POST["pwd"]."'
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