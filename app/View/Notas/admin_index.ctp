<div class="card">
	<div class="card-content">
	<div class="card-title">Notas</div>
		<table id="listado" class="highlight">
			<thead>
				<tr>
					<th>Título</th>
					<th>Autor</th>
					<th>Categoría</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($notas as $nota): ?>
				<tr>
					<td><?=substr($nota['Nota']['titulo'],0,100)?></td>
					<td><?=$nota['User']['nombre']?></td>
					<td><?=$nota['Categoria']['nombre']?></td>
					<td>
						<a class="btn small" href="/nota/<?=$nota['Nota']['ruta']?>" target="_blank"><i class="material-icons">visibility</i></a>
						<a class="btn small" href="/admin/notas/edit/<?=$nota['Nota']['id']?>"><i class="material-icons">edit</i></a>
						<a class="btn small" href="/admin/notas/delete/<?=$nota['Nota']['id']?>" onclick="return(confirm('¿Está seguro?'))"><i class="material-icons">delete</i></a>
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
	var reciente = <?=json_encode($ultimo)?>

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
