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
	$catatan = mysqli_real_escape_string($mysqli, $_POST['catatan']);
	
	// check field yang kosong
	if(empty($name) || empty($kp) || empty($nosyarikat) || empty($alamat) || empty($plot) || empty($mukim) || empty($nofile) || empty($tarikh) || empty($resit) || empty($status) || empty($catatan)) {	
			
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
		if(empty($catatan)) {
			echo "<font color='red'>catatan field is empty.</font><br/>";
		}

	} else {	
		//update table
		$result = mysqli_query($mysqli, "UPDATE users SET name='$name',kp='$kp',nosyarikat='$nosyarikat',alamat='$alamat',plot='$plot', mukim='$mukim',nofile='$nofile',tarikh='$tarikh',resit='$resit',status='$status',catatan='$catatan' WHERE id=$id");
		
		//ke index.php
		header("Location: index.php");
	}
}
?>
<?php

$id = isset($_GET['id']) ? $_GET['id'] : '';

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$kp = $res['kp'];
	$nosyarikat = $rs['nosyarikat'];
	$alamat = $res['alamat'];
	$plot = $res['plot'];
	$mukim = $res['mukim'];
	$nofile = $res['tarikh'];
	$resit = $res['resit'];
	$status = $res['status'];
	$catatan = $res['catatan'];
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


</style>
</head>

<body>

	<?php
 include("sidenav.php");
?>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu </span>
   <h2>Kemaskini Permohonan</h2>
	 <form name="form1" method="post" action="edit.php">
		
	<div class="input-group">
		<div class="row">
			<div class="column">
				
					<div class="card">	
					<label>Nama</label>
					<input type="text" name="name">
				
				<label>Kad Pengenalan</label>
					<input type="text" name="kp">
				
				<label>No Syarikat</label>
					<input type="text" name="nosyarikat">
				
				<label>Alamat</label>
					<input type="text" name="alamat">
				
				<label>No. Plot</label>
					<input type="text" name="plot">

				<label>Mukim</label>
					<input type="text" name="mukim"></div>
			</div>
		
		
			<div class="column">
					<div class="card">
				
				<label>No. Fail</label>
					<input type="text" name="nofile">
				
				<label>Tarikh</label>
					<input type="date" name="tarikh">
				
				<label>Resit</label>
					<input type="text" name="resit">
	
						<label>Status</label>
						
							<select name="status">
						<option value="available">Available</option>
						<option value="unavailable">Unavailable</option>
						</select>

				<label>Catatan</label>
					<input type="text" name="catatan">
										
						
					</div>
			</div>
	</div>

<br>

  	</div>
  		<button type="submit" class="btn" name="Update">Update</button>
  	</div>
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
