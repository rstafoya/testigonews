<div class="row">
	<div class="col s12 l6 offset-l3">
		<div class="card grey lighten-3">
			<div class="card-content">
			<div class="card-title">Login</div>
				<?=$this->Form->create()?>
				<?=$this->Form->input('username')?>
				<?=$this->Form->input('password')?>
				<?=$this->Form->end(['label'=>'Login','class'=>'btn colortestigo'])?>
			</div>
		</div>
	</div>
</div>
<script>
	$("#UserUsername").focus()
</script>
