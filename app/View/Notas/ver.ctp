<?php
	$this->Html->meta(['name'	=>	'Title',		'value'	=>	$nota['Nota']['titulo']],'',['inline' => false]);
	$this->Html->meta(['name'	=>	'Description',	'value'	=>	$nota['Nota']['resumen']],'',['inline' => false]);
	$this->Html->meta(['name'	=>	'Author',		'value'	=>	'@TestigoBajio'],'',['inline' => false]);
	$this->Html->meta(['name'	=>	'Image',		'value'	=>	'http://testigonewsbajio.mx'.$nota['Nota']['imagen_de_portada']],'',['inline' => false]);

	$this->Html->meta(['name'	=>	'twitter:card',			'value'	=>	'summary'],'',['inline' => false]);
	$this->Html->meta(['name'	=>	'twitter:site',			'value'	=>	'@TestigoBajio'],'',['inline' => false]);
	$this->Html->meta(['name'	=>	'twitter:title',		'value'	=>	$nota['Nota']['titulo']],'',['inline' => false]);
	$this->Html->meta(['name'	=>	'twitter:description',	'value'	=>	substr($nota['Nota']['resumen'],0,199)],'',['inline' => false]);
	$this->Html->meta(['name'	=>	'twitter:creator',		'value'	=>	'@TestigoBajio'],'',['inline' => false]);
	$this->Html->meta(['name'	=>	'twitter:image',		'value'	=>	'http://testigonewsbajio.mx'.$nota['Nota']['imagen_de_portada']],'',['inline' => false]);

	$this->Html->meta(['property'	=>	'og:url',			'value'	=>	'http://testigonewsbajio.mx/nota/'.$nota['Nota']['ruta']],'',['inline'=>false]);
	$this->Html->meta(['property'	=>	'og:type',			'value'	=>	'article'],'',['inline'=>false]);
	$this->Html->meta(['property'	=>	'og:title',			'value'	=>	$nota['Nota']['titulo']],'',['inline'=>false]);
	$this->Html->meta(['property'	=>	'og:description',	'value'	=>	$nota['Nota']['resumen']],'',['inline'=>false]);
	$this->Html->meta(['property'	=>	'og:image',			'value'	=>	'http://testigonewsbajio.mx'.$nota['Nota']['imagen_de_portada']],'',['inline'=>false]);
	$this->Html->meta(['property'	=>	'og:site_name',		'value'	=>	'Testigo News Bajío'],'',['inline'=>false]);
?>

<div class="row">
	<div class="col s12 m9">
		<div class="row">
			<div class="col s12">
				<h4><?=$nota['Nota']['titulo']?></h4>
				<p>
					<img src="<?=$nota['Nota']['imagen_de_portada']?>" width=1>
					por <strong><?=$nota['User']['nombre'].'</strong> el '.$nota['Nota']['fecha_de_publicacion']?>
					en <a href="/categorias/ver/<?=$nota['Categoria']['id']?>"><?=$nota['Categoria']['nombre']?></a>
				</p>
				<img src="<?=$nota['Nota']['imagen_de_portada']?>" height="400" class="img-altofijo">
				<div id="contenidodelanota">
					<?=nl2br($nota['Nota']['contenido'])?>
				</div>
				<div class="row">
					<div class="col s12 l6"><!-- AddToAny BEGIN -->
						<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
							<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
							<a class="a2a_button_facebook"></a>
							<a class="a2a_button_twitter"></a>
							<a class="a2a_button_google_plus"></a>
							<a class="a2a_button_pinterest"></a>
							<a class="a2a_button_copy_link"></a>
						</div>
						<script>
							var a2a_config = a2a_config || {};
							a2a_config.locale = "es";
						</script>
						<script async src="https://static.addtoany.com/menu/page.js"></script>
					</div>
					<div class="col s12 l6 ajaxload" data-ajax="/anuncios/random/2">
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
<script>
	$("#contenidodelanota p>img").addClass('responsive-img');
</script>
