<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<div class="card-title">Agregar un anuncio nuevo</div>
				<?=$this->Form->create()?>
				<?=$this->Form->input('id',['default'=>$data['Anuncio']['id']])?>
				<?=$this->Form->input('nombre',['default'=>$data['Anuncio']['nombre']])?>
				<?=$this->Form->input('imagen',['default'=>$data['Anuncio']['imagen']])?>
				<?=$this->Form->input('url',['default'=>$data['Anuncio']['url']])?>
				<?=$this->Form->input('inicio',['type'=>'text','default'=>date('Y-m-d')])?>
				<?=$this->Form->input('final',['type'=>'text','default'=>date('Y-m-d')])?>
				<?=$this->Form->input('tipo_id',['default'=>$data['Anuncio']['tipo_id']])?>
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