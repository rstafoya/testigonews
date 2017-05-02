<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<div class="card-title">Agregar un anuncio nuevo</div>
				<?=$this->Form->create()?>
				<?=$this->Form->input('nombre')?>
				<?=$this->Form->input('imagen')?>
				<?=$this->Form->input('url')?>
				<?=$this->Form->input('inicio',['type'=>'text','default'=>date('Y-m-d')])?>
				<?=$this->Form->input('final',['type'=>'text','default'=>date('Y-m-d')])?>
				<?=$this->Form->input('tipo_id')?>
				<?=$this->Form->end(['label'=>'Agregar','class'=>'btn'])?>
			</div>
		</div>
	</div>
</div>
<script>
	$("label").addClass('active');
	$("#AnuncioInicio").attr('type','date');
	$("#AnuncioFinal").attr('type','date');
</script>