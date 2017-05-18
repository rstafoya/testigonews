<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="UTF-8" />

	<link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" href="/css/materialize.min.css" />
	<link rel="stylesheet" href="/css/estilo.css" />
	<link rel="stylesheet" href="/css/animate.css" />

	<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/js/materialize.min.js"></script>
	<script type="text/javascript" src="/js/general.js"></script>

	<title><?php echo $this->fetch('title'); ?></title>
</head>
<body>
	<div class="container">
		<header>
			<div class="row cabacera">
				<nav class="barracontacto hide-on-small-only">
					<div class="nav-wrapper">
						<ul class="left">
							<li><a href="#" id="lafecha"></a></li>
							<li><a href="mailto:contacto@testigonewsbajio.mx">Contacto</a></li>
						</ul>
						<ul class="right">
							<li><a href="#"><img src="/img/icono_facebook.png"></a></li>
							<li><a href="#"><img src="/img/icono_twitter.png" ></a></li>
						</ul>
					</div>
				</nav>
				<div class="col l2 ajaxload" data-ajax="/anuncios/random/4"></div>
				<div class="col s12 l8 center">
					<a href="/"><img class="responsive-img" src="/img/logotestigo.png"></a>
				</div>
				<div class="col l2">
					<span style="display: block !important; text-align: center; font-family: sans-serif; font-size: 12px;">
						<a href="http://espanol.wunderground.com/cgi-bin/findweather/getForecast?query=zmw:00000.63.76005&bannertypeclick=wu_blueglass" title="Guanajuato, México Weather Forecast" target="_blank">
							<img src="http://weathersticker.wunderground.com/weathersticker/cgi-bin/banner/ban/wxBanner?bannertype=wu_blueglass_metric&airportcode=MMML&ForcedCity=Guanajuato&ForcedState=México&wmo=76005&language=SP" alt="Find more about Weather in Guanajuato, MX"/>
						</a>
					</span>
				</div>
				<div class="row">
					<div class="col s12 ajaxload" data-ajax="/categorias/ajax_menucategorias"></div>
				</div>
			</div>
		</header>

		<main>
			<?php echo $this->fetch('content'); ?>
		</main>

		<footer>
			<div class="row white-text" style="background:#001C3C;">
				<div class="col s12">
					<p class="center">Testigo. Todos los derechos reservados</p>
				</div>
			</div>
		</footer>
	</div>
	<?php echo $this->Session->flash(); ?>
</body>
</html>