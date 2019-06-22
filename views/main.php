<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>J.P. "Mareco"</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo ROOT_PATH; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo ROOT_PATH; ?>assets/css/business-frontpage.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/main.css">
  <link href="<?php echo ROOT_PATH; ?>assets/js/table.js" rel="stylesheet">
  <script src="https://kit.fontawesome.com/543c89354c.js"></script>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Mareco</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Obavijesti</a>
          </li>
          <?php if(isset($_SESSION['is_logged_in'])) : ?>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dobrodošli <?php echo $_SESSION['user_data']['name'] ?>
        </a>
						<ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo ROOT_URL; ?>shares/add">Obavijest</a></li>
              <li><a class="dropdown-item" href="<?php echo ROOT_URL; ?>shares/upload">File upload</a></li>
              <div class="dropdown-divider"></div>
							<li><a class="dropdown-item" href="<?php echo ROOT_URL; ?>users/logout">Logout</a></li>
						</ul>
					</li>
          <?php endif; ?>  
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <small class="display-4 text-white mt-5 mb-2"></small>
          </div>
      </div>
    </div>
  </header>

  <div class="container">
  <?php Messages::display(); ?>
			<?php
			require($view);
			
			?>
</div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-info">
    <div class="container">
      <p class="m-0 text-center text-white"><a>Copyright &copy; Mareco 2019</a></p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo ROOT_PATH; ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo ROOT_PATH; ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
