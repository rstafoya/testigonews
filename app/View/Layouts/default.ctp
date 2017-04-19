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
				<div class="col s12 center">
					<a href="/"><img src="/img/logotestigo.png"></a>
				</div>
				<div class="col s12">
					<nav class="colortestigo">
						<div class="nav-wrapper">
							<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
							<ul class="left hide-on-med-and-down menucategorias">
								<li><a href="index.html">Inicio</a></li>
								<li><a href="categoria.html">Política</a></li>
								<li><a href="categoria.html">Deportes</a></li>
								<li><a href="categoria.html">Entretenimiento</a></li>
								<li><a href="categoria.html">Sucesos</a></li>
								<li><a href="categoria.html">Editorial semanal</a></li>
								<li><a href="categoria.html">La entrevista</a></li>
							</ul>
							<ul class="side-nav menucategorias" id="mobile-demo">
								<li><a href="index.html">Inicio</a></li>
								<li><a href="categoria.html">Política</a></li>
								<li><a href="categoria.html">Deportes</a></li>
								<li><a href="categoria.html">Entretenimiento</a></li>
								<li><a href="categoria.html">Sucesos</a></li>
								<li><a href="categoria.html">Editorial semanal</a></li>
								<li><a href="categoria.html">La entrevista</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>

		<main>
			<?php echo $this->fetch('content'); ?>
		</main>

		<footer>
			<div class="row repite white-text" style="background:#001C3C;" data-repite=3>
				<div class="col s4">
					<h5>Columna</h5>
					<p>Lorem ipsum dolor sit amet. Ipsa officiis quasi error aperiam eum suscipit cum laboriosam, eius harum eos aspernatur ea obcaecati vero est veniam nostrum numquam distinctio rerum.</p>
				</div>
			</div>
		</footer>
	</div>

	<?php echo $this->element('sql_dump'); ?>
	<?php echo $this->Session->flash(); ?>
</body>
</html>
