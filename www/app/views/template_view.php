<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Simple webcam snapshoot service">
  <meta name="author" content="lseema">

  <title>CAMAGRU - webcam snap</title>

  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/small-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Camagru</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Snap">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="navbar" id="action-bar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="link" href="#">Login
            </a>
          </li>
        </ul>
      </div>
  </nav>
    <!-- Page Content -->
	<div class="container">
		<?php include 'app/views/'.$content_view; ?>
	</div>
  	<!-- /.container -->

	<!-- Footer -->
	<footer class="py-5 bg-dark footer">
		<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; lseema <?php echo date('Y'); ?></p>

		</div>
		<!-- /.container -->
	</footer>

</body>
</html>
