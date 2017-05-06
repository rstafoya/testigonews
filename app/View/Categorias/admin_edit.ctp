<div class="row">
	<div class="col s12 m10 offset-m1">
		<div class="card">
			<div class="card-content">
				<div class="card-title">Crear una nueva categoría</div>
				<?=$this->Form->create()?>
				<?=$this->Form->input("id",['default'=>$categoria['Categoria']['id']])?>
				<?=$this->Form->input("nombre",['default'=>$categoria['Categoria']['nombre']])?>
				<?=$this->Form->input("nombre_amigable",['default'=>$categoria['Categoria']['nombre_amigable']])?>
				<?=$this->Form->input("padre",['default'=>$categoria['Categoria']['padre']])?>
				<?=$this->Form->end(["class"=>"btn","label"=>"Guardar"])?>
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
