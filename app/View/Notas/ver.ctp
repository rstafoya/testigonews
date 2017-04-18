<div class="row">
	<div class="col s9">
		<div class="row">
			<div class="col s12">
				<h4><?=$nota['Nota']['titulo']?></h4>
				<p>por <strong><?=$nota['User']['nombre'].'</strong> el '.$nota['Nota']['fecha_de_publicacion']?></p>
				<img src="<?=$nota['Nota']['imagen_de_portada']?>" alt="" class="responsive-img">
				<div><?=nl2br($nota['Nota']['contenido'])?></div>
			</div>
		</div>
	</div>
	<?=$this->Element("barralateral")?>
</div>