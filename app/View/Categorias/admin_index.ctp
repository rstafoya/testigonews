<div class="row">
	<div class="col s12 m8 offset-m2">
		<div class="card">
			<div class="card-content">
				<ul class="collection with-header">
					<li class="collection-item"> <h5>Categorías</h5></li>
					<?php foreach($categorias as $cat):?>
						<li class="collection-item">
							<a href="/admin/categorias/edit/<?=$cat['Categoria']['id']?>">
								<?=$cat['Categoria']['nombre']?>
							</a>
						</li>
					<?php endforeach;?>
				</ul>
			</div>
			<div class="card-action">
				<a href="/admin/categorias/add">Agregar una categoría nueva</a>
				<a href="/admin/categorias/ordenar">Reordenar</a>
			</div>
		</div>
	</div>
</div>
