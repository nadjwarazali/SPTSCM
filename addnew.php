<html>
<head>
	<title>Daftar Fail</title>
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
  <h2>Pendaftaran Permohonan</h2>
		<form action="add.php" method="post" name="form1">		
					
		<div class="input-group">
		<div class="row">
			<div class="column">
				
					<div class="card">	
					<label>Nama</label>
					<input type="text" name="name" >
				
				<label>Kad Pengenalan</label>
					<input type="text" name="kp" >
				
				<label>No Syarikat</label>
					<input type="text" name="nosyarikat" >
				
				<label>Alamat</label>
					<input type="text" name="alamat" >
				
				<label>No. Plot</label>
					<input type="text" name="plot" ></div>
			</div>
		
		
			<div class="column">
					<div class="card">
						<label>Mukim</label>
					<input type="text" name="mukim" >
				
				<label>No. Fail</label>
					<input type="text" name="nofile" >
				
				<label>Tarikh</label>
					<input type="date" name="tarikh" >
				
				<label>Resit</label>
					<input type="text" name="resit" >
	
						<label>Status</label>
						
							<select name="status">
										<option value="available">Available</option>
										<option value="unavailable">Unavailable</option>
							</select>
						
					</div>
			</div>
	</div>

<br>

  	</div>
  	
  		<button type="submit" class="btn" name="Submit">Submit</button>
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
	<!-- End Bar -->

</body>
</html>

