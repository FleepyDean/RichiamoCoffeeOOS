<?php
//sambungan ke db
include ('db.php') ;

$fName = $_POST['fName'] ;
$lName = $_POST ['lName'] ;
$email = $_POST ['email'] ;
$phoneNum = $_POST['phoneNum'] ;


if(isset($_POST['signup']))
{
$check = "SELECT phoneNum FROM customer WHERE phoneNum = '$phoneNum'"; ;
$cEmail = "SELECT email FROM customer WHERE email = '$email'"; ;
$result = mysqli_query($con, $check) or die (mysqli_error($con));
$result2 = mysqli_query($con, $cEmail) or die (mysqli_error($con));


// 1-cust. 2-staff. 3-admin
if (mysqli_num_rows($result) > 0 || mysqli_num_rows($result2) > 0)
{
	echo '<script>
	alert("Phone Number or Email Already Exsist! Please Use Another Number or Email") ;
	window.location.href="../addStaff.php";</script>';
}else{
	
	$mysql = "INSERT INTO customer(phoneNum, fName, lName, email, pwd, id) VALUES ('$phoneNum', '$fName', '$lName', '$email', 000000, 2)" ; 
	
	if (mysqli_query($con, $mysql)) {
		//papar jika pengguna baru didaftarkan
		echo '<script>
		alert("Sign Up Sucessful! Please Ask Staff To Log In") ;
	    window.location.href="staffList.php";</script>';
		
	}else{
		echo "error ; " . mysqli_error($con) ;
	}
}

}
//close connection_aborted
mysqli_close($con);
?>