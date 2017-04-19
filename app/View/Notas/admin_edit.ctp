<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<div class="card-title">Editar nota</div>
				<?php
				echo $this->Form->create();
				echo $this->Form->input("id",['default'=>$notas['Nota']['id']]);
				echo $this->Form->input("titulo",['default'=>$notas['Nota']['titulo']]);
				echo $this->Form->input("ruta",['default'=>$notas['Nota']['ruta']]);
				echo $this->Form->input("imagen_de_portada",['default'=>$notas['Nota']['imagen_de_portada']]);
				echo $this->Form->input("resumen",['default'=>$notas['Nota']['resumen']]);
				echo $this->Form->input("categoria_id",['default'=>$notas['Nota']['categoria_id']]);
				echo $this->Form->input("contenido",["class"=>"wysiwygeditor","default"=>$notas['Nota']['contenido']]);
				echo $this->Form->input("fecha_de_publicacion",['type'=>'text',"default"=>$notas['Nota']['fecha_de_publicacion']]);
				echo $this->Form->input("fecha_final",['type'=>'text',"default"=>$notas['Nota']['fecha_final']]);
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
