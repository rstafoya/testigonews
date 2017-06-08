<div class="row">
	<div class="col s12 l6 offset-l3">
		<div class="card white">
			<div class="card-content">
			<div class="card-title">Ingrese la nueva contrasaña</div>
				<?=$this->Form->create()?>
				<?=$this->Form->input('password',['default'=>''])?>
				<?=$this->Form->input('confirmapassword',['default'=>'','type'=>'password','label'=>'Confirmar password'])?>
			</div>
				<div class="card-action"><?=$this->Form->end(['label'=>'Confirmar',"class"=>"btn"])?></div>
		</div>
	</div>
</div>