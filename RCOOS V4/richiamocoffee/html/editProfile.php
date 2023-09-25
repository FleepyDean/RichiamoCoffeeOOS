<?php
session_start();
//Sambungan ke DB
include('db.php');

//dapatkan id tempahan
$phoneNum = $_POST['phoneNum'];

###### jika user kLik button KEMASKINI,########
###### update record dalam jaduaL      ########

if(isset($_POST['save']))
{
    //semak tarikh yang dimasukkan
    //jika tarikhmasuk Lebih besar
   

    $sql= "UPDATE customer
         SET fName = '".$_POST['fName']."', lName ='".$_POST['lName']."', email ='".$_POST['email']."'
         WHERE phoneNum= '$phoneNum'";
         
		 if (mysqli_query($con, $sql)) {
         echo'<script>alert("Changes Saved!");
               window.location.href="profilePage.php";
              </script>';
         } else {
           echo "Error ; " . mysqli_error($con); }
}


?>
