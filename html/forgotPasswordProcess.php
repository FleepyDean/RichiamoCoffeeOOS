<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
session_start();

//sambungan ke db
include ('db.php') ;

$email = $_POST ['email'] ;
$phoneNum = $_POST ['phoneNum'] ;


if (isset($_POST["submit"])) {
    $otp = rand(100000, 999999);
    $mysql = "UPDATE customer
    SET otp = '$otp'
    WHERE phoneNum = '$phoneNum'"; 
    
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
        $mail->Subject="Your password reset verification code";
        $mail->Body="<p>Dear user,</p><h3>Your password reset OTP code is $otp</h3><br><br><p>With regards,</p><br><b>Richiamo Coffee Team</b>";
        $mail->send(); 


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
            window.location.replace("../html/pwdverify.php?phoneNum=<?php echo $phoneNum; ?>");
        </script>

            <?php
        }
    }
    }
    else
    {
        echo "error ; " . mysqli_error($con);
    }


// Close connection
mysqli_close($con);
?>

