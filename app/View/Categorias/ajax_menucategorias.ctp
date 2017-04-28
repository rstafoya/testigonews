<?php
	echo '<li><a href="/">Inicio</a></li>';
	foreach ($categorias as $value) {
		echo '<li><a href="/categorias/ver/'.$value['Categoria']['id'].'">'.$value['Categoria']['nombre'].'</a></li>';
	}
