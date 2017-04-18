<div class="row">
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
	echo $this->Form->end("Guardar nota nueva");
?>
</div>
<script>
	$("label").addClass('active');
	$("#NotaFechaDePublicacion").attr('type', 'date');
	$("#NotaFechaFinal").attr('type', 'date');
	$("#NotaTitulo").keyup(function(event) {
		$("#NotaRuta").val($("#NotaTitulo").val().toLowerCase())
		$("#NotaRuta").prev().addClass('active');
	});
</script>
