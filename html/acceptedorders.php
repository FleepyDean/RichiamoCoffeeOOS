

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>orderDetails</title>
    <link rel="stylesheet" href="../css/RCOOS.css" media="screen">
<link rel="stylesheet" href="orderDetails.css" media="screen">
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
    <meta property="og:title" content="orderDetails">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>
  <body class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-section-1" id="sec-3b29">
      <div class="u-clearfix u-sheet u-sheet-1">
     
        <h1 class="u-text u-text-default u-text-1">Accepted Orders</h1>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity">
            <colgroup>
              <col width="5.3%">
              <col width="13%">
              <col width="16%">
              <col width="20%">
              <col width="16.2%">
              <col width="17.5%">
            </colgroup>

            <?php
          $x = 1;
            include('db.php');
            $query = "SELECT * FROM acceptedorders" ;
            $mysql = $query ;
            $result = mysqli_query($con, $mysql) or die(mysqli_error($con));


            if (mysqli_num_rows($result) > 0)
          {
            echo"<thead class='u-black u-table-header u-table-header-1'>";
            echo"<tr style='height: 41px;'>";
            echo"<th class='u-border-1 u-border-black u-table-cell'>No.</th>";
            echo"<th class='u-border-1 u-border-black u-table-cell'>Order Number</th>";
            echo"<th class='u-border-1 u-border-black u-table-cell'>Order Time</th>";
            echo"<th class='u-border-1 u-border-black u-table-cell'>Customer Phone Number</th>";
            echo"<th class='u-border-1 u-border-black u-table-cell'>Details</th>";
            echo"<th class='u-border-1 u-border-black u-table-cell'>Delete</th>";
            echo"</tr>";
            echo"</thead>";

            while ($row = mysqli_fetch_array($result)) {
            echo"<tbody class='u-table-body'>";
            echo"<tr style='height: 75px;'>";
            echo"<td class='u-border-1 u-border-grey-30 u-table-cell'>$x</td>";
            echo"<td class='u-border-1 u-border-grey-30 u-table-cell'>".$row['orderId']."</td>";
            echo"<td class='u-border-1 u-border-grey-30 u-table-cell'>".$row['createdOn']."</td>";
            echo"<td class='u-border-1 u-border-grey-30 u-table-cell'>".$row['phoneNum']."</td>";
            echo"<td class='u-border-1 u-border-grey-30 u-table-cell'><a href='detailsOrder.php?orderId=".$row['orderId']."'' class='u-border-none u-btn u-btn-round u-button-style u-hover-palette-3-light-2 u-palette-3-base u-radius-50 u-btn-1'>Details</a></td>";
            echo"<td class='u-border-1 u-border-grey-30 u-table-cell'><a href='deleteOrder.php?orderId=".$row['orderId']."'' class='u-border-none u-btn u-btn-round u-button-style u-hover-palette-2-light-2 u-palette-2-base u-radius-50 u-text-black u-btn-3'>Delete</a></td>";
            echo"</tr>";
            echo"</tbody>";
            $x++;
        }
    }else{
        echo "<center>No Data</center>"; }
            ?>
          </table>
        </div>
        <a href="orderDetails.php" class="u-border-none u-btn u-btn-round u-button-style u-grey-25 u-hover-grey-5 u-radius-50 u-btn-2">Back</a>
      </div>
    </section>
    <br><br>

  
</body></html>