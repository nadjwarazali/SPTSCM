<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>SISTEM PERGERAKAN FAIL</title>
  <style>
    body {
  
  background-image: url("iplain.jpg");
}
  </style>
  
  <link rel="stylesheet" type="text/css" href="style1.css"> 
</head>
<body>
  <div class="header">
  	<h2>SISTEM PERGERAKAN FAIL</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Nama Pengguna</label>
  		<input type="text" name="username" >
  	
  		<label>Kata Laluan</label>
  		<input type="password" name="password">
  	
    <p></p>
  		<button type="submit" class="btn" name="login_user">Log Masuk</button>
  	</div>
  	<p>
  		Tiada Akaun? <a href="register.php">Daftar Akaun</a>
  	</p>
  </form>
</body>
</html>