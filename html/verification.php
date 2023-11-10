<?php
session_start();

include('db.php'); // Include your database connection

if (isset($_POST["verify"])) {
    $otp = $_SESSION['otp'];
    $phoneNum = $_GET['phoneNum'];
    $otp2 = $_POST['otp2']; // Corrected the form field name

    if ($otp != $otp2) {
        echo '<script>alert("Invalid OTP code");</script>';
    } else {
        // Update the user's status in the database
        $mysql = "UPDATE customer
        SET stat = 1, verify = CURRENT_TIMESTAMP
        WHERE phoneNum = '$phoneNum'";

        if (mysqli_query($con, $mysql)) { // Changed $con to $connect
            echo '<script>alert("Account verified. You may now sign in.");
            window.location.href="../index.php";</script>';
           
        } else {
            echo '<script>alert("Error updating user status");</script>';
        }
    }

    mysqli_close($con); // Changed $con to $connect
}
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Login orCreate Account">
    <meta name="description" content="">
    <title>Email Verification</title>
    <link rel="stylesheet" href="../css/RCOOS.css" media="screen">
<link rel="stylesheet" href="../css/forgotPassword.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/RCOOS.js" defer=""></script>
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
    <meta property="og:title" content="forgotPassword">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-aa5b" data-image-width="4000" data-image-height="2925">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-border-2 u-border-grey-75 u-container-style u-group u-radius-39 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h1 class="u-text u-text-1">Email Verification</h1>
            <img class="u-image u-image-circle u-preserve-proportions u-image-1" alt="" data-image-width="225" data-image-height="225" src="../images/Unknown.png">
            <div class="u-form u-form-1">
              <form action="" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" method="POST">
                <div class="u-form-group u-label-flag u-label-none-flag u-form-group-1">
                  <label for="text-88c1" class="u-label u-label-1">Enter Your Verification Code From the Email</label>
                  <input type="text"  name="otp2" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                </div>
                <div class="u-align-center u-form-group u-form-submit u-label-flag u-label-none-flag">
                  <input type="submit" value="submit" name="verify">
                </div>
                <div class="u-form-send-message u-form-send-success"> Reset password link already send to your registed email </div>
                <div class="u-form-send-error u-form-send-message">Try again later </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-cc34"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Copyright © 2023 Richiamo Coffee Sdn. Bhd. | All rights reserved.</p>
      </div></footer>
  
</body>
</html>