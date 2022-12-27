
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="register.css">
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Form register inside narrow jumbotron - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
                        

<link href="https://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<div class="container bootstrap snippets bootdey">
  <div class="header">
    <ul class="nav nav-pills pull-right">
      <li ><a href="http://getbootstrap.com/examples/jumbotron-narrow/#">Home</a></li>
      <li class="active"><a href="http://getbootstrap.com/examples/jumbotron-narrow/#">Register</a></li>
      <li><a href="http://getbootstrap.com/examples/jumbotron-narrow/#">About</a></li>
    </ul>
    <h3 class="text-muted prj-name">Project name</h3>
  </div>

  <div class="jumbotron text-center" style="min-height:400px;height:auto;">
    <div class="col-md-10 col-md-offset-2">
        <form class="form-horizontal" role="form" method="Post">
        
            <div class="form-group text-center">
                <div class="col-sm-10 reg-icon">
                    <span class="fa fa-user fa-3x">Sign up</span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="email" class="form-control" name="Email" id="inputEmail3" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="email" class="form-control" name="Username" id="Username" placeholder="Username">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                  <button type="submit" name="Submit" class="btn btn-info">
                    <span class="glyphicon glyphicon-share-alt"></span>
                    Register
                  </button>
                </div>
              </div>
        </form>
    </div>
  </div>
</div>                                        

<!-- <style type="text/css">
  .jumbotron label {
    font-size:12px;    
}
<?php
 if (isset($_POST['Submit'])){
   

    #echo "num1 :". $_POST['num1']."<br/> nume : <span style=\"color:red;\">".$_POST['num2']."</span>";
    
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "enas_db";

    
    // Create connection
    $conn = new mysqli($servername, $username, $password ,$dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    $sql = "INSERT INTO `users` ( `name`, `email`, `username`, `password`) VALUES ('$_POST[num1]', 'Doe', 'john@example.com')";

 $conn->query($sql);

 }
?>
.reg-icon{
    color:#5bc0de;
    font-weight:bold;
    text-shadow: 2px 2px 0px rgba(0, 0, 0, 0.4) !important;
}

.nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus {
    color: #fff;
    background-color: #5bc0de;
}

.prj-name{
    font-weight:bold;
    color:#5bc0de;
}
                                        
</style> -->

<script type="text/javascript">
                              
</script>
</body>
</html>