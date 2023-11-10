<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>ViewFeedbackStaff</title>
    <link rel="stylesheet" href="../css/RCOOS.css" media="screen">
<link rel="stylesheet" href="../css/ViewFeedbackStaff.css" media="screen">
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
    <meta property="og:title" content="ViewFeedbackStaff">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-section-1" id="sec-8f24">
    <div class="u-white u-container-align-center u-container-style u-group u-shape-rectangle u-group-1">
        <div>
            <a href="dashboard.php" class="u-border-none u-btn u-btn-round u-button-style u-grey-25 u-hover-grey-5 u-radius-10 u-btn-15" >Back</a>
        </div>
      </div>
      <h1 class="u-text u-text-default u-text-1">View Feedback</h1>
      <div class="u-table u-table-responsive u-table-1">
        <table class="u-table-entity">
          <colgroup>
            <col width="5.5%">
            <col width="15.4%">
            <col width="16.8%">
            <col width="47.4%">
            <col width="14.9%">
          </colgroup>

          <?php
          $x = 1;
            include('db.php');
            $query = "SELECT * FROM feedback" ;
            $mysql = $query ;
            $result = mysqli_query($con, $mysql) or die(mysqli_error($con));

            if (mysqli_num_rows($result) > 0)
          {
            echo"<thead class='u-black u-table-header u-table-header-1'>";
            echo"<tr style='height: 34px;'>";
            echo"<th class='u-border-1 u-border-black u-table-cell'>ID</th>";
            echo"<th class='u-border-1 u-border-black u-table-cell'>Phone Number</th>";
            echo"<th class='u-border-1 u-border-black u-table-cell'>Date and Time</th>";
            echo"<th class='u-border-1 u-border-black u-table-cell'>Feedback</th>";
            echo"<th class='u-border-1 u-border-black u-table-cell'>Delete</th>";
            echo"</tr>";
            echo"</thead>";

            while($row = mysqli_fetch_assoc($result))
            {
            echo"<tbody class='u-table-body'>";
            echo"<tr style='height: 75px;'>";
            echo"<td class='u-border-1 u-border-grey-30 u-table-cell'>".$row['id']."</td>";
            echo"<td class='u-border-1 u-border-grey-30 u-table-cell'>".$row['phoneNum']."</td>";
            echo"<td class='u-border-1 u-border-grey-30 u-table-cell'>".$row['tarikh']."</td>";
            echo"<td class='u-border-1 u-border-grey-30 u-table-cell'>".$row['feedback']."</td>";
            echo"<td class='u-border-1 u-border-grey-30 u-table-cell'><a href='deleteFeedback.php?id=".$row['id']."' class='u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-hover-palette-2-light-2 u-radius-20 u-btn-10'>Delete</a></td>";
            echo"</tr>";
            echo"</tbody>";
            }
            echo"</table>";
            echo"</div>";
           // echo"<a href='#' class='u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-hover-palette-2-light-2 u-radius-20 u-btn-8'>Delete</a>";
            echo"</section>";
            
          }
          ?>

  
</body></html>