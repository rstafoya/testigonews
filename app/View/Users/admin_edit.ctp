<div class="row">
	<div class="col s12 l6 offset-l3">
		<div class="card white">
			<div class="card-content">
			<div class="card-title">Editar usuario <strong><?=$data['User']['username']?></strong></div>
				<?=$this->Form->create()?>
				<?=$this->Form->input('id',['default'=>$data['User']['id']])?>
				<?=$this->Form->input('email',['default'=>$data['User']['email']])?>
				<?=$this->Form->input('nombre',['default'=>$data['User']['nombre']])?>
				<?=$this->Form->input('administrador',['default'=>$data['User']['administrador']])?>
			</div>
				<div class="card-action"><?=$this->Form->end(['label'=>'Guardar cambios',"class"=>"btn"])?></div>
		</div>
	</div>
</div>
<script>
	$(".error-message").addClass('animated rotateInDownLeft')
</script>