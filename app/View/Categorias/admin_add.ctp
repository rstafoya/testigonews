<div class="row">
	<div class="col s12 m10 offset-m1">
		<div class="card">
			<div class="card-content">
				<div class="card-title">Crear una nueva categoría</div>
				<?=$this->Form->create()?>
				<?=$this->Form->input("nombre")?>
				<?=$this->Form->input("nombre_amigable")?>
				<?=$this->Form->input("orden")?>
				<?=$this->Form->input("padre",['options'=>$lstCatego,'empty'=>true])?>
				<?=$this->Form->end(["class"=>"btn","label"=>"Agregar"])?>
			</div>
		</div>

		<div class="card">
			<div class="card-content">
				<div class="card-title">Listado de categorías actual</div>
				<table>
					<tr>
						<th>Id</th>
						<th>Orden</th>
						<th>Nombre</th>
						<th>Padre</th>
					</tr>
					<?php foreach($data as $d):?>
						<tr>
							<td><?=$d['Categoria']['id']?></td>
							<td><?=$d['Categoria']['orden']?></td>
							<td><?=$d['Categoria']['nombre']?></td>
							<td><?=$d['Categoria']['padre']?></td>
						</tr>
					<?php endforeach;?>
				</table>
			</div>
		</div>
	</div>
</div>
<script>
	$("label").addClass('active');
</script>