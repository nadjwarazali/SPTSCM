<?php include('server.php') ?>
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

    <div class="w3-container" id="contact" style="padding-top: 150px; padding-right: 300px;  padding-left: 300px">
        <h1 class=" w3-xxxlarge w3-text-blue"><b>Login</b></h1>
        <hr style="width:50px;border:5px solid blue" class="w3-round">

        <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            <div class="w3-section">
                <label>Name</label>
                <input class="w3-input w3-border" type="text" name="username" required>
            </div>
            <div class="w3-section">
                <label>Password</label>
                <input class="w3-input w3-border" type="password" name="password" required>
            </div>
           

            <button type="submit" class="w3-button w3-block w3-padding-large w3-blue w3-margin-bottom"
                name="login_user">Login</button>
            <p>
                Register Now! <a href="register.php">Sign Up</a>
                <br>
                <a href="forgot_password_handler.php">Forgot Password? </a>
            </p>
        </form>
    </div>
</body>

</html>
