<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Add Menu</title>
    <link rel="stylesheet" href="../css/RCOOS.css" media="screen">
<link rel="stylesheet" href="../css/addMenu.css" media="screen">
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
    <meta property="og:title" content="addMenu">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-valign-middle u-section-1" id="sec-8f24">
      <div class="u-white u-container-style u-group u-shape-rectangle u-group-1">
      </div>
      <h1 class="u-text u-text-default u-text-1">Add Menu</h1>
      <div class="u-border-2 u-border-grey-75 u-container-style u-group u-radius-41 u-shape-round u-white u-group-2">
        <div class="u-container-layout u-container-layout-2">
          <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-2" src="../images/Unknown.png"  alt="" data-image-width="245" data-image-height="260">
          <div class="u-form u-form-1">
            
            <form action="menuAddProcess.php" method="POST" enctype="multipart/form-data">
                <div class="u-form-group u-form-name">
                    <label for="id" class="u-label">Menu ID</label>
                    <input type="text"  name="id" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                  </div>  
                <div class="u-form-group u-form-name">
                    <label for="foodName" class="u-label">Menu Name</label>
                    <input type="text" name="foodName" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                  </div> 
                  <div class="u-form-email u-form-group">
                    <label for="price" class="u-label">Price</label>
                    <input type="text" name="price" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                  </div>
                  <div class="u-form-group u-form-message">
                    <label for="info" class="u-label">Description</label>
                    <textarea rows="4" cols="50" name="info" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="info"></textarea>
                  </div>

                  <div class="u-form-group u-form-name">
                    <label for="kategori" class="u-label">Category</label>
                    <select name="kategori" id="kategori">
                      <option value="Hot">Hot</option>
                      <option value="Cold">Cold</option>
                      <option value="Blended">Ice Blended</option>
                      <option value="Smoothie">Smoothie</option>
                      <option value="Pasta">Pasta</option>
                      <option value="Nasi">Nasi</option>
                      <option value="Side">Sides & Snacks</option>
                    </select>
                  </div> 

                  <div>
                    <input type="file" name="picture" accept="image/*"required><br>
                  </div>
                  <div>
                      <input type="submit" name="add" value="ADD" class='u-border-none u-btn u-btn-round u-button-style u-blue-25 u-hover-blue-5 u-radius-10 u-btn-15'>
                      <a href="EditMenu.php" class="u-border-none u-btn u-btn-round u-button-style u-grey-25 u-hover-grey-5 u-radius-10 u-btn-15" >Back</a>
                  </div>
                  
            </form>
          </div>
        </div>
      </div>
    </section>
    

  
</body></html>