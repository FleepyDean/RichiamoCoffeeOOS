<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Login</title>
    <link rel="stylesheet" href="../css/RCOOS.css" media="screen">
    <link rel="stylesheet" href="../css/phoneSignInpage.css" media="screen">
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
    <meta property="og:title" content="loginPage">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
<body class="u-body u-xl-mode" data-lang="en">
<section class="u-black u-clearfix u-container-align-center-xs u-section-1" id="sec-a0c7">
    <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
        <div class="u-container-style u-expanded-width u-group u-radius-40 u-shape-round u-white u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <h1 class="u-text u-text-1"> Login or<br>Create Account
                </h1>

                <img class="u-image u-image-circle u-preserve-proportions u-image-1" src="../images/Unknown.png" alt="" data-image-width="225" data-image-height="225">
                <div class="u-form u-form-1">

                    <form action="loginProcess.php" method="POST">
                        <div class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px;">
                        <div class="u-form-group u-form-phone u-label-flag u-label-none-flag u-form-group-1">
                            <label for="phoneNum" class="u-label u-label-1">Enter your mobile number to proceed</label>
                            <input type="text" pattern="[0-9]{0-11}"  placeholder="+60 12-345 6789" id="phoneNum" name="phoneNum" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                        </div>
                        <div class="u-form-group u-label-flag u-label-none-flag u-form-group-1">
                            <label for="pwd" class="u-label u-label-1">Password</label>
                            <input type="password" placeholder="Between 6-20 character" id="pwd" name="pwd" pattern=".{6,18}" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                        </div>
                            <a class="u-form-group u-form-text u-text-black u-text-hover-palette-1-base" href="../html/forgotPassword.html">Forgot Password ?</a>
                            <a class="u-form-group u-form-text u-text-black u-text-hover-palette-1-base" href="../signup/registerPage.php">Click here to Create a Account </a>
                            <div class="u-align-center u-form-group u-form-submit u-label-top">
                                <input type="submit" name="loginBtn" class="u-form-control-hidden">
                                <a class="u-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-radius-21 u-btn-1">Continue</a>
                            </div>
                        <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                        <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                        <input type="hidden" value="" name="recaptchaResponse">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>


</body></html>