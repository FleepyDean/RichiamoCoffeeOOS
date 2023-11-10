<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
session_start();

//sambungan ke db
include ('db.php') ;

$fName = $_POST['fName'] ;
$lName = $_POST ['lName'] ;
$email = $_POST ['email'] ;
$phoneNum = $_POST['phoneNum'] ;
$confirmPwd = $_POST['confirmPwd'];
$pwd = md5($_POST ['pwd']) ;


$check = "SELECT phoneNum FROM customer WHERE phoneNum = '$phoneNum'"; 
$cEmail = "SELECT email FROM customer WHERE email = '$email'"; ;
$result = mysqli_query($con, $check) or die (mysqli_error($con));
$result2 = mysqli_query($con, $cEmail) or die (mysqli_error($con));

// 1-cust. 2-staff. 3-admin
if (mysqli_num_rows($result) > 0 || mysqli_num_rows($result2) > 0)
{
    echo '<script>
    alert("Phone Number or Email Already Exist! Please Use Another Number or Email") ;
    window.location.href="../signup/registerPage.php";</script>';
    //../signup/registerPage.php
}
else
{
    $otp = rand(100000, 999999);
    $mysql = "INSERT INTO customer(phoneNum, fName, lName, email, pwd, id, stat, otp) VALUES ('$phoneNum', '$fName', '$lName', '$email', '$pwd', 1, 0, '$otp')"; ; 
    
    if (mysqli_query($con, $mysql)) 
    {
       
        
        $_SESSION['otp'] = $otp;
        $_SESSION['mail'] = $email;
        $mail =  new PHPMailer;

        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->Port=587;
        $mail->SMTPSecure='tls';
        $mail->SMTPAuth=true;
        $mail->Username='richiamocoffee2023@gmail.com';
        $mail->Password='nsmzhlanmlcnubzz';
        //$mail->SMTPDebug = 2;  // Enable verbose debugging
        //$mail->Debugoutput = 'html';  // Display debugging output in HTML format

        
        $mail->setFrom('richiamocoffee2023@gmail.com');
        $mail->addAddress($_POST['email']);

        $mail->isHTML(true);
        $mail->Subject="Your verification code";
        $mail->Body="<p>Dear user,</p><h3>Your verify OTP code is $otp</h3><br><br><p>With regards,</p><br><br><b>Richiamo Coffee Team</b>";
        $mail->send(); 

        $mysql = "INSERT INTO customer(otp) VALUES ('$otp')" ; 

        if(!$mail->send()){
            ?>
                <script>
                    alert("<?php echo "Register Failed, Invalid Email "?>");
                </script>
            <?php
        }else{
            ?>
            <script>
    alert("Register Successfully, OTP sent to <?php echo $email; ?>");
    window.location.replace("../html/verification.php?phoneNum=<?php echo $phoneNum; ?>");
</script>

            <?php
        }
       
    }
    else
    {
        echo "error ; " . mysqli_error($con);
    }
}

// Close connection
mysqli_close($con);
?>
