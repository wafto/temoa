<!DOCTYPE html>
<html lang="es-MX">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="TEMOA, sistema de búsqueda de capacitación en IT para el Gobierno de la República">
		<meta name="author" content="WE ARE THE ROBOTS">

		<title>TEMOA</title>

		<!-- IE Fixes -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- IE Fixes -->
		
		<link rel="icon" href="favicon.ico">
		<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

		<!-- Theme Bootstrap -->
		<link rel="stylesheet" href="http://bootswatch.com/flatly/bootstrap.min.css">
		
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="/css/carousel.css" rel="stylesheet">
		<link href="/css/custom.css" rel="stylesheet">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="img/favicon.png">

	</head>

	<body>

		<!-- Header -->
		<header>

			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"> <img src="img/temoa.png" alt=""> </a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="/oferta-academica">Oferta Académica</a></li>
							<li><a href="/aliados">Aliados</a></li>
							<li><a href="/actualidad">Actualidad</a></li>
							<li><a href="/conocenos">Conócenos</a></li>
							<li><a href="/actualidad">Contáctanos</a></li>
							<li><a href="/acceder">Acceder</a></li>
							<li><a href="/registrarse">Registrarse</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>

	</header>
	<!-- Header -->

	<!-- Cotenido -->
	@yield('content')
	<!-- Cotenido -->

	<!-- Footer -->
	<div class="container ending">

	<div class="row clearfix">

	<div class="col-md-12 column">
		<div class="row clearfix">

			<div class="col-md-4 column">
				<h4>
				Quieres ser socio de capacitacion?
				</h4>
				<button type="button" class="btn btn-default">¡Enviar tu oferta educativa!</button>
			</div>

			<div class="col-md-4 column">
				<h4>
				Queremos conocer tus intereses!
				</h4>
				<button type="button" class="btn btn-default">Sugerir curso o diplomado </button>
			</div>

			<div class="col-md-4 column">
				<h4>
				Ayudanos a mejorar la plataforma!
				</h4>
				<button type="button" class="btn btn-default">¡Contáctanos!</button>
			</div>

		</div>
	</div>

	</div>

	<div class="row footer">

	<div class="col-md-6 col-md-offset-2">

		<p>&copy;TEMOA, Creative Commons & GNU Public License, 2014. Desarrollado por We Are The Robots</p> 

	</div>

	<div class="col-md-4">

		<p><a href="#">Equipo</a> &middot; <a href="#">Prensa</a> &middot; <a href="#">Aviso de Privacidad</a></p>

	</div>

	</div>

	</div>
	<!-- Footer -->



	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="/js/carousels.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	</body>
</html>