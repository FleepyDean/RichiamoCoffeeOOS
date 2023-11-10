<?php
//start session
session_start() ;

//sambungan ke db
include ('db.php') ;

//simpan data session berdasarkan kunct primer dalam jadual
$phoneNum = $_SESSION['phoneNum'] ;

//dapatkan data pengguna berdasarkan session kunci primer
$mysql = mysqli_query($con, "SELECT * FROM customer WHERE phoneNum= '$phoneNum'") ;
$row = mysqli_fetch_array($mysql);

$fName = $row['fName'] ;
$id = $row['id'] ; //access level -- 1=admin  2=penggunabiasa

//jika data session tidah dijumpai dalam jadual 
if (!isset($phoneNum))
{
header("Location: ../login/index.php") ; //kembali ke paparan utama
}

?>