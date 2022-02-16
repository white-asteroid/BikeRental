<?php
include 'includes\config.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "bikerental";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          // die('Could not Connect MySql Server:' .mysql_error());
        }

if(isset($_POST['passwordreset']))
{
    // include "includes\config.php";
    echo "sending.......";

    $emailId = $_POST['email'];
 
    $result = mysqli_query($conn,"SELECT * FROM users WHERE EmailId='" . $emailId . "'");
 
    $row= mysqli_fetch_array($result);
 
  if($row)
  {
     
     $token = rand(1000,9999);
 
    //  $expFormat = mktime(
    //  date("H")+1, date("i"), date("s"), date("m") ,date("d"), date("Y")
    //  );
 
    // $expDate = date("Y-m-d H:i:s",$expFormat);
 
    // $update = mysqli_query($conn,"UPDATE users set  password='" . $password . "' WHERE email='" . $emailId . "'");
 
    // $link = "<a href='localhost/bikerental/resetpassword.php?key=".$emailId."&token=".$token."'>Click To Reset password</a>";
 
    // require_once('vendor\autoload.php');
    // require 'vendor\phpmailer\phpmailer\src\Exception.php';
    // require 'vendor\phpmailer\phpmailer\src\PHPMailer.php';
    // require 'vendor\phpmailer\phpmailer\src\SMTP.php';
    // require 'vendor\phpmailer\phpmailer\get_oauth_token.php';
    $mail = new PHPMailer;
 
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "shivamgarg0103";
    // GMAIL password
    $mail->Password = "mnbvcxz56@";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='shivamgarg0103@gmail.com';
    $mail->FromName='Shivam Garg';
    $mail->AddAddress($emailId, 'shivam garg');
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Your OTP is  '.$token.'';
    if($mail->Send())
    {
      $_SESSION['token'] = array($token,$emailId, time());
      echo $_SESSION['token'][0];
      echo $_SESSION['token'][1];
      echo $_SESSION['token'][2];
      if (isset($_SESSION['token'][0])) {
        echo "session set";
    }
    else {echo "session not set";
    }
      echo "Check Your Email and Click on the link sent to your email";
      // header("location:updatepassword.php?email=".$emailId);
      // header("location:otp.php");
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }else{
    echo "Invalid Email Address. Go back";
  }
}
else{
  echo "problem";
}
header('location:otp.php');
?>