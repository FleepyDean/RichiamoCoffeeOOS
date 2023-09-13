 <?php 
//start session
session_start();

//Sambungan ke DB
include ('db.php');

//Dapatkan data dari borong Login 
$phoneNum = $_POST['phoneNum']; 
$pwd = md5($_POST['pwd']); //encrypt pwd yg user masukkan



//jika user klik button Log masuk
if (isset($_POST['loginBtn']))
{
	 //semak emel dan kata laluan dalam jadual
     $mysql = "SELECT * FROM customer WHERE phoneNum = '$phoneNum' AND pwd ='$pwd'";
     $result = mysqli_query($con, $mysql);
     $row = mysqli_fetch_array($result);

     //jika ADA data emel dan kata laluan yang sama
     if (mysqli_num_rows($result) > 0)
	 {
		 //dapatkan nama dan kunci primer(emel) pengguna
         $_SESSION['phoneNum'] = $row['phoneNum']; //simpan data session 
		 $fName = $row['fName'];
		 $id = $row['id'];
		 
		 //papar popup mesej jika berjaya 
        

		 if ($id == 1){
				echo '<script>
				alert("Welcome '.$fName.'");
				window.location.href="../html/aboutUs.html";</script>';
		 } else if ($id == 2){
			echo '<script>
			alert("Welcome '.$fName.'");
			window.location.href="../html/dashboard.html";</script>';
		 } else if ($id == 3) {
			echo '<script>
			alert("Welcome '.$fName.'");
			window.location.href="../html/dashboard.html";</script>';
		 }
	 }
	 else //jika TIDAK ADA data emel dan kata laluan yang sama
	 {
		 echo '<script>alert("Wrong Password!!");
         window.location.href="index.php";</script>';
         //kembali semula ke borang Login
	 }
}
//close connection db
mysqli_close($con)
?>
