<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Edit Menu</title>
    <link rel="stylesheet" href="../css/RCOOS.css" media="screen">
<link rel="stylesheet" href="../css/editStaff.css" media="screen">
    <script class="u-script" type="text/javascript" src="../css/RCOOS.css" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/RCOOS.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.4.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "RCOOS"
}</script>

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="editStaff">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../element/sidebar/css/style.css"></head>

  <body class="u-body u-xl-mode" data-lang="en">
  <section class="u-clearfix u-section-1" id="sec-db78">
      <div class="u-white u-container-align-center u-container-style u-group u-shape-rectangle u-group-1">
          <a href="dashboard.php" class="u-border-none u-btn u-btn-round u-button-style u-grey-25 u-hover-grey-5 u-radius-10 u-btn-15" >Back</a>
      </div>

      <a href="addMenu.php" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-4 u-hover-custom-color-5 u-radius-20 u-btn-9">Add Menu</a>
      <h1 class="u-text u-text-default u-text-1">Menu</h1>
      <div class="u-align-center u-table u-table-responsive u-table-1">
        <table class="u-table-entity">
          <colgroup>
          <col width="12.8%">
            <col width="35.7%">
            <col width="12.6%">
            <col width="10.9%">
            <col width="13%">
            <col width="15%">
          </colgroup>
          <?php
   include('db.php');
   $query = "SELECT * FROM menu" ;
   $mysql = $query ;
   $result = mysqli_query($con, $mysql) or die(mysqli_error($con));

   if (mysqli_num_rows($result) > 0)
{
    echo"<thead class='u-black u-table-header u-table-header-1'>";
          echo"<tr style='height: 63px;'>";
            echo"<th class='u-border-1 u-border-black u-table-cell'>Product ID</th>";
              echo"<th class='u-border-1 u-border-black u-table-cell'>Product Name</th>";
              echo"<th class='u-border-1 u-border-black u-table-cell'>Price</th>";
              echo"<th class='u-border-1 u-border-black u-table-cell'>Availability</th>";
              echo"<th class='u-border-1 u-border-black u-table-cell'>Edit</th>";
              echo"<th class='u-border-1 u-border-black u-table-cell'>Delete</th>";
              echo"</tr>";
            echo"</thead>";

            while($row = mysqli_fetch_assoc($result))
	{
	$img="<img src=".$row['picture'].">";
          echo"<tbody class='u-table-body'>";
          echo"<tr style='height: 80px;'>";
            echo"<td class='u-border-1 u-border-grey-30 u-table-cell'>".$row['id']."</td>";
              echo"<td class='u-border-1 u-border-grey-30 u-table-cell'>".$row['foodName']."</td>";
              echo"<td class='u-border-1 u-border-grey-30 u-table-cell'>RM ".$row['price']."</td>";
              echo"<td class='u-border-1 u-border-grey-30 u-table-cell'>".$row['available']."</td>";
              echo"<td class='u-border-1 u-border-grey-30 u-table-cell'><a class='u-border-none u-btn u-btn-round u-button-style u-hover-palette-3-light-2 u-palette-3-base u-radius-20 u-btn-9' href='editMenuForm.php?id=".$row['id']."'>Edit</a></td>";
              echo"<td class='u-border-1 u-border-grey-30 u-table-cell'><a class='u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-hover-palette-2-light-2 u-radius-20 u-btn-10' href='deleteMenu.php?id=".$row['id']."' >Delete</a></td>";
              echo"</tr>";
            echo"</tbody>";
    }
        echo"</table>";
        echo"</div>";
        //echo"<a href="#" class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-3-light-2 u-palette-3-base u-radius-20 u-btn-10" rel="nofollow">Edit</a>
        //echo"<a href="#" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-hover-palette-2-light-2 u-radius-20 u-btn-11" rel="nofollow">Delete</a>
        echo"</section>";
        echo"<section class='u-align-center u-clearfix u-section-2' id='sec-1b68'>";
        echo"<div class='u-clearfix u-sheet u-sheet-1'></div>";
        echo"</section>";

}else{
    echo "<center>No Data</center>"; }
?>


</body></html>