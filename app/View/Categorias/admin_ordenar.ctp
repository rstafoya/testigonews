<?php
$j=0;
?><div class="row">
	<div class="col s12 m8 offset-m2">
		<div class="card">
			<div class="card-content">
				<div class="card-title">Ordenar categorías</div>
				Arrastre para modificar el orden
				<?=$this->Form->create('Categorias')?>
				<ul class="collection">
					<?php foreach($data as $cat):?>
					<li class="collection-item teal white-text">
						<?=$cat['Categoria']['nombre']?>
						<input type="hidden" value="<?=$cat['Categoria']['id']?>" name="data[<?=$j?>][Categoria][id]">
						<input type="hidden" value="<?=$cat['Categoria']['orden']?>" name="data[<?=$j++?>][Categoria][orden]" class="orden">
					</li>
					<?php endforeach;?>
				</ul>
				<?=$this->Form->end(['label'=>'Guardar cambios','class'=>'btn'])?>
			</div>
		</div>
	</div>
</div>
<script>
	$(".collection").sortable({update:function(){
		$(".orden").each(function(index, el) {
			$(this).val(index)
		});
	}});
</script>