<?php
//including the database connection file
include_once("config.php");

//test
session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="style1.css">
 
 <style>

body {
  background-image: url("iplain.jpg");  
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #004080;
  color: white;
}

</style>
</head>

<body>
 
 <?php
 include("sidenav.php");
?>


<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu </span>
  <h2>Laporan</h2>
  <p><button onclick="document.location='addnew.php'" class=btn>Register New Data</button>
     <button onclick="document.location='search.php'" class=btn>Search Data</button>
     <button onclick="document.location='status.php'" class=btn>Status Dokumen</button>

<p> </p>

	<table>

	<tr bgcolor='#CCCCCC'>
		<th>Name</th>
		<th>Kad Pengenalan</th>
		<th>No. Syarikat</th>
		<th>Alamat</th>
		<th>No. Plot</th>
		<th>Mukim</th>
		<th>No. File</th>
		<th>Tarikh</th>
		<th>Resit</th>
		<th>Status</th>
		<th>Update</th>

	</tr>
	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr bgcolor='#FFFFFF'>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['kp']."</td>";
		echo "<td>".$res['nosyarikat']."</td>";	
		echo "<td>".$res['alamat']."</td>";
		echo "<td>".$res['plot']."</td>";
		echo "<td>".$res['mukim']."</td>";
		echo "<td>".$res['nofile']."</td>";
		echo "<td>".$res['tarikh']."</td>";
		echo "<td>".$res['resit']."</td>";
		echo "<td>".$res['status']."</td>";
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>

	</table>
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

