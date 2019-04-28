<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>J.P. "MARECO" d.o.o. Neum</title>

               
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,500">
        <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/animate.css">
        <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">

        
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href='<?php echo ROOT_PATH; ?>assets/ico/apple-touch-icon-144-precomposed.png'>
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo ROOT_PATH; ?>assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo ROOT_PATH; ?>assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo ROOT_PATH; ?>assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
    
    	<!-- Top menu -->
		<nav class="navbar navbar-fixed-top navbar-no-bg" role="navigation" style="background-color:lightseagreen">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav ">
						<li><a href="<?php echo ROOT_URL; ?>" style="color:black">Početna</a></li>
						<li><a href="<?php echo ROOT_URL; ?>shares" style="color:black">Obavijesti</a></li>
						
						
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<?php if(isset($_SESSION['is_logged_in'])) : ?>
						<li><a href="#">Dobrodošli <?php echo $_SESSION['user_data']['name'] ?></a></li>
						<li><a href="<?php echo ROOT_URL; ?>shares/add">Obavijest</a></li>
						<li><a href="<?php echo ROOT_URL; ?>shares/upload">Formulari</a></li>
						<li><a href="<?php echo ROOT_URL; ?>users/logout">Odjava</a></li>
					  <?php endif; ?>
					  </ul>
				</div>
			</div>
		</nav>
    
    	<!-- Top content -->
      <div class="top-content">
        	<div class="container">
				<div class="row">
					<div class="col-sm-12 text wow fadeInLeft">
						
						</div>
					</div>
				</div>
        </div>
        
        <!-- Features -->
        <div class="container">

			<div class="row">
			  <?php Messages::display(); ?>
			<?php
		  require($view);
		  ?>
			</div>
	  
		  </div>
        <!-- Footer -->
        <footer>
	        <div class="container">
	        	<div class="row">
	        		<div class="col-sm-12 footer-copyright">
                    	J.P. "MARECO" d.o.o. Neum
                    </div>
                </div>
	        </div>
        </footer>


        <!-- Javascript -->
        <script src="<?php echo ROOT_PATH; ?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo ROOT_PATH; ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo ROOT_PATH; ?>assets/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo ROOT_PATH; ?>assets/js/wow.min.js"></script>
        <script src="<?php echo ROOT_PATH; ?>assets/js/retina-1.1.0.min.js"></script>
        <script src="<?php echo ROOT_PATH; ?>assets/js/waypoints.min.js"></script>
        <script src="<?php echo ROOT_PATH; ?>assets/js/scripts.js"></script>

    </body>

</html>