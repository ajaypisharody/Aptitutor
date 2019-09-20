
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Register!</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

  
  </head>

  <body>
  <?php
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "myproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from studentdb";
$result = $conn->query($sql);


?>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          
          <a class="navbar-brand" href="#">APTITUTOR.com</a>
        </div>
       
      </div>
    </nav>
    <br><br><br>

    <div class="container">
     <div class="row">
     <div class="col-md-12">
     <h1>STUDENT'S RECORDS</h1><hr>
 

     <br>
     <a href="add.php" class="btn btn-success btn-xs">Add new Record</a><br><br><br>
     <table class="table table-bordered table-hover">
     <tr>
     <th>Srno</th>
     <th>Name</th>
     <th>emailid</th>
     <th>department</th>
     <th>username</th>
     
     </tr>
     <?php
     if ($result->num_rows > 0) {
    // output data of each row
      $i=1;
    while($row = $result->fetch_assoc()) {

  
     ?>
     <tr>
     <th><?php echo $row['srno'];?></th>
     <th><?php echo $row['Name'];?></th>
     <th><?php echo $row['EmailId'];?></th>
     <th><?php echo $row['department'];?></th>
     <th><?php echo $row['username'];?></th>
     
     </tr>
     <?php
     $i++;
   }
     }else {
    echo "<tr><td colspan='6'>No records</td></tr>";
      }?>
     </table>
     <?php

$conn->close();
?>
     </div>
     </div>
     

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
