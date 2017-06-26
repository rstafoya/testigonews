<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="UTF-8" />

	<?php echo $this->fetch('meta'); ?>

	<link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" href="/css/materialize.min.css" />
	<link rel="stylesheet" href="/css/estilo.css" />
	<link rel="stylesheet" href="/css/animate.css" />

	<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/js/materialize.min.js"></script>
	<script type="text/javascript" src="/js/general.js"></script>
	<script type="text/javascript" src="/js/js.cookie.js"></script>

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
							<li><a href="#">1 USD = <?php echo file_get_contents(Configure::read('App.www_root').'dolar.txt'); ?> MNX</a href="#"></li>
							<li><a href="http://fb.me/TestigoNewsBajio"><img src="/img/icono_facebook.png"></a></li>
							<li><a href="http://twitter.com/TestigoBajio"><img src="/img/icono_twitter.png" ></a></li>
						</ul>
					</div>
				</nav>
				<div class="hide-on-small-only col l2 ajaxload" data-ajax="/anuncios/random/4"></div>
				<div class="col s12 l8 center" id="logo"></div>
				<div class="hide-on-small-only col l2" style="height:154px; overflow: hidden;">


<a href="https://www.accuweather.com/es/mx/guanajuato/243360/weather-forecast/243360" class="aw-widget-legal">
</a><div id="awcc1497976156916" class="aw-widget-current"  data-locationkey="243360" data-unit="c" data-language="es" data-useip="false" data-uid="awcc1497976156916"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>


				</div>
				<div class="row">
					<div class="col s12 ajaxload" data-ajax="/categorias/ajax_menucategorias">
						<nav class="colortestigo"></nav>
					</div>
				</div>
			</div>
		</header>

		<main>
			<?php echo $this->fetch('content'); ?>
		</main>
	</div>
	<footer>
		<div class="row white-text" style="background:#001C3C;margin:0px;">
			<div class="col s12">
				<p class="center">
				Testigo. Todos los derechos reservados<br>
				<a href="mailto:contacto@testigonewsbajio.mx" style="display: block; text-align: center">
				<div style="background:url(http://testigonewsbajio.mx/img/contacto.png); width:70px; margin:auto; height:70px; background-size:cover;"></div><br>
				Contacto</a>
				</p>
			</div>
		</div>
	</footer>
	<?php echo $this->Session->flash(); ?>
</body>
</html>
