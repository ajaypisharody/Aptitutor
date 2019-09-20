<?php include 'database.php'?>
<?php session_start();?>

<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="../w3.css">
<link rel="stylesheet" href="../Lato.css">
<link rel="stylesheet" href="../Montserrat.css">
<link rel="stylesheet" href="../log.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-navbar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}

.footer {
   position:fixed;
   left:0px;
   bottom:0px;
   height:110px;
   width:100%;
  
}
body{
	text-align: left;
	background: #00ECB9;
  font-family: sans-serif;
  font-weight: 100;
}

h1{
  color: #396;
  font-weight: 100;
  font-size: 30px;
  margin: 30px 0px 15px;
}



.smalltext{
	padding-top: 1px;
	font-size: 10px;
}
</style>
  
</head>
<body>
<!-- Navbar -->
<div class="w3-top">


  <ul class="w3-navbar w3-black w3-card-2 w3-left-align w3-large">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
      <a class="w3-padding-large w3-hover-blue w3-large  w3-opacity w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    </li>
    <li><a href="#" class="w3-padding-large w3-black ">APTITUTOR.com</a></li>
  
<div class="dropdown" style="float:right;">
<a href="../logout.php" class="w3-padding-large w3-hover-blue">LogOut</a></li>    
</div>
    



  </ul>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-large w3-black">
      <li><a class="w3-padding-large" href="#">About</a></li>
      <li><a class="w3-padding-large" href="#">Contact us</a></li>
      <li><a class="w3-padding-large" href="#">Subjects</a></li>
      <li><a class="w3-padding-large" href="index.php">Admin</a></li>
      <li><a class="w3-padding-large" href="logout.php">LogOut</a></li>
    </ul>
  </div>
</div><br>



<main>

<div class="container">
<h1>Round 2 Completed!</h1>

<h1>
Round 2- Score:
<?php 
$query="SELECT scores_2 FROM `score`";
$results=$mysqli->query($query) or die($mysqli->error.__LINE__);
$row=$results->fetch_assoc();

echo $row['scores_2'];


?>

</h1>
<h2>
<a href="quiz3.php?n=1">Go to Final Round!</a></h2>
</main>
    
</body>