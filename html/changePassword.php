<?php 
//Sambungan ke DB 

include('db.php');
session_start();


//dapatkan id tempahan
$phoneNum = $_GET['phoneNum'];

###### jika user kLik button KEMASKINI,########
###### update record dalam jaduaL      ########

if(isset($_POST['edit']))
{

//add old password test AND phoneNum get on hrefloc

$oldPwd = md5($_POST['oldPwd']);
$pwd = md5($_POST['pwd']);
$newPwd = md5($_POST['newPwd']);
    //semak tarikh yang dimasukkan
    //jika tarikhmasuk Lebih besar
   if ($oldPwd == $newPwd) {
     echo'<script>alert("Old Password Cannot be same as the New Password!");
               window.location.href = "#";

              </script>';

   } else if ($pwd == $newPwd) {

     $sql= "UPDATE customer
     SET pwd = '".md5($_POST["pwd"])."'
     WHERE phoneNum= '$phoneNum'";
     
       if (mysqli_query($con, $sql)) {
     echo'<script>alert("Password Updated! Please Log In Again");
           window.location.href="../index.php";
          </script>';
     } else {
       echo "Error ; " . mysqli_error($con); }

   } else {

     echo'<script>alert("New Password Does Not Match!");
           window.location.href = "#";
          </script>';
   }  

}
###########################################proses updaate tamat######################
	
//dapatkan data bilik dari Jadual untuk display dalam textfield 
$query = "SELECT * FROM customer WHERE phoneNum = '$phoneNum'";
		  
         $result = mysqli_query($con, $query) or die(mysqli_error($con));
         $row1 = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Login orCreate Account">
    <meta name="description" content="">
    <title>forgotPassword</title>
    <link rel="stylesheet" href="../css/RCOOS.css" media="screen">
<link rel="stylesheet" href="../css/pwdverify.css" media="screen">
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
            <h1 class="u-text u-text-1">Reset Password</h1>
            <img class="u-image u-image-circle u-preserve-proportions u-image-1" alt="" data-image-width="225" data-image-height="225" src="../images/Unknown.png">
            <div class="u-form u-form-1">
              <form action="" method="POST"  enctype="multipart/form-data" >

              <div class="u-form-group u-form-phone u-label-flag u-label-none-flag u-form-group-1">
                  <label for="phoneNum" class="u-label u-label-1">Enter your mobile number to proceed</label>
                  <input type="text" pattern="[0-9]{0-11}"  value="<?php echo $row1['phoneNum']; ?>" id="phoneNum" name="phoneNum" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" disabled>
                </div>

                <div class="u-form-group u-label-flag u-label-none-flag u-form-group-1">
                  <label for="oldPwd" class="u-label u-label-1">Enter Your Old Password</label>
                  <input type="password" name="oldPwd" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                </div>

                <div class="u-form-group u-label-flag u-label-none-flag u-form-group-1">
                  <label for="pwd" class="u-label u-label-1">Enter Your New Password</label>
                  <input type="password"  name="pwd" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                </div>

                <div class="u-form-group u-label-flag u-label-none-flag u-form-group-1">
                  <label for="newPwd" class="u-label u-label-1">Re-Enter Your New Password</label>
                  <input type="password"  name="newPwd" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                </div>

                <input type="submit" value="Save" name="edit" class="u-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-radius-21 u-btn-1">

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
  
</body></html>