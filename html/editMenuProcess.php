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
                   window.location.href="MenuList.php";</script>';
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
                 price = '".$_POST['price']."',
                 available = '".$_POST["available"]."'
             WHERE id = '$id'";
			 
     if (mysqli_query($con, $sql)) { 
             echo '<script>alert("Update Sucessful!");
                   window.location.href="MenuList.php";</script>';
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