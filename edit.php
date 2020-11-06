<?php

include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$kp = mysqli_real_escape_string($mysqli, $_POST['kp']);
	$nosyarikat = mysqli_real_escape_string($mysqli, $_POST['nosyarikat']);	
	$alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);
	$plot = mysqli_real_escape_string($mysqli, $_POST['plot']);
	$mukim = mysqli_real_escape_string($mysqli, $_POST['mukim']);
	$nofile = mysqli_real_escape_string($mysqli, $_POST['nofile']);
	$tarikh = mysqli_real_escape_string($mysqli, $_POST['tarikh']);
	$resit = mysqli_real_escape_string($mysqli, $_POST['resit']);
	$status = mysqli_real_escape_string($mysqli, $_POST['status']);
	
	// check field yang kosong
	if(empty($name) || empty($kp) || empty($nosyarikat) || empty($alamat) || empty($plot) || empty($mukim) || empty($nofile) || empty($tarikh) || empty($resit) || empty($status)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($kp)) {
			echo "<font color='red'>kp field is empty.</font><br/>";
		}
		
		if(empty($nosyarikat)) {
			echo "<font color='red'>nosyarikat field is empty.</font><br/>";
		}

		if(empty($alamat)) {
			echo "<font color='red'>alamat field is empty.</font><br/>";
		}
		if(empty($plot)) {
			echo "<font color='red'>plot field is empty.</font><br/>";
		}
		if(empty($mukim)) {
			echo "<font color='red'>mukim field is empty.</font><br/>";
		}
		if(empty($nofile)) {
			echo "<font color='red'>nofile field is empty.</font><br/>";
		}
		if(empty($tarikh)) {
			echo "<font color='red'>tarikh field is empty.</font><br/>";
		}
		if(empty($resit)) {
			echo "<font color='red'>resit field is empty.</font><br/>";
		}
		if(empty($status)) {
			echo "<font color='red'>status field is empty.</font><br/>";
		}

	} else {	
		//update table
		$result = mysqli_query($mysqli, "UPDATE users SET name='$name',kp='$kp',nosyarikat='$nosyarikat',alamat='$alamat',plot='$plot', mukim='$mukim',nofile='$nofile',tarikh='$tarikh',resit='$resit',status='$status' WHERE id=$id");
		
		//ke index.php
		header("Location: index.php");
	}
}
?>
<?php

$id = $_GET['id'];


$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$kp = $res['kp'];
	$nosyarikat = $res['nosyarikat'];
	$alamat = $res['alamat'];
	$plot = $res['plot'];
	$mukim = $res['mukim'];
	$nofile = $res['nofile'];
	$tarikh = $res['tarikh'];
	$resit = $res['resit'];
	$status = $res['status'];

}
?>
<html>
<head>	
	<title>Edit Data</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="input.css">
<link rel="stylesheet" type="text/css" href="box.css">
<style>
body {
  
  background-image: url("iplain.jpg");
  
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>

<body>

	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="mainpage.php">Halaman Utama</a>
  <a href="index.php">Laporan</a>
  <a href="add.html">Pendaftaran Permohonan</a>
  <a href="search.php">Carian</a>
  <a href="#">Inventori</a>
  <a href="#">Cetakan</a>
  <a href="#">Konfigurasi</a>
  <a href="#">Log Keluar</a>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu </span>
	 <h2>Kemaskini Permohonan</h2>
	
	<form name="form1" method="post" action="edit.php">
<!--		<div class="input-group">-->
<!--		<div class="row">-->
<!--			<div class="column">-->
<!--				-->
<!--					<div class="card">	-->
<!--					<label>Nama</label>-->
<!--					<input type="text" name="name" value="<?php echo $name;?>">-->
<!--				-->
<!--				<label>Kad Pengenalan</label>-->
<!--					<input type="text" name="kp" value="<?php echo $kp;?>">-->
<!--				-->
<!--				<label>No Syarikat</label>-->
<!--					<input type="text" name="nosyarikat" value="<?php echo $nosyarikat;?>">-->
<!--				-->
<!--				<label>Alamat</label>-->
<!--					<input type="text" name="alamat" value="<?php echo $alamat;?>">-->
<!--				-->
<!--				<label>No. Plot</label>-->
<!--					<input type="text" name="plot" value="<?php echo $plot;?>">-->
<!---->
<!--				<label>Mukim</label>-->
<!--					<input type="text" name="mukim" value="<?php echo $mukim;?>"></div>-->
<!--			</div>-->
<!--		-->
<!--		-->
<!--			<div class="column">-->
<!--					<div class="card">-->
<!--				-->
<!--				<label>No. Fail</label>-->
<!--					<input type="text" name="nofile" value="<?php echo $nofile;?>">-->
<!--				-->
<!--				<label>Tarikh</label>-->
<!--					<input type="date" name="tarikh" value="<?php echo $tarikh;?>">-->
<!--				-->
<!--				<label>Resit</label>-->
<!--					<input type="text" name="resit" value="<?php echo $resit;?>">-->
<!--	-->
<!--						<label>Status</label>-->
<!--						-->
<!--							<select name="status" value="<?php echo $status;?>">-->
<!--						<option value="available">Available</option>-->
<!--						<option value="unavailable">Unavailable</option>-->
<!--						</select>					-->
<!--						-->
<!--					</div>-->
<!--			</div>-->
<!--	</div>-->
<!---->
<!--<br>-->
<!---->
<!--  	</div>-->
<!--			<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">-->
<!--  		<button type="submit" class="btn" name="Update">Update value="Update"</button>-->
<!--  	</div>-->
<!--		-->
		
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Kad Pengenalan</td>
				<td><input type="text" name="kp" value="<?php echo $kp;?>"></td>
			</tr>
			<tr> 
				<td>No Syarikat</td>
				<td><input type="text" name="nosyarikat" value="<?php echo $nosyarikat;?>"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat;?>"></td>
			</tr>
			<tr> 
				<td>No.Plot</td>
				<td><input type="text" name="plot" value="<?php echo $plot;?>"></td>
			</tr>
			<tr> 
				<td>Mukim</td>
				<td><input type="text" name="mukim" value="<?php echo $mukim;?>"></td>
			</tr>
			<tr> 
				<td>NO.File</td>
				<td><input type="text" name="nofile" value="<?php echo $nofile;?>"></td>
			</tr>
			<tr> 
				<td>Tarikh</td>
				<td><input type="date" name="tarikh" value="<?php echo $tarikh;?>"></td>
			</tr>
			<tr> 
				<td>Resit</td>
				<td><input type="text" name="resit" value="<?php echo $resit;?>"></td>
			</tr>
			<tr> 
				<td>Status</td>
				<td>
				<select name="status" value="<?php echo $status;?>">	
				<option value="available">Available</option>
    			<option value="unavailable">Unavailable</option>
				</td>
			</tr>

			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
	
	
</body>
</html>
