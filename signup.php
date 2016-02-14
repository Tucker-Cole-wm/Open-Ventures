<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
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
        <li><a href="/Open-Ventures/login.php/"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="login-overlay" class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel"><i>Sign up to Open Ventures </i></h4>
        </div>

        <div class="modal-body">

            <div class="row">

                <div class="col-lg-12">

                    <div class="well">

                        <h2>Sign Up!</h2>

                        <img src="http://atdc.org/wp-content/uploads/559457_471220546279578_293017823_n-300x300.jpg" style="width: 220px;float: right;margin-right: 26px;">
                        <form style="margin-top: 10px;">

                            <label>First Name</label><br>

                            <input type="text" name="firstname" class="span3"><br>

                            <label>Last Name</label><br>

                            <input type="text" name="lastname" class="span3"><br>

                            <label>Email Address</label><br>

                            <input type="email" name="email" class="span3"><br>

                            <label>Username</label><br>

                            <input type="text" name="username" class="span3"><br>

                            <label>Password</label><br>

                            <input type="password" name="password" class="span3" style="margin-bottom: 10px;"><br>

                            <label><input type="checkbox" name="terms"> I agree with the <a href="/Open-Ventures/Terms and Conditions.php/">Terms and Conditions</a>.</label>

                            <input type="submit" value="Sign up" class="btn btn-primary pull-right" style="margin-bottom: 10px; margin-right: 20px;">

                            <div class="clearfix"></div>

                        </form>

                        <div class="panel-footer" style="margin-top: 10px;">
                            Already have an account? <a href="/Open-Ventures/login.php/"> Sign in Here </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
