<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Open Ventures</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">
  
  .navbar-inverse   {
  border-radius: 0 !important;
}
  </style>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" style="margin-top: 6px;">
        <li><a href="/Open-Ventures/home2.php/">Home</a></li>
        <li><a href="#">Articles</a></li>
    <li><a href="#">Entrepenuership</a></li>
    <li><a href="#">Tech</a></li>
    <li><a href="#">Opprtinities</a></li> 
    <h3 style="position: relative;float: right; bottom: 7px;left: 130px;color: white;font-family: cursive;">Open Ventures</h3>

      </ul>
      
     <form class="navbar-form navbar-right" role="search" method="post" action="search.php" style="margin-top: 15px;">
                    <div class="ui-widget">
                        <label for="tags"> </label>
                        <input id="tags" name="search" class="form-control">
                        <button type="submit" class="btn btn-default">Search</button>
                    </div>

                </form>
      <ul class="nav navbar-nav navbar-right" style="margin-top: 4px;">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="login-overlay" class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel"><i>Login to Open Ventures</i></h4>
        </div>
        <div class="modal-body">
            <div class="row">

                <div class="col-xs-6">
                    <p style="font-size: 24px;">Register now for FREE</p>
                    <ul class="list" style="line-height: 2; padding-bottom: 5px;">
                        <li> wdsfrv</li>
                        <li> fvgdrbbsbfbbbffdbfss</li>
                        <li> bsdgtbgfgbgsb</li>
                        <li> bgdsbgbbggbgbbg</li>
                    </ul>
                    <p> <a href="/Open-Ventures/signup.php/" class="btn btn-info btn-block">Yes please, register now!</a> </p>
                </div>

                <div class="col-xs-6">
                    <div class="well">
                        <form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
                            <div class="form-group">
                                <label for="email" class="control-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                <span class="help-block"></span>
                            </div>
                            <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>

                            <button type="submit" class="btn btn-success btn-block">Login</button>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
  <p>Copyright @ Test, 2016</p>
</footer>

</body>
</html>
