<?php 
//Sambungan ke DB 
include ('db.php');

// dapatkan idbilik 
   $phoneNum = $_GET['phoneNum'];

### jika user klik button KEMASKINI,update record dalam jadual############
if(isset($_POST['edit']))
{
    
     $sql = "UPDATE customer
             SET fName = '".$_POST["fName"]."',
                 lName = '".$_POST["lName"]."',
                 email = '".$_POST["email"]."'
             WHERE phoneNum = '$phoneNum'";
			 
     if (mysqli_query($con, $sql)) { 
             echo '<script>alert("Update Sucessful!");
                   window.location.href="staffList.php";</script>';
     } else {
         echo "Error ; " . mysqli_error($con); }
		 
     
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
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>editStaffForm</title>
    <link rel="stylesheet" href="../css/RCOOS.css" media="screen">
<link rel="stylesheet" href="../css/editStaffForm.css" media="screen">
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
    <meta property="og:title" content="editStaffForm">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-section-1" id="sec-8f24">
      <div class="u-white u-container-style u-group u-shape-rectangle u-group-1">
      </div>
      <h1 class="u-text u-text-default u-text-1">Edit Staff</h1>
      <div class="u-border-2 u-border-grey-75 u-container-style u-group u-radius-41 u-shape-round u-white u-group-2">
        <div class="u-container-layout u-container-layout-2">
          <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-2" src="../images/Unknown.png" alt="" data-image-width="245" data-image-height="260">
          <div class="u-form u-form-1">
            <form action="" method="POST"  enctype="multipart/form-data" >
              <div class="u-form-group u-form-group-1">
                <label for="text-87c3" class="u-label">Staff Phone Number</label>
                <input type="text" value="<?php echo $row1['phoneNum']; ?>" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" disabled>
              </div>
              <div class="u-form-group u-form-name">
                <label for="name-05ef" class="u-label">First Name</label>
                <input type="text"  name="fName" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value="<?php echo $row1['fName']; ?>" required="">
              </div>
              <div class="u-form-group u-form-name">
                <label for="name-05ef" class="u-label">Last Name</label>
                <input type="text" name="lName" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value="<?php echo $row1['lName']; ?>"required="">
              </div>
              <div class="u-form-email u-form-group">
                <label for="email-05ef" class="u-label">Email</label>
                <input type="email" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value="<?php echo $row1['email']; ?>" required="" >
              </div>
              <div class="u-align-center u-form-group u-form-submit">


                  <input type="submit" name="edit" value="SAVE" class='u-border-none u-btn u-btn-round u-button-style u-blue-25 u-hover-blue-5 u-radius-10 u-btn-15'>
                  <a href="staffList.php" class="u-border-none u-btn u-btn-round u-button-style u-grey-25 u-hover-grey-5 u-radius-10 u-btn-15" >Back</a>

              </div>
              <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
              <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
              <input type="hidden" value="" name="recaptchaResponse">
            </form>
          </div>
        </div>
      </div>
    </section>
    
    

</body></html>