<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<div class="card-title">Agregar nueva nota</div>
				<?php
				echo $this->Form->create();
				echo $this->Form->input("titulo");
				echo $this->Form->input("ruta");
				echo $this->Form->input("imagen_de_portada");
				echo $this->Form->input("resumen");
				echo $this->Form->input("categoria_id");
				echo $this->Form->input("contenido",["class"=>"wysiwygeditor"]);
				echo $this->Form->input("fecha_de_publicacion",['type'=>'text','default'=>date('Y-m-d')]);
				echo $this->Form->input("fecha_final",['type'=>'text','default'=>'3000-01-01']);
				echo $this->Form->end(['label'=>'Guardar','class'=>'btn']);
				?>
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
