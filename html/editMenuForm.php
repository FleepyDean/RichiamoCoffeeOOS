<?php 
//Sambungan ke DB 
include ('db.php');

// dapatkan idbilik 
   $id = $_GET['id'];

### jika user klik button KEMASKINI,update record dalam jadual############
if(isset($_POST['edit']))
{
    //jika user ubah gambar, update data2 termasuk gambar
    if (!empty($_FILES['picture']['name']))   
    {
        $picture = ('images2/'.$_FILES['picture']['name']); //path gambar
		
        //pastikan jenis file gambar yg di upload
        if (preg_match("!image!", $_FILES['picture']['type']))
        {
            //masukkan gambar dalam folder images
            copy($_FILES['picture']['tmp_name'], $picture);
			
             $sql = "UPDATE menu SET info = '".$_POST["info"]."',
                                        foodName = '".$_POST["foodName"]."',
                                        price = '".$_POST["price"]."',
                                        available = '".$_POST["available"]."',
                                        picture = '$picture' 
                                   WHERE id = '$id'";
					
            if (mysqli_query($con, $sql))
            {
             echo '<script>alert("Update Sucessful!");
                   window.location.href="EditMenu.php";</script>';
            } else{
                echo "Error ; " . mysqli_error($con);}
         } else{
             echo '<script>alert("Please Select GIF/JPG/PNG Pictures Only!");
               window.location.href="editMenu.php?id='.$id.'";</script>';
         }
     } else{
     //jika user tak ubah gambar,update data2 Lain
     $sql = "UPDATE menu
             SET foodName = '".$_POST["foodName"]."',
                 info = '".$_POST["info"]."',
                 price = '".$_POST["price"]."',
                 available = '".$_POST["available"]."'
             WHERE id = '$id'";
			 
     if (mysqli_query($con, $sql)) { 
             echo '<script>alert("Update Sucessful!");
                   window.location.href="EditMenu.php";</script>';
     } else {
         echo "Error ; " . mysqli_error($con); }
		 
     }
}
###########################################proses updaate tamat######################
	
//dapatkan data bilik dari Jadual untuk display dalam textfield 
$query = "SELECT * FROM menu 
          WHERE id = '$id'";
		  
         $result = mysqli_query($con, $query) or die(mysqli_error($con));
         $row1 = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>editMenuForm</title>
    <link rel="stylesheet" href="../css/RCOOS.css" media="screen">
<link rel="stylesheet" href="../css/editMenuForm.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
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
    <meta property="og:title" content="editMenuForm">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-section-1" id="sec-8f24">
      <div class="u-white u-container-align-center u-container-style u-group u-shape-rectangle u-group-1">
      </div>
      <h1 class="u-text u-text-default u-text-1">Edit Menu</h1>
      <div class="u-border-2 u-border-grey-75 u-container-style u-group u-radius-41 u-shape-round u-white u-group-2">
        <div class="u-container-layout u-container-layout-2">
         <img src="<?php echo $row1['picture']; ?>" class="u-image u-image-contain u-image-round u-preserve-proportions u-radius-50 u-image-2" data-image-width="600" data-image-height="600">

          <div class="u-form u-form-1">
            <form action="" method="POST"  enctype="multipart/form-data" >

            <div class="u-form-group u-form-name">
                <label class="u-label">ProductID</label>
                <input type="text" value="<?php echo $row1['id']; ?>"  class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" disabled>
              </div>
              <div class="u-form-group u-form-name">
                <label class="u-label">Product Name</label>
                <input type="text"name="foodName" value="<?php echo $row1['foodName']; ?>"  class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
              </div>
              <div class="u-form-email u-form-group">
                <label  class="u-label">Price</label>
                <input type="text" value="<?php echo $row1['price']; ?>"  name="price" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
              </div>
              <div class="u-form-group u-form-group-3">
                <label class="u-label">Availability</label>
                <input type="text" name="available" value="<?php echo $row1['available']; ?>"  class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
              </div>
              <div class="u-form-group u-form-message">
                <label for="message-05ef" class="u-label">Description</label>
                <input type="text" name="info"  value="<?php echo $row1['info']; ?>" rows="4" cols="50" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
              </div>
              <div class="u-form-email u-form-group">
                <label  class="u-label">Category</label>
                <input type="text" value="<?php echo $row1['kategori']; ?>"  name="kategori" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
              </div>
              <div> 
              <input type="file" name="picture" accept="image/*">
            </div>


             <input type="submit" name="edit" value="SAVE" class='u-border-none u-btn u-btn-round u-button-style u-blue-25 u-hover-blue-5 u-radius-10 u-btn-15'>
                <a href="EditMenu.php" class="u-border-none u-btn u-btn-round u-button-style u-grey-25 u-hover-grey-5 u-radius-10 u-btn-15" >Back</a>


            </form>
          </div>
        </div>
      </div>
    </section>
    

</body></html>

