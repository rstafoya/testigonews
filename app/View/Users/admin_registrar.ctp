<div class="row">
	<div class="col s12 l6 offset-l3">
		<div class="card white">
			<div class="card-content">
			<div class="card-title">Registrar nuevo usuario</div>
				<?=$this->Form->create()?>
				<?=$this->Form->input('username')?>
				<?=$this->Form->input('password')?>
				<?=$this->Form->input('email')?>
				<?=$this->Form->input('nombre')?>
				<?=$this->Form->input('administrador')?>
			</div>
				<div class="card-action"><?=$this->Form->end(['Registrar'=>'Login',"class"=>"btn"])?></div>
		</div>
	</div>
</div>