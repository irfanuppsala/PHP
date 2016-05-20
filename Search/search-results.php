<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is a Bootstrap driven homepage">
    <meta name="keywords" content="keyword 1,keyword 2,keyword 3">
    <meta name="author" content="Bo Lovenhjelm">
    <link rel="icon" href="favicon.ico">
    <title>Testa att göra sökfunktion</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<link href="css/bootstrap-glyphicons.css" rel="stylesheet">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- START Custom styles for this template -->
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/pulse-animation.css" rel="stylesheet">
	<link href="css/flip-animation.css" rel="stylesheet">
	<link href="css/ui.totop.css" rel="stylesheet" media="screen,projection" />
    <!-- //.Custom styles for this template -->

    <!-- Include Modernizr in the head, before any other Javascript -->
	<script src="js/modernizr-2.8.3.min.js"></script>
</head>


            <!-- START LITTLE HELPERS BOOTSTRAP GRID SYSTEM
            ===============================================


            Grid Classes:
                .container: wrapper for all your rows
                .row: contains all your column classes
                .col-##-##: the sizes of the columns in your row

                    Example: col-md-5

                    There are 4 device sizes (xs, sm, md & lg) and 1 to 12 columns to play with


            Ordering Classes (only for md & lg screens):
                .col-##-push-##: Pushes your columns by column
                .col-##-pull-##: Pulls your columns by column

                    Example: col-md-pull-4


            Offset Class (only for md & lg screens):
                .col-##-offset-##: moves your columns depending what the column is offset by.

                   Example: col-md-offset-6 


            Responsive Utility Classes: They hide or show content on your screen depending on which device you style for.
                .visible-##: Your content will only be visible on that screen size.
                .hidden-##: Your content will only be hidden on that screen size.

                    Example: col-md-visible

            =============================================  
            //END LITTLE HELPERS BOOTSTRAP GRID SYSTEM -->


<body>
	<!-- START MAIN CONTAINER
	================================================== -->
	<div class="container" id="main">

		<!-- START NAVBAR
	    ================================================== -->
		
		<nav class="navbar navbar-default navbar-fixed-top navbar-shadow" role="navigation"> <!-- navbar-fluid-top or navbar-fixed-top are options -->
			<div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href=""><img src="images/logo.png" alt="Your Logo"></a>
			    </div><!-- ./navbar-header -->

		    	<!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="#">About</a></li>
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
						<li><a href="#">Contact</a></li>
					</ul>
					<form class="navbar-form navbar-left" role="search" method="post" style="background-color:">
						<div>
							<div class="form-group">
								<input type="text" name="search" title="Typ" class="form-control pull-left" placeholder="Sök artikel" id="searchInput">
							</div>
							<button type="submit" class="btn btn-default"><span class="fa fa-search"></span></button>
						</div>
					</form>

					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user"></span> My Account <strong class="caret"></strong></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#"><span class="fa fa-wrench"></span> Settings</a></li>
								<li><a ref="#"><span class="fa fa-refresh"></span> Update Profile</a></li>
								<li><a href="#"><span class="fa fa-briefcase"></span> Update Profile</a></li>
								<li><a href="#"><span class="fa fa-power-off"></span> Sign Out</a></li>
							</ul>
						</li>
					</ul>
					
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav><!-- /.navbar-default -->

		<!-- ================================================== 
		//END NAVBAR -->


		<!-- START MORE FEATURES
	    ================================================== -->
		
		<div class="row" id="featuresHeading">
			<div class="col-sm-12">
				<!-- <h2>More Features<small> - A sub header for extra awesome!</small></h2> -->
				<p class="lead"><h2>Sökfunktion med PHP och MySQL</h2></p>
			</div><!-- /.col-sm-12 -->
		</div><!-- /.featuresHeading -->

		<!-- ================================================== 
		//END MORE FEATURES -->


	    <!-- START SEARCH RESULTS -->
	    	<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
			      <table class="table table-bordered table-hover">
			        <thead>
			          <tr class="table-header-row">
			            <th class="book-cover">Bokomslag</th>
			            <th class="author">Författare</th>
			            <th class="title">Titel</th>
			            <th class="genre">Genre</th>
			            <th class="price text-center">Pris</th>
			            <th class="publish-date text-center">Publiceringsdatum</th>
			            <th class="description">Beskrivning</th>
			          </tr>
			        </thead>

			       <?php include("inc/uppdatera.php"); ?>
			      </table>
			    </div><!-- /.table-responsive -->
			</div>
		</div>
	  			    
				
    	<!-- END SEARCH RESULTS -->


		<!-- START VERTICAL SPACER WITH NO HORIZONTAL DIVIDER
	    ================================================== -->

	    <div class="row">
	    	<div class="col-sm-12 vertical-spacer">
	    	</div><!-- /.vertical-spacer -->
	    </div><!-- /.row -->
	    
		<!-- ================================================== 
		//END VERTICAL SPACER WITH NO HORIZONTAL DIVIDER -->


	</div><!-- /.container -->
    <!-- ================================================== 
	//END MAIN CONTAINER -->

	<!-- START FOOTER
	================================================== -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<h6>&copy; 2015 {company name}</h6>
				</div><!-- /.col-sm-2 -->

				<div class="col-sm-3">
					<h6>About Us</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci eos laborum porro excepturi dolorem similique optio dicta ex ipsum eaque, ipsa expedita eveniet a quod temporibus doloribus! Impedit, hic, voluptates.</p>
				</div><!-- /.col-sm-3 -->

				<div class="col-sm-2">
					<h6>Navigation</h6>
					<ul class="unstyled">
						<li><a href="#">Home</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Links</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div><!-- /.col-sm-2 -->

				<div class="col-sm-2">
					<h6>Follow Us</h6>
					<ul class="unstyled">
						<li><a href="#">Twtter</a></li>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Google Plus</a></li>
					</ul>
				</div><!-- /.col-sm-2 -->

				<div class="col-sm-3">
					<h6>Coded with <span class="fa fa-heart animated pulse"></span> by: <*(((>{ <span class="codefish">codefish</span></h6>
				</div><!-- /.col-sm-3 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</footer>
	
	<!-- ================================================== 
	//END FOOTER -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the /.of the document so the pages load faster -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>    
    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <!-- Custom JS -->
	<script src="js/script.js"></script>
	<!-- jQuery To Top(necessary ui-to-top plugin) -->
	<script src="js/easing.js" type="text/javascript"></script>
    <script src="js/jquery.ui.totop.js" type="text/javascript"></script>
    <!-- Starting the plugin -->

    <script type="text/javascript">

    $(document).ready(function() {

        $('[data-toggle="tooltip"]').tooltip();   

    });

    </script>

    <script type="text/javascript">
      $(document).ready(function() {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
          containerHoverID: 'toTopHover', // fading element hover id
          scrollSpeed: 1200,
          easingType: 'linear' 
        };
        */
        
        $().UItoTop({ easingType: 'easeOutQuart' });
        
      });
    </script>

  </body>
  </html>
