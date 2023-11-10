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
	 if (mysqli_num_rows($result) < 1)
	 
	 {
		echo '<script>alert("Wrong Password!! Please Try Again!!");
         window.location.href="index.php";</script>';
	 }
	 else if ($row['stat'] == 0){
		
		echo '<script>alert("Email Has Yet Been Verified!! Please Verify Your Email First!!");
		window.location.href="../html/verification.php";</script>';
		}else {

			$_SESSION['phoneNum'] = $row['phoneNum']; //simpan data session 
			$fName = $row['fName'];
			$id = $row['id'];
			
			//papar popup mesej jika berjaya 
		   
   
			if ($id == 1){
				   echo '<script>
				   alert("Welcome Customer '.$fName.'");
				   window.location.href="../html/CustomerViewMenu.php";</script>';
			} else if ($id == 2){
			   echo '<script>
			   alert("Welcome Staff '.$fName.'");
			   window.location.href="../html/dashboard.php";</script>';
			} else if ($id == 3) {
			   echo '<script>
			   alert("Welcome Admin '.$fName.'");
			   window.location.href="../html/dashboard.php";</script>';
			}


	 }
	}

     
//close connection db
mysqli_close($con)
?>
