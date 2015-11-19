<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#inverseNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
	        <div class="container-fluid" id="logo">
				<a href="index.php"><img id="img_logo" src="images/bookworm.png" title = "Book Worm" /></a>
			</div>
	    </div>
	      	<!-- Collect the nav links, forms, and other content for toggling -->
      	<div class="collapse navbar-collapse" id="inverseNavbar1">
	        <ul class="nav navbar-nav">
	          	<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >Categories<span class="caret"></span></a>
	           		<ul class="dropdown-menu" role="menu">
		              <li><a href="search.php?id=1">Fiction</a></li>
		              <li><a href="search.php?id=2">Biography</a></li>
		              <li><a href="search.php?id=3">Classics</a></li>
		              <!--<li class="divider"></li>
		              <li><a href="#">Separated link</a></li>
		              <li class="divider"></li>
		              <li><a href="#">One more separated link</a></li>-->
	                </ul>
          		</li>
       		</ul>
			<ul class="nav navbar-nav navbar-right">
	            <li><a href="signup.php">Sign-up</a></li>
		        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Account<span class="caret"></span></a>
		            <ul class="dropdown-menu" role="menu">
		              <li><a href="signin.php"><input type="button" title="Sign-in" value="Sign-in"/></a></li>
	                  <li class="divider"></li>
		              <li><a href="#">My Orders</a></li>
		              <li><a href="#">Settings</a></li> 
	                  <li class="divider"></li>
		              <li><a href="#">Sign-out</a></li>
	                </ul>
	            </li>
	            <li><a href="#"><img src="images/cart.png"></a></li>
	        </ul>
	    </div>
      	<!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>