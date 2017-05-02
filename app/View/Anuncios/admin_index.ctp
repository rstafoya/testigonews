<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<div class="card-title">Anuncios</div>
				<table>
					<tr>
						<th></th>
						<th>Nombre</th>
						<th>Inicio</th>
						<th>Final</th>
						<th>Tipo</th>
						<th>Acciones</th>
					</tr>
					<?php foreach($data as $dat):?>
						<?php
						$hoy = time();
						$inicio = strtotime($dat['Anuncio']['inicio']);
						$final = strtotime($dat['Anuncio']['final']);
						$color = '';
						if ($hoy-$inicio<0) {
							$color = "yellow-text";
						}
						if ($hoy-$inicio>0 and $hoy-$final<0) {
							$color = "green-text";
						}
						if ($hoy-$final>0) {
							$color = "red-text";
						}
						?>
						<tr>
							<td><i class="material-icons <?=$color?>">date_range</i></td>
							<td><?=$dat['Anuncio']['nombre']?></td>
							<td><?=$dat['Anuncio']['inicio']?></td>
							<td><?=$dat['Anuncio']['final']?></td>
							<td><?=$dat['Tipo']['nombre']?></td>
							<td>
								<a href="/admin/anuncios/edit/<?=$dat['Anuncio']['id']?>" class="btn small">Editar</a>
								<a href="/admin/anuncios/delete/<?=$dat['Anuncio']['id']?>" class="btn small" onclick="return(confirm('¿Está seguro?'))">Borrar</a>
							</td>
						</tr>
					<?php endforeach;?>
				</table>
			</div>
			<div class="card-action">
				<a href="/admin/anuncios/add">Agregar un nuevo anuncio</a>
			</div>
		</div>
	</div>
	<div class="col l5 m5 s12">
		<div class="card-panel">
			<i class="material-icons yellow-text">date_range</i> Pendiente de publicar<br>
			<i class="material-icons green-text">date_range</i> Actualmente publicado<br>
			<i class="material-icons red-text">date_range</i> Terminó su publicación<br>
		</div>
	</div>
</div>