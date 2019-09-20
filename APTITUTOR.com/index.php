<html>
<head>
	<title>
		login page
	</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="Lato.css">
<link rel="stylesheet" href="Montserrat.css">
 <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="log.css">
<style>

.w3-navbar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}

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
    <li class="w3-hide-small"><a href="add.php" class="w3-padding-large w3-hover-blue">Signup</a></li>    
</div>

  </div>
</div>
	<div class="container" align="center">
<div class="row" align="center">
<div class="col-md-12" align="center"><br><br><br><br>
		<form action="process.php" method="POST">
			

			<p>
			<label>USERNAME</label>
			<input type="text" id="user" name="user"/>
			</p>
			<p>
			<label>PASSWORD</label>
			<input type="password" id="pass" name="pass"/>
			</p>
			<p>
			
			<input type="submit" id="btn" value="Login!"/>
			</p>

		</form>
	</div>
</div>
</div>
</body>
</html>