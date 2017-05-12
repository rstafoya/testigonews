<div class="row">
	<div class="col s12 m9">
		<div class="row">
			<div class="col s12">
				<h4><?=$nota['Nota']['titulo']?></h4>
				<p>por <strong><?=$nota['User']['nombre'].'</strong> el '.$nota['Nota']['fecha_de_publicacion']?></p>
				<img src="<?=$nota['Nota']['imagen_de_portada']?>" height="400" class="img-altofijo">
				<div>
					<?=nl2br($nota['Nota']['contenido'])?>
				</div>
				<div class="row">
					<div class="col s12 l6 ajaxload" data-ajax="http://localhost:8383/anuncios/random/2">
					</div>
				</div>
				<div class="comentarios">
					<?=$this->Element("disqus")?>
				</div>
			</div>
		</div>
	</div>
	<?=$this->Element("barralateral")?>
</div>
