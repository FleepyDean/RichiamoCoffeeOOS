<?php
include ('db.php');

// Execute the SQL query to calculate the total sum of totalPrice
$sql = "SELECT SUM(totalPrice) AS total_sum FROM orders";
$result = mysqli_query($con, $sql);

// Check if the query was successful
if ($result) {
    // Fetch the result
    $row = mysqli_fetch_assoc($result);

    // Access the total sum using the alias 'total_sum'
    $totalSum = $row['total_sum'];

} else {
    echo "Error calculating the total sum: " . mysqli_error($con);
}

$sql2="SELECT COUNT(*) AS total_count FROM orders";
$result2 = mysqli_query($con, $sql2);

// Check if the query was successful
if ($result2) {
    // Fetch the result
    $row = mysqli_fetch_assoc($result2);

    // Access the total sum using the alias 'total_sum'
    $total_count = $row['total_count'];

} else {
    echo "Error calculating the total order: " . mysqli_error($con);
}

$sql3="SELECT COUNT(*) AS total_menu FROM menu";
$result3 = mysqli_query($con, $sql3);

// Check if the query was successful
if ($result3) {
    // Fetch the result
    $row = mysqli_fetch_assoc($result3);

    // Access the total sum using the alias 'total_sum'
    $total_menu = $row['total_menu'];

} else {
    echo "Error calculating the total order: " . mysqli_error($con);
}

$sql4="SELECT COUNT(*) AS total_cust FROM customer WHERE id=1";
$result4 = mysqli_query($con, $sql4);

// Check if the query was successful
if ($result4) {
    // Fetch the result
    $row = mysqli_fetch_assoc($result4);

    // Access the total sum using the alias 'total_sum'
    $total_cust = $row['total_cust'];

} else {
    echo "Error calculating the total order: " . mysqli_error($con);
}

?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>dashboard</title>
    <link rel="stylesheet" href="../css/RCOOS.css" media="screen">
    <link rel="stylesheet" href="../css/dashboard.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/RCOOS.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.4.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "RCOOS"
        }</script>
    <?php
    include "../element/sidebar.php";
    ?>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="dashboard">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
<body class="u-body u-xl-mode" data-lang="en">
<section class="u-clearfix u-section-1" id="sec-c09b">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Dashboard</h1>
        <div class="u-clearfix u-gutter-26 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-col">
                    <div class="u-size-30">
                        <div class="u-layout-row">
                            <div class="u-container-style u-layout-cell u-radius-10 u-shape-round u-size-30 u-layout-cell-1">
                                <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-1">
                                    <h2 class="u-text u-text-default u-text-2">Total Income</h2>
                                    <h3 class="u-text u-text-default u-text-9"><?php echo "RM " . number_format($totalSum, 2) ?></h3>
                                </div>
                            </div>
                            <div class="u-container-style u-layout-cell u-radius-10 u-shape-round u-size-30 u-layout-cell-2">
                                <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-2">
                                    <h2 class="u-text u-text-default u-text-4">Total Orders</h2>
                                    <h3 class="u-text u-text-default u-text-9"><?php echo $total_count ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-size-30">
                        <div class="u-layout-row">
                            <div class="u-container-style u-layout-cell u-radius-10 u-shape-round u-size-30 u-layout-cell-3">
                                <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-3">
                                    <h2 class="u-text u-text-default u-text-6">Total Customer</h2>
                                    <h3 class="u-text u-text-7"><?php echo $total_cust ?></h3>
                                </div>
                            </div>
                            <div class="u-container-style u-layout-cell u-radius-10 u-shape-round u-size-30 u-layout-cell-4">
                                <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-4">
                                    <h2 class="u-text u-text-default u-text-8">Total Menu</h2>
                                    <h3 class="u-text u-text-default u-text-9"><?php echo $total_menu ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="u-text u-text-default u-text-10">Orders Summary</h1>
        <div class="u-table u-table-responsive u-table-1">
            <table class="u-table-entity">
                <colgroup>
                    <col width="12.2%">
                    <col width="27.6%">
                    <col width="20.2%">
                    <col width="20%">
                    <col width="20%">
                </colgroup>

                <?php
                $x = 1;
                include('db.php');
                $query = "SELECT * FROM orders" ;
                $mysql = $query ;
                $result = mysqli_query($con, $mysql) or die(mysqli_error($con));

                $query = "SELECT * FROM customer" ;
                $mysql5 = $query ;
                $result5 = mysqli_query($con, $mysql5) or die(mysqli_error($con));



                if (mysqli_num_rows($result) > 0)
                {
                    echo"<thead class='u-align-center u-black u-table-header u-table-header-1'>";
                    echo"<tr style='height: 43px;'>";
                    echo"<th class='u-border-1 u-border-black u-table-cell'>Order ID</th>";
                    echo"<th class='u-border-1 u-border-black u-table-cell'>Date and Time</th>";
                    echo"<th class='u-border-1 u-border-black u-table-cell'>Customer Phone Number</th>";
                    echo"<th class='u-border-1 u-border-black u-table-cell'>Amount</th>";
                    echo"<th class='u-border-1 u-border-black u-table-cell'>Status</th>";
                    echo"</tr>";
                    echo"</thead>";



                    while ($row = mysqli_fetch_array($result)) {


                        echo"<tbody class='u-align-left u-table-body'>";
                        echo"<tr style='height: 44px;'>";
                        echo"<td class='u-border-3 u-border-grey-30 u-table-cell u-table-cell-6'>".$row['orderId']."</td>";
                        echo"<td class='u-border-3 u-border-grey-30 u-table-cell u-table-cell-7'>".$row['createdOn']."</td>";
                        echo"<td class='u-border-3 u-border-grey-30 u-table-cell u-table-cell-8'>".$row['phoneNum']."</td>";
                        echo"<td class='u-border-3 u-border-grey-30 u-table-cell u-table-cell-9'> RM ".$row['totalPrice']."</td>";
                        if($row['stat'] == "Cancelled"){

                            echo"<td class='u-border-3 u-border-grey-30 u-palette-2-base u-table-cell u-text-black u-table-cell-20'>Cancelled</td>";
                        }else if($row['stat'] == "Paid"){
                            echo"<td class='u-border-3 u-border-grey-30 u-custom-color-1 u-table-cell u-text-black u-table-cell-15'>Paid</td>";
                        }else{
                            echo"<td class='u-border-3 u-border-grey-30 u-palette-3-base u-table-cell u-table-cell-10'>Pending Payment</td>";
                        }
                        echo"</tr>";
                        $x++;
                    }
                }else{
                    echo "<center>No Data</center>"; }
                ?>

                </tbody>
            </table>
        </div>
    </div>
</section>

</body></html>