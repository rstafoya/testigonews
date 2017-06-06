<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="UTF-8" />

	<link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" href="/css/materialize.min.css" />
	<link rel="stylesheet" href="/css/admin.css" />
	<link rel="stylesheet" href="/css/animate.css" />
	<link rel="stylesheet" href="/css/trumbowyg.min.css" />

	<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/js/materialize.min.js"></script>
	<script type="text/javascript" src="/js/admin.js"></script>
	<script type="text/javascript" src="/js/trumbowyg.min.js"></script>
	<script type="text/javascript" src="/js/es.js"></script>
	<title>Administrador del sistema</title>
</head>
<body>
	<nav class="orange">
		<div class="nav-wrapper">
			<a href="/admin/" class="brand-logo right">Testigo news</a>
			<ul class="left">
				<li><a href="/"><i class="material-icons left">home</i>Portada</a></li>
				<li><a href="/admin/categorias">Categorías</a></li>
				<li><a href="/admin/notas">Notas</a></li>
				<li><a href="/admin/anuncios">Anuncios</a></li>
				<li><a href="/admin/users">Usuarios</a></li>
				<li><a href="/logout">Salir</a></li>
			</ul>
		</div>
	</nav>
	<div class="container"><?php echo $this->fetch('content'); ?></div>

	<?php echo $this->Session->flash(); ?>
</body>
</html>
