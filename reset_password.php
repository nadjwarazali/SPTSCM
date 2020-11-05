<?php


        
error_reporting(0);

include('config.php');
if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) 
&& ($_GET["action"]=="reset") && !isset($_POST["action"])){
  $key = $_GET["key"];
  $email = $_GET["email"];
  $curDate = date("Y-m-d H:i:s");
  $query = mysqli_query($mysqli,
  "SELECT * FROM `password_reset_temp` WHERE `key`='".$key."' and `email`='".$email."';"
  );
  $row = mysqli_num_rows($query);
  if ($row==""){
  $error .= '<h2>Invalid Link</h2>
<p>The link is invalid/expired. Either you did not copy the correct link
from the email, or you have already used the key in which case it is 
deactivated.</p>
<p><a href="http://localhost/sistempejabattanah/forgot_password_handler.php">
Click here</a> to reset password.</p>';
 }else{
  $row = mysqli_fetch_assoc($query);
  $expDate = $row['expDate'];
  if ($expDate >= $curDate){
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
        <h1 class=" w3-xxxlarge w3-text-blue"><b>Reset Password</b></h1>
        <hr style="width:50px;border:5px solid blue" class="w3-round">

        <form method="post" action="" name="update">
        <input type="hidden" name="action" value="update" />
            <div class="w3-section">
                <label>Enter New Password:</label>
                <input class="w3-input w3-border" type="password" name="pass1" maxlength="15" required>
            </div>
            <div class="w3-section">
                <label>Re-Enter New Password:</label>
                <input class="w3-input w3-border" type="password" name="pass2" maxlength="15" required>
            </div>
            <div class="w3-section">
                <input type="hidden" name="email" value="<?php echo $email;?>" />
            </div>


            <button type="submit" class="w3-button w3-block w3-padding-large w3-blue w3-margin-bottom"
                value="Reset Password">Reset Password</button>
        </form>
  
<?php
}else{
$error .= "<h2>Link Expired</h2>
<p>The link is expired. You are trying to use the expired link which 
as valid only 24 hours (1 days after request).<br /><br /></p>";
            }
      }
if($error!=""){
  echo "<div class='error'>".$error."</div><br />";
  } 
} // isset email key validate end
 
 
if(isset($_POST["email"]) && isset($_POST["action"]) &&
 ($_POST["action"]=="update")){
$error="";
$pass1 = mysqli_real_escape_string($mysqli,$_POST["pass1"]);
$pass2 = mysqli_real_escape_string($mysqli,$_POST["pass2"]);
$email = $_POST["email"];
$curDate = date("Y-m-d H:i:s");
if ($pass1!=$pass2){
$error.= "<p>Password do not match, both password should be same.<br /><br /></p>";
  }
  if($error!=""){
echo "<div class='error'>".$error."</div><br />";
}else{
$pass1 = md5($pass1);
mysqli_query($mysqli,
"UPDATE `usersid` SET `password`='".$pass1."' WHERE `email`='".$email."';"
);
 
mysqli_query($mysqli,"DELETE FROM `password_reset_temp` WHERE `email`='".$email."';");
 
echo '<div class="error"><p>Congratulations! Your password has been updated successfully.</p>
<p><a href="http://localhost/sistempejabattanah/login.php">
Click here</a> to Login.</p></div><br />';
   } 
}
?>