<?php
session_start(); // Start the session

// Include your database connection file (e.g., db.php)
include('db.php');

$phoneNum = $_SESSION['phoneNum']; // Get the user's ID from the session
$total = $_GET['total'];

// Loop through the items in the cart
// Step 2: Insert order into 'orders' table
// Step 2: Insert order into 'orders' table
$sql = "INSERT INTO orders (phoneNum, totalPrice, createdOn) VALUES ('$phoneNum', '$total', NOW())";
if (mysqli_query($con, $sql)) {
    $orderId = mysqli_insert_id($con); // Get the unique order ID
} else {
    echo "Error inserting order: " . mysqli_error($con);
}



// Step 3: Insert items into 'order_items' table using the retrieved $orderId
foreach ($_SESSION['cart'] as $cartItem) {
    $foodName = $cartItem['foodName'];
    $price = $cartItem['price'];
    $quantity = isset($cartItem['quantity']) ? $cartItem['quantity'] : 1;

    $sql = "INSERT INTO orderitems (orderId, foodName, price, quantity) 
            VALUES ('$orderId', '$foodName', '$price', '$quantity')";

    if (mysqli_query($con, $sql)) {
        //echo "Item successfully inserted into the order_items table: $foodName<br>";
    } else {
        echo "Error inserting item: " . mysqli_error($con);
    }
}


 if (empty($_SESSION['cart'])) {
    //echo "The cart is empty.";
}

$_SESSION['cart'] = array();

$mysql = "SELECT orderId FROM orders WHERE phoneNum = '$phoneNum'";
// Execute the query
$result = mysqli_query($con, $mysql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $orderId = $row['orderId'];
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

  <body class="u-body u-xl-mode" data-lang="en">
    
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-aa5b" data-image-width="4000" data-image-height="2925">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-border-2 u-border-grey-75 u-container-style u-group u-radius-39 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h1 class="u-text u-text-1">Checkout</h1>
            <img class="u-image u-image-circle u-preserve-proportions u-image-1" alt="" data-image-width="225" data-image-height="225" src="../images/Unknown.png">
            <div class="u-form u-form-1">
                
              <form action="placeOrderFunction.php" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" method="POST">
                <div class="u-form-group u-label-flag u-label-none-flag u-form-group-1">
                  <label for="text-88c1" class="u-label u-label-1">Your Total</label>
                  <input type="text" value="RM <?php echo number_format($total,2); ?>"  name="total" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" disabled>
                </div>
                <div class="u-align-center u-form-group u-form-submit u-label-flag u-label-none-flag">
                <?php echo "<a href='receipt.php' name='cash' class='u-border-none u-btn u-btn-round u-button-style u-hover-palette-3-light-2 u-palette-3-base u-radius-50 u-btn-1'>Checkout at Counter (Cash)</a>"; ?>
                <?php echo "<a href='checkout.php?total=$total' name='cash' class='u-border-none u-btn u-btn-round u-button-style u-hover-palette-3-light-2 u-palette-3-base u-radius-50 u-btn-1'>Checkout with Online Payment</a>"; ?>
                <div class="u-form-send-message u-form-send-success"> Reset password link already send to your registed email </div>
                
</div>
                <div class="u-form-send-error u-form-send-message">Try again later </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>


    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-cc34">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">Copyright © 2023 Richiamo Coffee Sdn. Bhd. | All rights reserved.</p>
        </div>
    </footer>
</body>
</html>