<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Home Page |Book Worm - Online Bookstore</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
<link href="images/book_worm.ico" rel="icon"  type="image"/>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
	<div class="container-fluid">
	  <nav class="navbar navbar-inverse">
	    <div class="container-fluid">
	      <!-- Brand and toggle get grouped for better mobile display -->
	      <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#inverseNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
	        <a href="#" class="navbar-brand">Book Worm</a></div>
	      <!-- Collect the nav links, forms, and other content for toggling -->
	      <div class="collapse navbar-collapse" id="inverseNavbar1">
	        <ul class="nav navbar-nav">
	          
	          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories<span class="caret"></span></a>
	            <ul class="dropdown-menu" role="menu">
	              <li><a href="search.php?id=1">Fiction</a></li>
	              <li><a href="./php/search.php?id=2">Biography</a></li>
	              <li><a href="./php/search.php?id=3">Classics</a></li>
	              
                </ul>
              </li>
            </ul>
<ul class="nav navbar-nav navbar-right">
          <li><a href="signup.php">Sign Up</a></li>
	          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Account<span class="caret"></span></a>
	            <ul class="dropdown-menu" role="menu">
	              <li><a href="#"><input type="button" class="signInBtn" title="Sign-in" value="Sign In"/></a></li>
                  <li class="divider"></li>
	              <li><a href="#">Your Orders</a></li>
	              <li><a href="#">Settings</a></li> 
                  <li class="divider"></li>
	              <li><a href="#">Sign Out</a></li>
                </ul>
              </li>
              <li><a href="#"><img alt="cart2" src="images/cart2.png"></a></li>
            </ul>
          </div>
	      <!-- /.navbar-collapse -->
        </div>
	    <!-- /.container-fluid -->
      </nav>
	  <div id="carousel1" class="carousel slide" data-ride="carousel">
	    <ol class="carousel-indicators">
	      <li data-target="#carousel1" data-slide-to="0" class="active"></li>
	      <li data-target="#carousel1" data-slide-to="1"></li>
	      <li data-target="#carousel1" data-slide-to="2"></li>
        </ol>
	    <div class="carousel-inner" role="listbox">
	      <div class="item active"><img src="images/image_2.jpg" alt="First slide image" class="center-block">
	        <div class="carousel-caption">
	          <h3>First slide Heading</h3>
	          <p>First slide Caption</p>
            </div>
          </div>
	      <div class="item"><img src="images/image_3.jpg" alt="Second slide image" class="center-block">
	        <div class="carousel-caption">
	          <h3>Second slide Heading</h3>
	          <p>Second slide Caption</p>
            </div>
          </div>
	      <div class="item"><img src="images/image_1.jpg" alt="Third slide image" class="center-block">
	        <div class="carousel-caption">
	          <h3>Third slide Heading</h3>
	          <p>Third slide Caption</p>
            </div>
          </div>
        </div>
	    <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
	  <div class="container"></div>
    </div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.2.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
    
  </body>
</html>