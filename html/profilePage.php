
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/RCOOS.css" media="screen">
    <link rel="stylesheet" href="../css/pwdverify.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/RCOOS.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/RCOOS.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.4.4, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


    <?php
    session_start();
    include ('db.php');

    $phoneNum = $_SESSION['phoneNum'];

    $mysql = mysqli_query($con, "SELECT * FROM customer WHERE phoneNum ='$phoneNum'");
    $row = mysqli_fetch_array($mysql);

    $fName = $row['fName'];
    $lName = $row['lName'];
	$phoneNum = $row['phoneNum'];
	$email = $row['email'];
?>

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
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
        <div class="u-border-2 u-border-grey-75 u-container-style u-group u-radius-39 u-shape-round u-white u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <h1 class="u-text u-text-1">Profile</h1>
                <div class="u-form u-form-1">
              <form action="editProfile.php" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form">
                  <div class="u-form-group u-form-phone u-label-flag u-label-none-flag u-form-group-1">
                  <label for="fName" class="u-label u-label-1">First Name</label>
                  <input type="text" value="<?php echo $fName; ?>" id="fName" name="fName" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                </div>

                  <div class="u-form-group u-form-phone u-label-flag u-label-none-flag u-form-group-1">
                      <label for="lName" class="u-label u-label-1">Last Name</label>
                  <input type="text" value="<?php echo $lName; ?>" id="lName" name="lName" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                </div>

                  <div class="u-form-group u-form-phone u-label-flag u-label-none-flag u-form-group-1">
                  <label for="email" class="u-label u-label-1"">Email</label>
                  <input type="email" value="<?php echo $email; ?>" id="email" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="" readonly>
                </div>

                  <div class="u-form-group u-form-phone u-label-flag u-label-none-flag u-form-group-1">
                  <label for="phoneNum" class="u-label u-label-1">Phone Number</label>
                  <input type="tel" pattern="[0-9]{10-11}"" value="<?php echo $phoneNum; ?>" id="phoneNum" name="phoneNum" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"  readonly>
                </div>
                  <div class="u-align-center u-form-group u-form-submit u-label-top">

                      <?php
                      echo"<p>";
                      echo"<a href='changePassword.php?phoneNum=".$row['phoneNum']."'>Click here to Change Password</a>";
                      echo"</p>";
                      ?>

                      <a type="submit" name="save" class="u-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-radius-21 u-btn-1">Save Changes</a>
                  

                      <a href="CustomerViewMenu.php" class="u-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-radius-21 u-btn-1">Go Back</a>
                  </div>

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
  
</body></html>