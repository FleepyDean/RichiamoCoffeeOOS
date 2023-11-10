<?php
// Assuming you have already established a database connection ($con)
include('db.php');
// Check if you have received the 'orderId' as a parameter in the URL
if (isset($_GET['orderId'])) {
    $orderId = $_GET['orderId'];

    // Fetch the order details from the 'orders' table
    $orderQuery = "SELECT * FROM orders WHERE orderId = '$orderId'";
    $orderResult = mysqli_query($con, $orderQuery);
    $order = mysqli_fetch_assoc($orderResult);

    // Fetch all items related to the order from the 'order_items' table
    $itemsQuery = "SELECT * FROM orderitems WHERE orderId = '$orderId'";
    $itemsResult = mysqli_query($con, $itemsQuery);
}
?>

<!DOCTYPE html>
<style>
    .center-button {
  display: block;
  margin: 0 auto;
  text-align: center;
}
</style>
<html style="font-size: 16px;" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Login or Create Account">
    <meta name="description" content="">
    <title>Checkout</title>
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
    <meta property="og:title" content="Checkout">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>
<body class="u-body u-xl-mode" data-lang="en">
    <header class="u-black u-clearfix u-header u-header" id="sec-7a52">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="#" class="u-image u-logo u-image-1" data-image-width="225" data-image-height="225">
                <img src="../images/Unknown.png" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-decoration u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-hover-white u-text-white" style="padding: 10px;">Menu</a>
            </li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-hover-white u-text-white" href="orderhistory.php" style="padding: 10px;">Order History</a>
        </li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-hover-white u-text-white" href="ProfilePage.php" style="padding: 10px;">Profile</a>
</li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-hover-white u-text-white" href="aboutUs.php" style="padding: 10px;">About Us</a>
</li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-hover-white u-text-white" href="contactUs.php" style="padding: 10px;">Contact Us</a>
</li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-hover-white u-text-white" href="../logout.php" style="padding: 10px;">Sign Out</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link">Sign In</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="changePassword.php">About Us</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Contact Us</a>
</li></ul>

              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
            </nav>
            <h3 class="u-text u-text-default u-text-1">RICHIAMO COFFEE&nbsp;</h3>
        </div>
    </header>
  


    

    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-cc34">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">Copyright © 2023 Richiamo Coffee Sdn. Bhd. | All rights reserved.</p>
        </div>
    </footer>
</body>
</html>