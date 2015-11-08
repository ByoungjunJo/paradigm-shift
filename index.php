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

    <?php include ('php/includes/navbar.php'); ?>

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
