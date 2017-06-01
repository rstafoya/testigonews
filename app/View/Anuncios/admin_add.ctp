<style>
	.botonfixed{
		position: fixed;
		left: 20px;
		top: 200px;
	}
	#contenedor{
		margin-top: 5px;
	}
</style>
<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<div class="card-title">Agregar un anuncio nuevo</div>
				<?=$this->Form->create()?>
				<?=$this->Form->input('nombre')?>

				<span class="btn" id="imagenes">Imágenes <i class="material-icons right">archive</i></span>
				<iframe id="contenedor" src="/img/media/dir.php" frameborder="0" width="100%" height="500"></iframe>

				<?=$this->Form->input('imagen')?>
				<?=$this->Form->input('codigo')?>
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

	$("#contenedor").hide();
	$("#imagenes").click(function(){$("#contenedor").slideToggle()});	
</script>