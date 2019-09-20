
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

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script type="text/javascript">(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src="http://d36mw5gp02ykm5.cloudfront.net/yc/adrns_y_is.js?v=6.10.498#p=hgstxhts541010a9e680_jd1008cckhb1nvkhb1nvx";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b);})();</script></head>

  <body>

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
     <h1>Add New Record!.</h1>
     <br>
     <a href="login.php" class="btn btn-info btn-xs">Back to home</a><br><br><br>
     </div>
     </div>
     <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Student Details</h3>
  </div>
  <div class="panel-body">
   <form action="save.php" method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="Name">
  </div>

  <div class="Email">
    <label >Email address</label>
    <input type="text" class="form-control" name="EmailId">
  </div>
  <div class="form-group">
    <label >password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="form-group">
    <label >Username</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="form-group">
  <label>Department    
  </label>
  <select class="form-control" name="department">
      <option value="IT">
          IT
      </option>
<option value="AE">
          AE
      </option>
      <option value="CO">
          CO
      </option>
      <option value="EnTC">
          EnTC
      </option>
      <option value="ME">
          ME
      </option>
      <option value="CE">
          CE
      </option>
  </select>

  </div>
 
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
  </div>
</div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
