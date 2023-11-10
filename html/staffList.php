<?php
include('db.php');
session_start(); // Start the session if you haven't already

$phoneNum = $_SESSION['phoneNum']; // Fix the typo here

$sql = "SELECT id FROM customer WHERE phoneNum = '$phoneNum'";
$result = mysqli_query($con, $sql);

if ($result) {
    // Fetch the ID value
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];

    // Use the $id variable as needed
    //echo 'ID: ' . $id;
} else {
    // Handle query execution error
    echo 'Error: ' . mysqli_error($con);
}


if ($id == 2) {
    echo '<script>alert("You are not allowed to access this page!");';
    echo 'window.location.href="../html/dashboard.php";</script>';
} else {
    echo 'Debug: $id is ' . $id . ', which is not equal to 2.';
}



?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>editStaff</title>
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
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en">
  <section class="u-clearfix u-section-1" id="sec-db78">
      <a href="#" class="u-black u-border-none u-btn u-btn-round u-button-style u-hover-grey-25 u-radius-20 u-btn-1" rel="nofollow">#</a>
      <div class="u-white u-container-align-center u-container-style u-group u-shape-rectangle u-group-1">
          <a href="dashboard.php" class="u-border-none u-btn u-btn-round u-button-style u-grey-25 u-hover-grey-5 u-radius-10 u-btn-15" >Back</a>
      </div>
      <a href="addStaff.php" class="u-border-none u-btn u-btn-round u-button-style u-custom-colr-4 u-hover-custom-color-5 u-radius-20 u-btn-9">Add Staff</a>
      <h1 class="u-text u-text-default u-text-1">Staff</h1>
      <div class="u-align-center u-table u-table-responsive u-table-1">
        <table class="u-table-entity">
          <colgroup>
            <col width="5.2%">
            <col width="24.6%">
            <col width="22.5%">
            <col width="19.7%">
            <col width="13.2%">
            <col width="15%">
          </colgroup>
          <?php
          $x = 1;
            include('db.php');
            $query = "SELECT * FROM customer WHERE id=2" ;
            $mysql = $query ;
            $result = mysqli_query($con, $mysql) or die(mysqli_error($con));

            if (mysqli_num_rows($result) > 0)
          {
            echo"<thead class='u-black u-table-header u-table-header-1'>";
            echo"<tr style='height: 63px;'>";
            echo" <th class='u-border-1 u-border-black u-table-cell'>No</th>";
            echo"<th class='u-border-1 u-border-black u-table-cell'>Name</th>";
            echo"<th class='u-border-1 u-border-black u-table-cell'>Phone Number</th>";
            echo"<th class='u-border-1 u-border-black u-table-cell'>Email</th>";
            echo"<th class='u-border-1 u-border-black u-table-cell'>Edit</th>";
            echo"<th class='u-border-1 u-border-black u-table-cell'>Delete</th>";
            echo"</tr>";
            echo"</thead>";

          while($row = mysqli_fetch_assoc($result))
            {
                echo"<tbody class='u-table-body'>";
                echo"<tr style='height: 80px;'>";
                echo"<td class='u-border-1 u-border-grey-30 u-table-cell'>".$x."</td>";
                echo"<td class='u-border-1 u-border-grey-30 u-table-cell'>".$row['fName']." ".$row['lName']."</td>";
                echo"<td class='u-border-1 u-border-grey-30 u-table-cell'>".$row['phoneNum']."</td>";
                echo"<td class='u-border-1 u-border-grey-30 u-table-cell'>".$row['email']."</td>";
                echo"<td class='u-border-1 u-border-grey-30 u-table-cell'><a href='editStaffForm.php?phoneNum=".$row['phoneNum']."' class='u-border-none u-btn u-btn-round u-button-style u-hover-palette-3-light-2 u-palette-3-base u-radius-20 u-btn-10'>Edit</a></td>";
                echo"<td class='u-border-1 u-border-grey-30 u-table-cell'><a href='deleteStaff.php?phoneNum=".$row['phoneNum']."' class='u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-hover-palette-2-light-2 u-radius-20 u-btn-10'>Delete</a></td>";
                echo"</tr>";
                echo"</tbody>";
          $x++;
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