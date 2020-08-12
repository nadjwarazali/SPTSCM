<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>

  <title>Daftar Akaun</title>
  <style>
    body {
  
  background-image: url("iplain.jpg");
}
  </style>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="header">
  	<h2>Daftar Akaun</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Nama Pengguna</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Kata Laluan</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Sahkan Kata Laluan</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Daftar</button>
  	</div>
  	<p>
  		Sudah Daftar? <a href="login.php">Daftar Masuk</a>
  	</p>
  </form>
</body>
</html>