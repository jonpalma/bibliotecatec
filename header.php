<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker3.standalone.min.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
<nav class="navbar biblioteca-header">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Logo"></a>
		</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="main-nav">
		<ul class="nav navbar-nav navmenu">
			<li><a href="index.php">Inicio</a></li>
			<?php if($loggedin) { ?>
				<li><a href="library.php">Biblioteca</a></li>
				<li><a href="history.php">Historial</a></li>
				<li><a href="index.php">Logout</a></li>
			<?php } ?> 
		</ul>

		<?php if($loggedin) { ?>
		<form class="navbar-form navbar-right visible-lg-inline-block visible-md-inline-block" role="search" action="library.php#library">
			<div class="form-group">
				<input id="headersearch" type="text" class="form-control" placeholder="Buscar por...">
				<button class="search-icon"></button>
			</div>
			<!-- Search dropdown is activated via javascript $('input#headersearch').focusout(); -->
			<div class="search-dropdown">
				<div>
					<p>Título del libro</p>
					<img src="img/icons/book.png">
				</div>
				<div>
					<p>Autor</p>
					<img src="img/icons/autor.png">
				</div>
				<div>
					<p>Folio</p>
					<img src="img/icons/book2.png" style="margin-top: 4px;">
				</div>
			</div>
		</form>
		<?php } ?>
		</div><!-- /.navbar-collapse -->
		<?php if($loggedin) { ?>
			<a href="profile.php"><div class="profile-navbar">
					<p>Claudia R.</p>
					<img src="img/profile/profile-picture-mini.png" alt="profile">
				</div>
			</a>
		<?php } ?>
	</div><!-- /.container-fluid -->
</nav>