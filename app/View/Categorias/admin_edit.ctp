<div class="row">
	<div class="col s12 m10 offset-m1">
		<div class="card">
			<div class="card-content">
				<div class="card-title">Editar categoría</div>
				<?=$this->Form->create()?>
				<?=$this->Form->input("id",['default'=>$categoria['Categoria']['id']])?>
				<?=$this->Form->input("nombre",['default'=>$categoria['Categoria']['nombre']])?>
				<?=$this->Form->input("nombre_amigable",['default'=>$categoria['Categoria']['nombre_amigable']])?>
				<?=$this->Form->input("padre",['empty'=>true,'options'=>$lstCatego,'default'=>$categoria['Categoria']['padre']])?>
				<?=$this->Form->input("visible",['default'=>$categoria['Categoria']['visible']])?>
				<?=$this->Form->end(["class"=>"btn","label"=>"Guardar"])?>
			</div>
		</div>

		<div class="card">
			<div class="card-content">
				<div class="card-title">Listado de categorías actual</div>
				<table>
					<tr>
						<th>Orden</th>
						<th>Nombre</th>
						<th>Padre</th>
						<th>Visibilidad</th>
					</tr>
					<?php foreach($data as $d):?>
						<tr>
							<td><?=$d['Categoria']['orden']?></td>
							<td><?=$d['Categoria']['nombre']?></td>
							<td><?=$d['Categoria']['padre']?></td>
							<td><?=$d['Categoria']['visible']?></td>
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
