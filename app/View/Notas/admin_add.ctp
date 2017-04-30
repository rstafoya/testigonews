<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<div class="card-title">Agregar nueva nota</div>
				<?=$this->Form->create()?>
				<div class="row">
					<?=$this->Form->input("titulo",['div'=>'col s6'])?>
					<?=$this->Form->input("ruta",['div'=>'col s6'])?>
				</div>
				<div class="row">
					<?=$this->Form->input("imagen_de_portada",['div'=>'col s6'])?>
					<?=$this->Form->input("categoria_id",['div'=>'col s6'])?>
				</div>
				<div class="row">
					<?=$this->Form->input("fecha_de_publicacion",['type'=>'text','default'=>date('Y-m-d'),'div'=>'col s6'])?>
					<?=$this->Form->input("fecha_final",['type'=>'text','default'=>'3000-01-01','div'=>'col s6'])?>
				</div>
				<?=$this->Form->input("resumen")?>
				<?=$this->Form->input("contenido",["class"=>"wysiwygeditor"])?>
				<?=$this->Form->end(['label'=>'Guardar','class'=>'btn'])?>
			</div>
		</div>
	</div>
</div>
<script>
	$("label").addClass('active');
	$("#NotaFechaDePublicacion").attr('type', 'date');
	$("#NotaFechaFinal").attr('type', 'date');
	$("#NotaTitulo").keyup(function(event) {
		var ruta = $("#NotaTitulo").val().toLowerCase()
		ruta = ruta.replace(/[^a-zA-Z ]/g, "");
		ruta = ruta.replace(/ /g,"_")
		$("#NotaRuta").val(ruta)
		$("#NotaRuta").prev().addClass('active');
	});
</script>
