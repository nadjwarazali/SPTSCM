<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

include('config.php');

error_reporting(0);

if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email) {
   $error .="<p>Invalid email address please type a valid email address!</p>";
   }else{
   $sel_query = "SELECT * FROM `usersid` WHERE email='".$email."'";
   $results = mysqli_query($mysqli, $sel_query);
   $row = mysqli_num_rows($results);
   if ($row==""){
   $error .= "<p>No user is registered with this email address!</p>";
   }
  }
   if($error != ""){
   echo "<div class='error'>".$error."</div>
   <br /><a href='javascript:history.go(-1)'>Go Back</a>";
   }else{
   $expFormat = mktime(
   date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
   );
   $expDate = date("Y-m-d H:i:s",$expFormat);
   $key = md5(2418*2+$email);
   $addKey = substr(md5(uniqid(rand(),1)),3,10);
   $key = $key . $addKey;
   
// Insert Temp Table
  mysqli_query($mysqli,
  "INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`)
  VALUES ('".$email."', '".$key."', '".$expDate."');");
   
    $output='<p>Dear user,</p>';
    $output.='<p>Please click on the following link to reset your password.</p>';
    $output.='<p>-------------------------------------------------------------</p>';
    $output.='<p><a href="http://localhost/sistempejabattanah/reset_password.php?key='.$key.'&email='.$email.'&action=reset" target="_blank">
    reset_password.php
    ?key='.$key.'&email='.$email.'&action=reset</a></p>'; 
    $output.='<p>-------------------------------------------------------------</p>';
    $output.='<p>Please be sure to copy the entire link into your browser.
    The link will expire after 1 day for security reason.</p>';
    $output.='<p>If you did not request this forgotten password email, no action 
    is needed, your password will not be reset. However, you may want to log into 
    your account and change your security password as someone may have guessed it.</p>';   
    $output.='<p>Thanks,</p>';
    $output.='<p>SPT Team</p>';
    $body = $output; 
    $subject = "Sistem Pejabat Tanah Password Recovery";
     
    $email_to = $email;
    $fromserver = "noreply@yourwebsite.com"; 

  
$mail = new PHPMailer();
 try {
    //Server settings
    //$mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'sistempejabattanah.unikl@gmail.com';                     // SMTP username
    $mail->Password   = 'sistempejabattanah123';                // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('noreply@yourwebsite.com', 'Sistem Pejabat Tanah');
    $mail->addAddress($email_to, 'User');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    }
}else{
?>


  <!DOCTYPE html>
<html>

<head>
    <title>SISTEM PERGERAKAN FAIL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
    body {

        background-image: url("iplain.jpg");
    }

    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: "Poppins", sans-serif
    }

    body {
        font-size: 16px;
    }

    .w3-half img {
        margin-bottom: -6px;
        margin-top: 16px;
        opacity: 0.8;
        cursor: pointer
    }

    .w3-half img:hover {
        opacity: 1
    }
    </style>

    <link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
    <div class="w3-container" id="contact"
        style="padding-top: 90px; padding-right: 300px; padding-bottom: px; padding-left: 300px">
        <h1 class=" w3-xxxlarge w3-text-blue"><b>Forgot Password</b></h1>
        <hr style="width:50px;border:5px solid blue" class="w3-round">

        <form method="post" action="" name="reset">
        <input type="hidden" name="action" value="update" />
            <div class="w3-section">
                <label>Enter Your Email Address:</label>
                <input class="w3-input w3-border" type="email" name="email" placeholder="username@email.com"/>
            </div>
           

            <button type="submit" class="w3-button w3-block w3-padding-large w3-blue w3-margin-bottom"
                value="Reset Password">Reset Password</button>
        </form>

<?php

}

?>