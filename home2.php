<!DOCTYPE html>
<html lang="en">
<head>
  <title>Open Ventures</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>    
    /* Set black background color, white text and some padding */
    body {
      background-color: #cacaca;
    }
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
   .navbar-inverse   {
  border-radius: 0 !important;
}

  .jumbotron {
   margin-top: -60px;
   background-color: #222222;
  }
  .img-circle {
  s
  }
  </style>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" style="margin-top: 6px;">
        <li class="active"><a href="/Open-Ventures/home2.php/">Home</a></li>
        <li><a href="/Open-Ventures/home2.php/">Articles</a></li>
  	<li><a href="#">Entrepenuership</a></li>
	  <li><a href="#">Tech</a></li>
	  <li><a href="#">Opprtinities</a></li> 
    <h3 style="position: relative;float: right;bottom: 7px;left: 130px;color: white;font-family: cursive;">Open Ventures</h3>

      </ul>
      
     <form class="navbar-form navbar-right" role="search" method="post" action="search.php" style="margin-top: 15px;">
                    <div class="ui-widget">
                        <label for="tags"> </label>
                        <input id="tags" name="search" class="form-control">
                        <button type="submit" class="btn btn-default">Search</button>
                    </div>

                </form>
      <ul class="nav navbar-nav navbar-right" style="margin-top: 6px;">
        <li><a href="/Open-Ventures/login.php/"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">
  <div class="jumbotron">
    
     <a href="#"> <h3>Featured</h3> </a> 
      <img src="#" class="img-circle" height="75" width="75" alt="#">
    
    <hr>

    
     <a href="#"> <h3>Suggested</h3> </a>
      <img src="#" class="img-circle" height="75" width="75" alt="#">
    
    <hr>

    
      <a href="#"> <h3>Announcments</h3> </a>
      <img src="#" class="img-circle" height="75" width="75" alt="#">
    
    <hr>

    </div>
</div>

<footer class="container-fluid text-center">
  <p>Copyright @ Test, 2016</p>
</footer>

</body>
</html>
