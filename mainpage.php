<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style1.css">
<style>

body {
  background-image: url("imain.jpg");
   background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;
}
 
a.absolute1 {
  position: absolute;
  top: 380px;
  right: 290px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding-left: 40px;
  padding-right:40px;
  padding-top: 14px;
  padding-bottom: 14px;
  font-size: 15px;
  color: white;
  background: #004080;
  border: none;
  border-radius: 12px;
}

a.absolute2 {
  position: absolute;
  top: 380px;
  right:580px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding-left: 35px;
  padding-right:35px;
  padding-top: 14px;
  padding-bottom: 14px;
  font-size: 15px;
  color: white;
  background: #004080;
  border: none;
  border-radius: 12px;
}

a.absolute3 {
  position: absolute;
  top: 380px;
  right: 830px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 14px;
  font-size: 15px;
  color: white;
  background: #004080;
  border: none;
  border-radius: 12px;
}

</style>
</head>
<body>

<?php
 include("sidenav.php");
?>


<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu </span>
  <h2>Pejabat Tanah Kluang</h2>
</div>

  <a href="addnew.php" class="absolute3">Pendaftaran Permohonan</a>
  <a href="index.php" class="absolute2">Laporan</a>
  <a href="search.php" class="absolute1">Carian</a>

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
