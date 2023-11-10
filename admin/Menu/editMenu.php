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
                 price = '".$_POST["price"]."',
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

<html>
<head>
<style>
#mainbody
{
	background-color: rgba(184, 184, 178, 1);
	padding: 40px ;
}
#tajuk
{
	font-size: 30px;
	font-family: Righteous;
	font-weight: bold;
	text-align: center;
}
table {
	border: 2px solid black;
	border-collapse: collapse;
	margin: auto;
	background-color:rgba(95, 94, 74, 1);
}
#label {
	text-align: right ;
}
</style>
</head>
<body>

<div id="#">
<form action="" method="POST" enctype="multipart/form-data">
     <div id="tajuk"><p>Update Menu Form</p></div>
<table cellpadding=10px>
<tr>
     <td style="width: 20px"></td>
	 <td></td>
	 <td></td>
	 <td style="width: 20px"></td>
</tr>
<tr>
     <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
</tr>
<tr>
     <td></td> 
     <td id="label">Menu ID :</td>
     <td><input type="text" name="id" size="35" 
	             value="<?php echo $row1['id']; ?>" disabled></td> 
     <td></td>
</tr>
<tr>
     <td></td>
	 <td id="label">Menu Name :</td>
	 <td><input type="text" name="foodName" size="35" 
	            value="<?php echo $row1['foodName']; ?>" required></td>
	 <td></td>
</tr>
<tr>
     <td></td>
	 <td id="label">Menu Description :</td>
	 <td><input type="text" name="info" size="35" 
	            value="<?php echo $row1['info']; ?>" required></td>
	 <td></td>
</tr>
<tr>
     <td></td>
     <td id="label">Price :</td>
	 <td><input type="text" name="price" 
	 value="<?php echo $row1['price']; ?>" required></td>
     <td></td>
</tr>
<tr>
     <td></td>
	 <td id="label">Availability :</td>
	 <td><input type="text" name="available"
	             value="<?php echo $row1['available']; ?>" required></td>
	 <td></td>
</tr>
<tr>
     <td></td>
	 <td id="label">Menu Picture :</td>
	 <td align="right"><input type="file" name="picture" 
	                           accept="image/*"></td>
     <td></td>
</tr>
<tr>
     <td></td>
	 <td></td>
	 <td  id="label"><input type="submit" name="edit" value="UPDATE"></td>
	 <td></td>
</tr>
<tr>
     <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
</tr>
<tr>
     <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
</tr>
</table>

</form>
</div>
</body>
</html>
