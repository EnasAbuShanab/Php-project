<!DOCTYPE html>
<html lang="en">

<head itemscope="" itemtype="http://schema.org/WebSite">
    <link rel="stylesheet" href="login.css">

    <title itemprop="name">
        Preview Bootstrap snippets. Login form with icon</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Preview Bootstrap snippets. Login form with icon. Copy and paste the html, css and js code for save time, build your app faster and responsive">
    <meta name="keywords" content="bootdey, bootstrap, theme, templates, snippets, bootstrap framework, bootstrap snippets, free items, html, css, js">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.bootdey.com/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="135x140" href="https://www.bootdey.com/img/bootdey_135x140.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://www.bootdey.com/img/bootdey_76x76.png">
    <link rel="canonical" href="https://www.bootdey.com/snippets/preview/Login-form-with-icon?full-screen=true" itemprop="url">
    <meta property="twitter:account_id" content="2433978487" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@bootdey">
    <meta name="twitter:creator" content="@bootdey">
    <meta name="twitter:title" content="Preview Bootstrap  snippets. Login form with icon">
    <meta name="twitter:description" content="Preview Bootstrap snippets. Login form with icon. Copy and paste the html, css and js code for save time, build your app faster and responsive">
    <meta name="twitter:image" content="https://www.bootdey.com/files/SnippetsImages/bootstrap-snippets-262.png">
    <meta name="twitter:url" content="https://www.bootdey.com/snippets/preview/Login-form-with-icon?full-screen=true">
    <meta property="og:title" content="Preview Bootstrap  snippets. Login form with icon">
    <meta property="og:url" content="https://www.bootdey.com/snippets/preview/Login-form-with-icon?full-screen=true">
    <meta property="og:image" content="https://www.bootdey.com/files/SnippetsImages/bootstrap-snippets-262.png">
    <meta property="og:description" content="Preview Bootstrap snippets. Login form with icon. Copy and paste the html, css and js code for save time, build your app faster and responsive">
    <link rel="alternate" type="application/rss+xml" title="Latest snippets resources templates and utilities for bootstrap from bootdey.com:" href="http://bootdey.com/rss" />
    <link rel="author" href="https://plus.google.com/u/1/106310663276114892188" />
    <link rel="publisher" href="https://plus.google.com/+Bootdey-bootstrap/posts" />
    <meta name="msvalidate.01" content="23285BE3183727A550D31CAE95A790AB" />
    <script src="/cache-js/cache-1635427806-97135bbb13d92c11d6b2a92f6a36685a.js" type="text/javascript"></script>
</head>

<body>
    <?php 
    include 'register.php';
    ?>


    <div id="snippetContent">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <div class="container bootstrap snippets bootdey">
            <div class="header">
                <ul class="nav nav-pills pull-right">
                    <li><a href="#">&nbsp;</a></li>
                </ul>
                <h3 class="text-muted prj-name">Login Form</h3>
            </div>
            <div style="height:auto;min-height:300px;" class="jumbotron">
                <div class="col-md-4"> <img class="img-responsive center-block img-user" src="https://bootdey.com/img/Content/Manbrown2.png"></div>
                <div class="col-md-6 form-content">
                    <form accept-charset="utf-8" method="post" id="UserLoginForm" class="form-signin" action="">
                        <h1 class="form-signin-heading text-muted">Login</h1> 
                        <input type="text" id="username" autofocus="autofocus" placeholder="Username" class="form-control" name="email"> 
                        <input type="password" id="password" placeholder="Password" class="form-control" name="password"> 
                        <button type="submit" class="btn btn-lg btn-info btn-block" name="login"> <i class="fa fa-share"></i> Login </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="container bootstrap snippets bootdey">
                <footer class="footer">
                    <p>&copy; Company name 2015</p>
                </footer>
            </div>
        </div>

        <?php
        if (isset($_POST['login'])) {


            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "enas_db";


            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";


            $sql = "select * from login where email = '$_POST[email]' and password = '$_POST[password]'";
            $result = $conn->query($sql);

            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            

            if ($count == 1) {
               " <script>
                  window.location.assign(\"register.php\")
                </script>";
                            }
        }
        ?>

        <script type="text/javascript"></script>
    </div>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F1RTS0P1CD"></script>
</body>

</html>