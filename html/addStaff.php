<?php
//sambungan ke db
include ('db.php') ;

//$fName = $_POST['fName'] ;
//$lName = $_POST ['lName'] ;
//$email = $_POST ['email'] ;
//$phoneNum = $_POST['phoneNum'] ;

//add email verification
if(isset($_POST['signup']))
{
    $fName = $_POST['fName'] ;
$lName = $_POST ['lName'] ;
$email = $_POST ['email'] ;
$phoneNum = $_POST['phoneNum'] ;
$pwd = md5(123456789) ;
$check = "SELECT phoneNum FROM customer WHERE phoneNum = '$phoneNum'"; ;
$cEmail = "SELECT email FROM customer WHERE email = '$email'"; ;
$result = mysqli_query($con, $check) or die (mysqli_error($con));
$result2 = mysqli_query($con, $cEmail) or die (mysqli_error($con));


// 1-cust. 2-staff. 3-admin
if (mysqli_num_rows($result) > 0 || mysqli_num_rows($result2) > 0)
{
	echo '<script>
	alert("Phone Number or Email Already Exsist! Please Use Another Number or Email") ;
	window.location.href="addStaff.php";</script>';
}else{
	
	$mysql = "INSERT INTO customer(phoneNum, fName, lName, email, pwd, id, stat) VALUES ('$phoneNum', '$fName', '$lName', '$email', '$pwd', 2, 1)" ; 
	
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

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>addStaff</title>
    <link rel="stylesheet" href="../css/RCOOS.css" media="screen">
<link rel="stylesheet" href="../css/addStaff.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/RCOOS.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.4.4, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "RCOOS"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="addStaff">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-section-1" id="sec-8f24">
      <div class="u-white u-container-style u-group u-shape-rectangle u-group-1">
      </div>
      <h1 class="u-text u-text-default u-text-1">Add Staff</h1>
      <div class="u-border-2 u-border-grey-75 u-container-style u-group u-radius-41 u-shape-round u-white u-group-2">
        <div class="u-container-layout u-container-layout-2">
          <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-2" src="../images/Unknown.png" alt="" data-image-width="245" data-image-height="260">
          <div class="u-form u-form-1">
            <form action="" method="POST"  enctype="multipart/form-data" >
              <div class="u-form-group u-form-group-1">
                <label for="text-87c3" class="u-label">Staff Phone Number</label>
                <input type="text" placeholder="+60123456789" name="phoneNum" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
              </div>
              <div class="u-form-group u-form-name">
                <label for="name-05ef" class="u-label">First Name</label>
                <input type="text" placeholder="Ali" name="fName" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
              </div>
              <div class="u-form-group u-form-name">
                <label for="name-05ef" class="u-label">Last Name</label>
                <input type="text" placeholder="Abu" name="lName" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
              </div>
              <div class="u-form-email u-form-group">
                <label for="email-05ef" class="u-label">Email</label>
                <input type="email" placeholder="aliabu@gmail.com" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
              </div>
                <input type="submit" name="signup" value="SAVE" class='u-border-none u-btn u-btn-round u-button-style u-blue-25 u-hover-blue-5 u-radius-10 u-btn-15'>
                <a href="staffList.php" class="u-border-none u-btn u-btn-round u-button-style u-grey-25 u-hover-grey-5 u-radius-10 u-btn-15" >Back</a>
              
            </form>
          </div>
        </div>
      </div>
    </section>
  
</body></html>