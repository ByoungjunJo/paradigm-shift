<?php include('php/includes/head.php'); ?>

  <body>

<!-- The php code which we are having a trouble with
    <?php
//    require_once('smarty-3.1.27/libs/Smarty.class.php');
//    $smarty = new smarty();
//    $smarty ->template_dir = 'views';
//    $smarty ->compile_dir ='tmp';
//
//    $smarty ->display('index.tpl');
    ?>  -->

  	<div class="navbar navbar-default navbar-fixed-top nav-color" role="navigation">
    <div class="container">
  	<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><span class="menu-color">CS Nation</span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown"><!--Dropdown menu for Courses begins-->
          <a href="#" class="dropdown-toggle menu-color" data-toggle="dropdown" role="button" aria-expanded="false"><span class="menu-color">Courses</span><span class="caret menu-color"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">CS Nation</a></li>
            <li><a href="#">Test1</a></li>
            <li><a href="#">Test2</a></li>
            <li class="divider"></li>
            <li><a href="#">Test3</a></li>
          </ul>
        </li> <!--Dropdown menu for Courses ends-->

    <li class="dropdown"> <!--Dropdown menu for About Us Begins-->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="menu-color">About Us</span><span class="caret menu-color"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Test1</a></li>
            <li><a href="#">Test2</a></li>
            <li><a href="#">Test3</a></li>
            <li class="divider"></li>
            <li><a href="about_us.html">Contact Us</a></li>
          </ul>
        </li>	<!--Dropdown menu for About Us ends-->
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default button-color"><span class="menu-color">Search</span></button>
      </form>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</div>
	<div class="container">
 	<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="item active">

                <div class="carousel-caption">
                  <h3>CS Nation</h3>
                </div>
            </div>
            <div class="item">
                <h2>CS Nation</h2>
                <div class="carousel-caption">
                  <h3>This can be a breakthrough in your life</h3>
                </div>
            </div>
            <div class="item">
                <h2>Take This Opportunity</h2>
                <div class="carousel-caption">
                  <h3>This can be a breakthrough in your life</h3>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    	<div class="row myrow">

  		<div class="col-sm-6 col-md-4">
    	<div class="thumbnail">
      	<img data-src="holder.js/300x300" alt="...">
      	<div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
      	</div>
    	</div>
  		</div>

  		<div class="col-sm-6 col-md-4">
    	<div class="thumbnail">
      	<img data-src="holder.js/300x300" alt="...">
      	<div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
      	</div>
    	</div>
  		</div>

  		<div class="col-sm-6 col-md-4">
    	<div class="thumbnail">
      	<a href="index.html"><img data-src="holder.js/300x300" alt="..."></a>
      	<div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
      	</div>
    	</div>
  		</div>


		</div>
	</div>

    <?php include('php/includes/scripts.php'); ?>

  </body>
  </html>
