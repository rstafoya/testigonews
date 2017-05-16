<div class="card">
	<div class="card-content">
	<div class="card-title">Notas</div>
		<table id="listado">
			<thead>
				<tr>
					<th>Título</th>
					<th>Autor</th>
					<th>Categoría</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($notas as $nota): ?>
				<tr>
					<td><a href="/admin/notas/edit/<?=$nota['Nota']['id']?>"><?=substr($nota['Nota']['titulo'],0,70)?></a></td>
					<td><?=$nota['User']['nombre']?></td>
					<td><?=$nota['Categoria']['nombre']?></td>
					<td>
						<a class="btn small" href="/admin/notas/edit/<?=$nota['Nota']['id']?>">Modificar</a>
						<a class="btn small" href="/admin/notas/delete/<?=$nota['Nota']['id']?>" onclick="return(confirm('¿Está seguro?'))">Eliminar</a>
					</td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</div>
	<div class="card-action">
		<a href="/admin/notas/add">Agregar una nueva nota</a>
	</div>
</div>
<script>
	var j=0;
	var size = 20

	$("#listado").before('<ul class="pagination"></ul>');
	var pag = $("#listado").prev()

	$("#listado").find("tbody tr").each(function(index, el) {
		$(this).addClass('pagina'+j);
		if ((index+1) % size == 0) {
			pag.append('<li class="waves-effect hoverable"><a class="accionpaginacion" href="#!" data-pagina="'+j+'">'+(j+1)+'</a></li>')
			j++;
		}
	});
	pag.append('<li class="waves-effect hoverable"><a class="accionpaginacion" href="#!" data-pagina="'+j+'">'+(j+1)+'</a></li>')

	$(".accionpaginacion").click(function() {
		var esta = $(this).data('pagina')
		$("#listado tbody tr").hide();
		$(".pagina"+esta).show();
	});

	$("#listado tbody tr").hide();
	$(".pagina0").show();
	$("#listado .pagina0").show();
</script>
