<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<div class="card-title">Editar nota</div>
				<?=$this->Form->create()?>
				<ul class="collapsible popout">
					<li>
						<div class="collapsible-header teal lighten-1">Propiedades de la nota</div>
						<div class="collapsible-body">
							<?=$this->Form->input("id",['default'=>$notas['Nota']['id']])?>
							<div class="row">
								<?=$this->Form->input("titulo",['default'=>$notas['Nota']['titulo'],'div'=>'col s6'])?>
								<?=$this->Form->input("ruta",['default'=>$notas['Nota']['ruta'],'div'=>'col s6'])?>
							</div>
							<div class="row">
								<?=$this->Form->input("imagen_de_portada",['default'=>$notas['Nota']['imagen_de_portada'],'div'=>'col s6'])?>
								<?=$this->Form->input("categoria_id",['default'=>$notas['Nota']['categoria_id'],'div'=>'col s6'])?>
							</div>
							<div class="row">
								<?=$this->Form->input("fecha_de_publicacion",['type'=>'text',"default"=>$notas['Nota']['fecha_de_publicacion'],'div'=>'col s6'])?>
								<?=$this->Form->input("fecha_final",['type'=>'text',"default"=>$notas['Nota']['fecha_final'],'div'=>'col s6'])?>
							</div>
						</div>
					</li>
					<li>
						<div class="collapsible-header teal lighten-1">Contenido</div>
						<div class="collapsible-body">
							<?=$this->Form->input("resumen",['default'=>$notas['Nota']['resumen']])?>
							<?=$this->Form->input("contenido",["class"=>"wysiwygeditor","default"=>$notas['Nota']['contenido']])?>
						</div>
					</li>
				</ul>
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
