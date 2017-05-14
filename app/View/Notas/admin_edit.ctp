<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<div class="card-title">Editar nota</div>
				<?=$this->Form->create()?>
				<?=$this->Form->input("id",['default'=>$notas['Nota']['id']])?>
				<div class="row">
					<?=$this->Form->input("titulo",['default'=>$notas['Nota']['titulo'],'div'=>'col s4'])?>
					<?=$this->Form->input("ruta",['default'=>$notas['Nota']['ruta'],'div'=>'col s4'])?>
					<?=$this->Form->input("user_id",['default'=>$notas['Nota']['user_id'],'div'=>'col s4'])?>
				</div>
				<div class="row">
					<?=$this->Form->input("imagen_de_portada",['default'=>$notas['Nota']['imagen_de_portada'],'div'=>'col s6'])?>
					<?=$this->Form->input("categoria_id",['default'=>$notas['Nota']['categoria_id'],'div'=>'col s6'])?>
				</div>
				<div class="row">
					<?=$this->Form->input("fecha_de_publicacion",['type'=>'text',"default"=>$notas['Nota']['fecha_de_publicacion'],'div'=>'col s6'])?>
					<?=$this->Form->input("fecha_final",['type'=>'text',"default"=>$notas['Nota']['fecha_final'],'div'=>'col s6'])?>
				</div>
				<?=$this->Form->input("resumen",['default'=>$notas['Nota']['resumen']])?>
				<span class="btn" id="imagenes">Imágenes</span>
				<iframe id="contenedor" src="/img/media/dir.php" frameborder="0" width="100%" height="800"></iframe>
				<?=$this->Form->input("contenido",["class"=>"wysiwygeditor","default"=>$notas['Nota']['contenido']])?>
				<?=$this->Form->end(['label'=>'Guardar','class'=>'btn'])?>
			</div>
		</div>
	</div>
</div>
<script>
	$("#contenedor").hide();
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
	$("#imagenes").click(function() {
		$("#contenedor").slideToggle()
	});

</script>
