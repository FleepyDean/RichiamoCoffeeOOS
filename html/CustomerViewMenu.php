
<?php
session_start();

include('db.php');
if (isset($_SESSION['add_to_cart_message'])) {
  $add_to_cart_message = $_SESSION['add_to_cart_message'];

  // Clear the message from the session
  unset($_SESSION['add_to_cart_message']);
}

$x = 1;
$query = "SELECT * FROM menu WHERE available = 1";
$mysql = $query;
$result = mysqli_query($con, $mysql) or die(mysqli_error($con));


?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Menu</title>
    <link rel="stylesheet" href="../css/RCOOS.css" media="screen">
    <link rel="stylesheet" href="../css/CustomerViewMenu.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/RCOOS.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.4.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "RCOOS"
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

<section class="u-border-2 u-border-grey-75 u-clearfix u-section-1" id="sec-9514">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Menu</h1>
        <a href="cart.php" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-radius-21 u-text-black u-btn-1">CART</a>
        <h3 class="u-text u-text-default u-text-2">Our Selection</h3>
        <form action="" method="POST">
        <div class="u-clearfix u-expanded-width u-gutter-28 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-size-60">
                <div class="u-layout-row">

                <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                  echo"<div class='u-container-style u-layout-cell u-size-30 u-layout-cell-1'>";
                  echo"<div class='u-border-2 u-border-grey-75 u-container-layout u-container-layout-2'>";
                  echo"<img class='u-image u-image-contain u-image-default u-preserve-proportions u-image-1' src=" . $row['picture'] . " alt='' data-image-width='550' data-image-height='550'>";
                  echo"<h4 class='u-text u-align-center u-text-default u-text-3'>" . $row['foodName'] . "  (" . $row['kategori'] . ")<br> RM" . $row['price'] . "</h4>";
                  echo"<h6 class='u-align-justify u-text u-text-4'> " . $row['info'] . "</h6>";
                  //echo"<h6 class='u-text u-text-default u-text-3'>" . $row['kategori'] . "</h6>";
                 // echo"<h4 class='u-text u-text-default u-text-3'>RM " . $row['price'] . "</h4>";

                            echo "<button type='submit' name='add_" . $row['id'] . "' class='u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-radius-20 u-text-black u-btn-3'>Add To Cart</button>";
                            echo "<input type='hidden' name='price_" . $row['id'] . "' value='" . $row['price'] . "'>";
                            echo "<input type='hidden' name='foodName_" . $row['id'] . "' value='" . $row['foodName'] . "'>";
                            echo "<input type='hidden' name='id_" . $row['id'] . "' value='" . $row['id'] . "'>";

     
                            echo "</div>";
                            echo "</div>";
                        }
                        ?>


                    </div>
                </div>
            </form>
        </div>
    </section>

    <?php
    // Process adding items to the cart
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_SESSION['cart'])) {
            foreach ($_POST as $key => $value) {
                if (strpos($key, 'add_') === 0) {
                    $id = substr($key, 4); // Extract the item ID
                    $price = $_POST['price_' . $id];
                    $foodName = $_POST['foodName_' . $id];

                    // Create an array for the item
                    $item_array = array(
                        'id' => $id,
                        'foodName' => $foodName,
                        'price' => $price,
                    );

                    // Add the item to the cart
                    $_SESSION['cart'][] = $item_array;
                    echo '<script>alert("Menu Added to Cart!");
             window.location.href="CustomerViewMenu.php";</script>';
                }
            }
        } else {
            // Initialize the cart if it doesn't exist
            $_SESSION['cart'] = array();
            echo '<script>alert("Menu Added to Cart!");
            window.location.href="CustomerViewMenu.php";</script>';
        }
    }
    ?>

    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-cc34"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Copyright © 2023 Richiamo Coffee Sdn. Bhd. | All rights reserved.</p>
      </div></footer>
</body>
</html>
