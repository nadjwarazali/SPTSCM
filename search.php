<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search semua table column
    // guna concat (mysql)
    $query = "SELECT * FROM `users` WHERE CONCAT(`name`, `kp`, `nosyarikat`, `alamat`, `plot`, `mukim`, `nofile`, `tarikh`, `resit`, `status`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `users`";
    $search_result = filterTable($query);
}

// connect dekat database
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "test");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<html>
    <head>
        <title>PEJABAT TANAH KLUANG(SEARCH)</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

body {
  background-image: url("iplain.jpg");
  font-size: 120%;
  font-family: tahoma;
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
  <h2>Carian</h2>
  
  <form action="search.php" method="post">
            <input type="text" name="valueToSearch" placeholder=""><br>
            <input type="submit" name="search" value="Search"><br><br>
            
            <table>
                <tr >
                    <th>Name</th>
                    <th>Kad Pengenalan</th>
                    <th>No.Syarikat</th>
                    <th>Alamat</th>
                    <th>No.Plot</th>
                    <th>Mukim</th>
                    <th>No.File</th>
                    <th>Tarikh</th>
                    <th>Resit</th>
                    <th>Status</th>
                </tr>

      <!-- filter table -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr bgcolor="#FFFFFF">
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['kp'];?></td>
                    <td><?php echo $row['nosyarikat'];?></td>
                    <td><?php echo $row['alamat'];?></td>
                    <td><?php echo $row['plot'];?></td>
                    <td><?php echo $row['mukim'];?></td>
                    <td><?php echo $row['nofile'];?></td>
                    <td><?php echo $row['tarikh'];?></td>
                    <td><?php echo $row['resit'];?></td>
                    <td><?php echo $row['status'];?></td>
                </tr>
                <?php endwhile;?>
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

	<br/><br/>
        
        
        
    </body>
</html>