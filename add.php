<html>
<head>

	<title>Add Data</title>
</head>
<body>
<?php

include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$kp = mysqli_real_escape_string($mysqli, $_POST['kp']);
	$nosyarikat = mysqli_real_escape_string($mysqli, $_POST['nosyarikat']);
	$alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);
	$plot  = mysqli_real_escape_string($mysqli, $_POST['plot']);
	$mukim = mysqli_real_escape_string($mysqli, $_POST['mukim']);
	$nofile = mysqli_real_escape_string($mysqli, $_POST['nofile']);
	$tarikh = mysqli_real_escape_string($mysqli, $_POST['tarikh']);
	$resit = mysqli_real_escape_string($mysqli, $_POST['resit']);
	$status = mysqli_real_escape_string($mysqli, $_POST['status']);
	
		
	
	if(empty($name) || empty($kp) || empty($nosyarikat) || empty($alamat) || empty($plot) ||  empty($mukim) || empty($nofile) || empty($tarikh) || empty($resit) || empty($status)) {
				
		if(empty($name)) {
			echo "<font color='red'>NAME field is empty.</font><br/>";
		}
		
		if(empty($kp)) {
			echo "<font color='red'>KAD PENGENALAN field is empty.</font><br/>";
		}
		
		if(empty($nosyarikat)) {
			echo "<font color='red'>NO SYARIKAT field is empty.</font><br/>";
		}

		if(empty($alamat)) {
			echo "<font color='red'>ALAMAT field is empty.</font><br/>";
		}

		if(empty($plot)) {
			echo "<font color='red'>PLOT field is empty.</font><br/>";
		}

		if(empty($mukim)) {
			echo "<font color='red'>MUKIM field is empty.</font><br/>";
		}

		if(empty($nofile)) {
			echo "<font color='red'>NO.FILE field is empty.</font><br/>";
		}

		if(empty($tarikh)) {
			echo "<font color='red'>TARIKH field is empty.</font><br/>";
		}

		if(empty($resit)) {
			echo "<font color='red'>RESIT field is empty.</font><br/>";
		}

		if(empty($status)) {
			echo "<font color='red'>STATUS field is empty.</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		 
			
		
		$result = mysqli_query($mysqli, "INSERT INTO users(name,kp,nosyarikat,alamat,plot, mukim,nofile,tarikh,resit,status) VALUES('$name','$kp','$nosyarikat','$alamat','$plot', '$mukim','$nofile','$tarikh','$resit','$status')");
		
		
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
