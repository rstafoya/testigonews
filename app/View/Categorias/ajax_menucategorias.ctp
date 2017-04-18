<?php
	echo '<li><a href="/">Inicio</a></li>';
	foreach ($categorias as $value) {
		echo '<li><a href="/'.$value['Categoria']['nombre_amigable'].'">'.$value['Categoria']['nombre'].'</a></li>';
	}
