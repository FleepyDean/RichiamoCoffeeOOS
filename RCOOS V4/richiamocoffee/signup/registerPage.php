<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Login orCreate Account">
    <meta name="description" content="">
    <title>registerPage</title>
    <link rel="stylesheet" href="../css/RCOOS.css" media="screen">
<link rel="stylesheet" href="../css/registerPage.css" media="screen">
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
    <meta property="og:title" content="registerPage">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-aa5b" data-image-width="4000" data-image-height="2925">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-border-2 u-border-grey-75 u-container-style u-expanded-width-xs u-group u-radius-39 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h1 class="u-text u-text-1">Create Account</h1>
            <div class="u-form u-form-1">
              <form action="signupProcess.php" method="POST">

                <div class="u-form-group u-form-name u-form-partition-factor-2 u-label-flag u-label-none-flag u-form-group-1">
                  <label for="fName" >First Name</label>
                  <input type="text" placeholder="Enter your First Name" id="fName" name="fName" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                </div>

                <div class="u-form-group u-form-name u-form-partition-factor-2 u-label-flag u-label-none-flag u-form-group-2">
                  <label for="lName" >Last Name</label>
                  <input type="text" placeholder="Enter your Last Name" id="lName" name="lName" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                </div>

                <div class="u-form-email u-form-group u-label-flag u-label-none-flag u-form-group-3">
                  <label for="email" >Email</label>
                  <input type="email" placeholder="Enter a valid email address" id="email" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                </div>

                <div class="u-form-group u-form-partition-factor-2 u-label-flag u-label-none-flag u-form-group-4">
                  <label for="pwd" >Password</label>
                  <input type="password" id="pwd" name="pwd" pattern=".{6,18}" title="6-18 characters" placeholder="Between 6-20 character" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-4">
                </div>

                <div class="u-form-group u-form-partition-factor-2 u-label-flag u-label-none-flag u-form-group-5">
                  <label for="confirmPwd" >Confirm Password</label>
                  <input type="password"" id="confirmPwd" name="confirmPwd" pattern=".{6,18}" title="6-18 characters" placeholder="Between 6-20 character" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-5">
                </div>

                <div class="u-form-group u-form-phone u-label-flag u-label-none-flag u-form-group-6">
                  <label for="phoneNum" >Phone Number</label>
                  <input type="text" placeholder="+60 12-345 6789" id="phoneNum" name="phoneNum" pattern=".{10,11}" title="10-11 digitss" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                </div>
                
                <div class="u-form-agree u-form-group u-label-flag u-label-none-flag u-form-group-11">
                  <input type="checkbox" id="agree-2e42" name="agree" class="u-agree-checkbox" required="">
                  <label for="agree-2e42" class="u-agree-label u-label u-label-11">I accept the <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="https://richiamocoffee.com/about-us/terms-and-conditions/">Terms of Service</a> and 
                    <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="https://richiamocoffee.com/about-us/privacy-policy/">Privacy Policy</a>
                  </label>
                </div>

                <button type="submit" class="signupbtn">Sign Up</button>
              
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