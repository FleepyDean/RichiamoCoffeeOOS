<?php
session_start();
include('db.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

$fName = '';  // Initialize these variables with default values
$lName = '';
$phoneNum = '';
$email = '';
$orderId = '';
$createdOn ='';
$totalPrice = '';
$foodName = '';
$price = '';
$quantity = '';

$sql = "SELECT * FROM customer WHERE phoneNum = '$_SESSION[phoneNum]'";
$result = $con->query($sql);

if ($result !== false && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $fName = $row['fName'];
        $lName = $row['lName'];
        $phoneNum = $row['phoneNum'];
        $email = $row['email'];
    }
} else {
    //echo "0 results";
}

$sql = "SELECT * FROM orders WHERE phoneNum = '$phoneNum'";
$result = $con->query($sql);

if ($result !== false && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $orderId= $row['orderId'];
        $createdOn = $row['createdOn'];
        $totalPrice = $row['totalPrice'];
    }
} else {
    echo "0 results";
}

$mysql = "SELECT * FROM orderitems WHERE orderId = '$orderId'";
$result1 = $con->query($mysql);  // Make sure to use the correct variable name

if ($result1 !== false && $result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
        $foodName = $row['foodName'];
        $price = $row['price'];
        $quantity = $row['quantity'];   
    }
} else {
    // Handle the case when there are no results, e.g., echo "0 results";
}

$sql2 = "UPDATE orders SET stat = 'Paid' WHERE orderId = ?";
$stmt = $con->prepare($sql2);
$stmt->bind_param("s", $orderId); // Assuming $orderId is a string
if ($stmt->execute()) {
    // Order updated successfully.
} else {
    // Handle the error, e.g., echo "Error updating order: " . $stmt->error;
}
$stmt->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Richiamo Coffee Ordering Receipt</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">

    	body{
    margin-top:20px;
    color: #484b51;
}
.text-secondary-d1 {
    color: #728299!important;
}
.page-header {
    margin: 0 0 1rem;
    padding-bottom: 1rem;
    padding-top: .5rem;
    border-bottom: 1px dotted #e2e2e2;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-align: center;
    align-items: center;
}
.page-title {
    padding: 0;
    margin: 0;
    font-size: 1.75rem;
    font-weight: 300;
}
.brc-default-l1 {
    border-color: #dce9f0!important;
}

.ml-n1, .mx-n1 {
    margin-left: -.25rem!important;
}
.mr-n1, .mx-n1 {
    margin-right: -.25rem!important;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}

.text-grey-m2 {
    color: #888a8d!important;
}

.text-success-m2 {
    color: #6ea84e !important;
}

.font-bolder, .text-600 {
    font-weight: 600!important;
}

.text-110 {
    font-size: 110%!important;
}
.text-blue {
    color: #000000 !important;
}
.pb-25, .py-25 {
    padding-bottom: .75rem!important;
}

.pt-25, .py-25 {
    padding-top: .75rem!important;
}
.bgc-default-tp1 {
    background-color: rgba(3, 4, 5, 0.92) !important;
}
.bgc-default-l4, .bgc-h-default-l4:hover {
    background-color: #f3f8fa!important;
}
.page-header .page-tools {
    -ms-flex-item-align: end;
    align-self: flex-end;
}

.btn-light {
    color: #757984;
    background-color: #f5f6f9;
    border-color: #dddfe4;
}
.w-2 {
    width: 1rem;
}

.text-120 {
    font-size: 120%!important;
}
.text-primary-m1 {
    color: #4087d4!important;
}

.text-danger-m1 {
    color: #dd4949!important;
}
.text-blue-m2 {
    color: #000000 !important;
}
.text-150 {
    font-size: 150%!important;
}
.text-60 {
    font-size: 60%!important;
}
.text-grey-m1 {
    color: #7b7d81!important;
}
.align-bottom {
    vertical-align: bottom!important;
}

    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Login or Create Account">
    <meta name="description" content="">
    <title>Checkout</title>
    <link rel="stylesheet" href="../css/RCOOS.css" media="screen">
    <link rel="stylesheet" href="../css/forgotPassword.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/RCOOS.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/RCOOS.js" defer=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.min.js"></script>
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
<body>
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
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-white u-text-hover-white u-text-white" href="CustomerViewMenu.php" style="padding: 10px;">Menu</a>
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
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a href="CustomerviewMenu.php" class="u-button-style u-nav-link">Sign In</a>

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
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="page-content container">
<div class="page-header text-blue-d2">
<h1 class="page-title text-secondary-d1">
Invoice
<small class="page-info"><i class="fa fa-angle-double-right text-80"></i>
    ID: <?php echo $orderId;?>
</small>
</h1>
<div class="page-tools">
<div class="action-buttons">

</div>
</div>
</div>
<div class="container px-0">
<div class="row mt-4">
<div class="col-12 col-lg-12">
<div class="row">
<div class="col-12">
<div class="text-center text-150">
<span class="text-default-d3">RICHIAMO COFFEE</span>
</div>
</div>
</div>

<hr class="row brc-default-l1 mx-n1 mb-4" />
<div class="row">
<div class="col-sm-6">
<div>
<span class="text-sm text-grey-m2 align-middle">To:</span>
<span class="text-600 text-110 text-blue align-middle"><?php echo $fName . " " . $lName;?></span>
</div>
<div class="text-grey-m2">
<div class="my-1">
Universiti Teknologi Malaysia
</div>
<div class="my-1">
Kuala Lumpur
</div>
<div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-secondary"></i> <b class="text-600">+6<?php echo $phoneNum;?></b></div>
</div>
</div>

<div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
    <hr class="d-sm-none" /><div class="text-grey-m2">
<div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
Invoice
</div>
<div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">ID : </span> <?php echo $orderId;?></div>
<div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Issue Date : </span><?php echo $createdOn;?></div>
<div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Status : </span> <span class="badge badge-warning badge-pill px-25">Paid</span></div>
</div>
</div>
</div>
<?php
$x=1;


echo"<div class='mt-4'> ";
echo"<div class='row text-600 text-white bgc-default-tp1 py-25'>";
echo"<div class='d-none d-sm-block col-1'>No.</div>";
echo"<div class='col-9 col-sm-5'>Item</div>";
echo"<div class='d-none d-sm-block col-4 col-sm-2'>Qty</div>";
echo"<div class='d-none d-sm-block col-sm-2'>Unit Price</div>";
echo"<div class='col-2'>Total Amount</div>";
echo"</div>";


$mysql = "SELECT * FROM orderitems WHERE orderId = '$orderId'";
$result1 = $con->query($mysql);

if ($result1 !== false && $result1->num_rows > 0) {
    $x = 1; // Initialize $x
    while ($row = $result1->fetch_assoc()) {
        echo "<div class='text-95 text-secondary-d3'>";
        echo "<div class='row mb-2 mb-sm-0 py-25'>";
        echo "<div class='d-none d-sm-block col-1'>$x</div>";
        echo "<div class='col-9 col-sm-5'>" . $row['foodName'] . "</div>";
        echo "<div class='d-none d-sm-block col-2'>" . $row['quantity'] . "</div>";
        echo "<div class='d-none d-sm-block col-2 text-95'>" . $row['price'] . "</div>";
        echo "<div class='col-2 text-secondary-d2'>" . $row['price'] . "</div>";
        echo "</div>";
        echo "<div class='row border-b-2 brc-default-l2'></div>";
        $x++;
    }
} else {
    // Handle the case when there are no results, e.g., echo "0 results";
}


?>


<div class="row mt-3">
<div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
Welcome to Richiamo Coffee, Using Richimo Coffee ordering system will save your time.
</div>
<div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
<div class="row my-2">
<div class="col-7 text-right">
SubTotal
</div>
<?php
$serviceTaxRate = 6; // Change this to your tax rate
$serviceTax = ($totalPrice * $serviceTaxRate) / 100;
$total = $totalPrice - $serviceTax;
?>
<div class="col-5">
<span class="text-120 text-secondary-d1">RM <?php echo number_format($total,2);?></span>
</div>
</div>
<div class="row my-2">
<div class="col-7 text-right">
Service Tax (6%)
</div>
<div class="col-5">
<span class="text-110 text-secondary-d1">RM <?php echo number_format($serviceTax,2);?></span>
</div>
</div>
<div class="row my-2 align-items-center bgc-primary-l3 p-2">
<div class="col-7 text-right">
Total Amount
</div>
<div class="col-5">
<span class="text-150 text-success-d3 opacity-2">RM <?php echo number_format($totalPrice,2);?></span>
</div>
</div>
</div>
</div>
<hr/>
<div>
<span class="text-secondary-d1 text-105">Thank you for your visit, please come again.</span>
<br><a href="CustomerViewMenu.php" class="btn btn-warning btn-bold px-4 float-right mt-3 mt-lg-0">Done</a>
<br><br><a href="addFeedback.php" class="btn btn-warning btn-bold px-4 float-right mt-3 mt-lg-0">Leave Us a Word!</a>
</div>
</div>
</div>
</div>
</div>
<br><br>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>