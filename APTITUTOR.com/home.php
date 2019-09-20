<?php include 'Projectx/database.php'?>

<?php 
session_start();

$quer="UPDATE `score` SET scores_1='0',scores_2='0',scores_3='0' WHERE srno='11'"; 

//runquery
$insert=$mysqli->query($quer) or die($mysqli->error.__LINE__);
?>



<!DOCTYPE html>
<html>
<title>APTITUTOR.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="Lato.css">
<link rel="stylesheet" href="Montserrat.css">
<link rel="stylesheet" href="log.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-navbar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
header {
 background-image:url('1.jpg'); 
 background-repeat: no-repeat;
    background-position: 0 0;
    background-size: cover;
  }

/* The container <div> - needed to position the dropdown content */
.dropdown {
postion:relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Links inside the dropdown */
.dropdown-content a { 
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
<body >



<!-- Navbar -->
<div class="w3-top">


  <ul class="w3-navbar w3-black w3-card-2 w3-left-align w3-large">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
      <a class="w3-padding-large w3-hover-blue w3-large  w3-opacity w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu">&#9776;</a>
    </li>
    <li><a href="#" class="w3-padding-large w3-black ">APTITUTOR.com</a></li>
    <li class="w3-hide-small"><a href="aboutus.html" class="w3-padding-large w3-hover-blue">About us</a></li>
<div class="dropdown" style="float:left;">
    <li class="w3-hide-small"><a href="#" class="w3-padding-large w3-hover-blue">Subjects</a></li>
 <div class="dropdown-content">
<a href="Projectx/quiz.php?n=1">Aptitude Test!</a>
   
<a href="Projectx/quiz3.php?n=1">Java</a>
<a href="Projectx/quiz.php?n=1">C</a>    
<a href="Projectx/quiz2.php?n=1">OOPs</a>
</div>
</div>
  
<div class="dropdown" style="float:left;">
  <li class="w3-hide-small"><a href="#" class="w3-padding-large w3-hover-blue">Admin</a></li>
  <div class="dropdown-content">

    <a href="Projectx/add.php">Add a Question to C</a>

    <a href="Projectx/add2.php">Add a Question to OOPs</a>

    <a href="Projectx/add3.php">Add a Question to Java</a> 
   <a href="index2.php">View Student's Record</a>
</div>
</div>

<div class="dropdown" style="float:right;">
    <li class="w3-hide-small"><a href="logout.php" class="w3-padding-large w3-hover-blue" >LogOut</a></li>    
    </div>



  </ul>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-large w3-black">
      <li><a class="w3-padding-large" href="#">About</a></li>
   
      <li><a class="w3-padding-large" href="#">Subjects</a></li>
      <li><a class="w3-padding-large" <a href="Projectx/add.php">Admin</a></li>
      <li><a class="w3-padding-large" href="logout.php">LogOut</a></li>
    </ul>
  </div>
</div>

<div class="w3-container w3-center" >
<!-- Header -->
<header class="w3-container  w3-center w3-padding-128">

  <h1 class="w3-margin w3-jumbo w3-padding-16 ">WELCOME..</h1>
  <p class="w3-xlarge">Test is conducted on the basis of Rounds of C , C++ and Java!</p>
<a href="Projectx/quiz.php?n=1">

  <button type="submit" class="w3-btn w3-padding-16 w3-large w3-margin-top">StartTest.!</button>
</a>
</header>
</div>


<div class="w3-container w3-black w3-center w3-opacity w3-padding-64" >
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
