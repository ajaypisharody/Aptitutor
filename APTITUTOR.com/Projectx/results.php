<?php include 'database.php'?>

<?php session_start();
?>


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
	background: white;
  font-family: sans-serif;
  font-weight: 100;
}

h1{
  color: #396;
  font-weight: 100;
  font-size: 30px;
  margin: 30px 0px 15px;
}

#clockdiv{
	font-family: sans-serif;
	color: #fff;
	display: inline-block;
	font-weight: 100;
	text-align: right;
	font-size: 10px;
}

#clockdiv > div{
	padding: 5px;
	border-radius: 10px;
	background: #00BF96;
	display: inline-block;
}

#clockdiv div > span{
	padding: 10px;
	border-radius: 5px;
	background: #00816A;
	display: inline-block;
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
    <li><a href="../home.php" class="w3-padding-large w3-black ">APTITUTOR.com</a></li>
  
<div class="dropdown" style="float:right;">
    <li class="w3-hide-small"><a href="../logout.php" class="w3-padding-large w3-hover-blue">LogOut</a></li>    
    </div>



  </ul>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-large w3-black">
 
      <li><a class="w3-padding-large" href="logout.php">LogOut</a></li>
    </ul>
  </div>
</div><br>



<main>

<div class="container" align="center">
<h1>Test Finished!</h1>
<p>Congratulations!!!Well Done..</p>
<p>

<?php 
$query="SELECT * FROM `score`";
$results=$mysqli->query($query) or die($mysqli->error.__LINE__);
$row=$results->fetch_assoc();

if($row['scores_1']>=4 && $row['scores_2']>=4 && $row['scores_3']>=4)
{
$opportunities='Job opportunities in Wipro,Thoughtworks,Angular Minds ';
}
else if($row['scores_1']>=2 && $row['scores_2']>=2 && $row['scores_3']>=2)
{
$opportunities='Improve skills with www.w3schools.com';
}
else
{
$opportunities='Your score does not meet the job requirements..Good luck.<a href="quiz?n=1.php"><i><b>Take a test again!.</b></i></a>';
}

if($row['scores_1']>=3)
{
$score1='Good in C';
}
else
{
$score1='Keep trying!..';
}


if($row['scores_2']>=3)
{
$score2='Wow..Good in C++ ';
}
else
{
$score2='Keep trying!..Better luck next time';
}



if($row['scores_3']>=3)
{
$score3='Expert!!..Good in Java';
}
else
{
$score3='Keep trying!..Its a tough subject.Try next Time';
}



?>
<hr>
<b><H1>ROUND 1:</h1></b>
<h3>Score:<?php echo  $row['scores_1'];?> <br>&nbsp <?php echo $score1?></h3>
<a href="view.php"><b>View Correct answers</b></a>
<hr>
<b><H1>ROUND 2:</h1></b>
<h3>Score:<?php echo  $row['scores_2'];?> <br>&nbsp<?php echo $score2?></h3>

<a href="view2.php"><b>View Correct answers</b></a>
<hr>
<b><H1>ROUND 3:</h1></b>
<h3>Score:<?php echo  $row['scores_3'];?> <br>&nbsp<?php echo $score3?></h3>

<a href="view3.php"><b>View Correct answers</b></a>
<hr>
<b><H1>ASSESSMENT:</h1></b>
<h2> <br>&nbsp<?php echo $opportunities ?></h2><hr>


</p>

</main>
    
</body>