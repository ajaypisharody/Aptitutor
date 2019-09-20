<?php include 'database.php';?>
<?php session_start();


?>
<?php

$number=(int) $_GET['n'];

$query="SELECT * FROM `questions`";
$results=$mysqli->query($query) or die($mysqli->error.__LINE__);
$total=$results->num_rows; 



$query="SELECT * FROM `questions` 
        	WHERE question_number = $number";
$result=$mysqli->query($query) or die($mysqli->error.__LINE__);
$question=$result->fetch_assoc();


$query="select * from `choices` where question_number=$number";
$choices=$mysqli->query($query) or die($mysqli->error.__LINE__);




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
<link rel="stylesheet" href="../css/bootstrap.min.css">

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
    <li><a href="#" class="w3-padding-large w3-black ">|APTITUTOR.com|</a></li>


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
<div  align="left">

<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
</div>
<div class="container" >

<h1>ROUND 1</h1>


<h1>  <div class="current">Question <?php echo $question['question_number'];?> of <?php echo $total?></div></h1>
<hr>


<h4>
  <p >
    <?php echo $question['text']?></p>
<p>
<?php

  if($question['image']){
echo '<img src="data:image/png;base64,'.base64_encode( $question['image'] ).'" width="400" height="300" />';}


?>

  </p>
  <form method="post" action="process.php">
  <ul class="choices">
  <?php while($row=$choices->fetch_assoc()):?>

   <li><input type="radio" name="choice" value="<?php echo $row['id'];?>"/><?php echo $row['text'];?></li>
  <?php endwhile;?>
  
  </ul>
  <input type="submit" name="submit" value="Submit"/>
<input type="hidden" name="number" value="<?php echo $number?>"/>
  </form>

</h4>
<hr>

  </div>
</div>
</main>




</body>
</html>