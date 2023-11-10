<?php
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>CustomerViewMenu</title>
    <link rel="stylesheet" href="../css/RCOOS.css" media="screen">
<link rel="stylesheet" href="../css/CustomerViewMenu.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/RCOOS.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.4.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "RCOOS",
		"logo": "images/Unknown.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="CustomerViewMenu">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
<body class="u-body u-xl-mode" data-lang="en">
<?php include("../element/navBar.php"); ?>
<header class="u-black u-clearfix u-header u-header" id="sec-7a52"><div class="u-clearfix u-sheet u-sheet-1">
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
                <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-hover-white u-text-white" href="CustomerViewMenu.php"style="padding: 10px;">Menu</a>
                    </li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-hover-white u-text-white" href="orderhistory.php" style="padding: 10px;">Order History</a>
                    </li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-hover-white u-text-white" href="profilePage.php" style="padding: 10px;">Profile</a>
                    </li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-hover-white u-text-white" href="aboutUs.php" style="padding: 10px;">About Us</a>
                    </li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-hover-white u-text-white" href="contactUs.php" style="padding: 10px;">Contact Us</a>
                    </li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-hover-white u-text-white" href="../logout.php" style="padding: 10px;">Sign Out</a>
                    </li></ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                    <div class="u-inner-container-layout u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="CustomerViewMenu.php">Menu</a>
                        </li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-hover-white u-text-white" href="orderhistory.php" style="padding: 10px;">Order History</a>
                    </li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-hover-white u-text-white" href="profilePage.php" style="padding: 10px;">Profile</a>
                    </li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-hover-white u-text-white" href="aboutUs.php" style="padding: 10px;">About Us</a>
                    </li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-hover-white u-text-white" href="contactUs.php" style="padding: 10px;">Contact Us</a>
                    </li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-hover-white u-text-white" href="../logout.php" style="padding: 10px;">Sign Out</a>
                            </li></ul>

                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav>
        <h3 class="u-text u-text-default u-text-1">RICHIAMO COFFEE&nbsp;</h3>
    </div></header>

    <section class="u-clearfix u-section-1" id="sec-3b77">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Order History</h1>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity">
            <colgroup>
              <col width="5.3%">
              <col width="14.1%">
              <col width="14%">
              <col width="22.9%">
              <col width="13.7%">
              <col width="19.999999999999996%">
            </colgroup>
            <?php

include('db.php');

$phoneNum = $_SESSION['phoneNum'];
$mysql = "SELECT * FROM orders WHERE phoneNum='$phoneNum'";
$result = mysqli_query($con, $mysql) or die(mysqli_error($con));
$x = 1;

if (mysqli_num_rows($result) > 0) {
    echo "<thead class='u-black u-table-header u-table-header-1'>";
    echo "<tr style='height: 41px;'>";
    echo "<th class='u-border-1 u-border-black u-table-cell'>No.</th>";
    echo "<th class='u-border-1 u-border-black u-table-cell'>Order Number</th>";
    echo "<th class='u-border-1 u-border-black u-table-cell'>Order Status</th>";
    echo "<th class='u-border-1 u-border-black u-table-cell'>Time / Date</th>";
    echo "<th class='u-border-1 u-border-black u-table-cell'>Total (RM)</th>";
    echo "<th class='u-border-1 u-border-black u-table-cell'>Details</th>";
    echo "</tr>";
    echo "</thead>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tbody class='u-table-body'>";
        echo "<tr style='height: 75px;'>";
        echo "<td class='u-border-1 u-border-grey-30 u-table-cell'>$x</td>";
        echo "<td class='u-border-1 u-border-grey-30 u-table-cell'>" . $row['orderId'] . "</td>";
        echo "<td class='u-border-1 u-border-grey-30 u-table-cell'>" . $row['stat'] . "</td>";
        echo "<td class='u-border-1 u-border-grey-30 u-table-cell'>" . $row['createdOn'] . "</td>";
        echo "<td class='u-border-1 u-border-grey-30 u-table-cell'>RM " . number_format($row['totalPrice'], 2) . "</td>";
        echo "<td class='u-border-1 u-border-grey-30 u-table-cell'>
                  <a href='detailsOrderHistory.php?orderId=" . $row['orderId'] . "' class='u-border-none u-btn u-btn-round u-button-style u-hover-palette-3-light-2 u-palette-3-base u-radius-50 u-btn-1'>Details</a>
              </td>";
        echo "</tr>";
        echo "</tbody>";
        $x++;
    }
} else {
    echo "<center>No Data</center>";
}
?>

          </table>
        </div>
        <br><br>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-cc34"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Copyright © 2023 Richiamo Coffee Sdn. Bhd. | All rights reserved.</p>
      </div></footer>

  
</body></html>