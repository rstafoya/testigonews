<?php $j = 1;?>
<div class="row">
	<div class="col m9 s12">
		<?php foreach($data['Nota'] as $nota):?>
			<div class="row">
				<div class="col s12">
					<a href="/notas/ver/<?=$nota['id']?>">
						<h4><?=$nota['titulo']?></h4>
						<img height="400" src="<?=$nota['imagen_de_portada']?>" alt="<?=$nota['titulo']?>" class="img-altofijo">
					</a>
					<div>
						<?=nl2br($nota['resumen'])?>
					</div>
				</div>
			</div>
			<?php if(($j++)%3==0): ?>
				<div class="row">
					<div class="col s12"><?=file_get_contents('http://localhost:8383/anuncios/random/3')?></div>
				</div>
			<?php endif;?>
		<?php endforeach;?>
	</div>
	<?=$this->Element('barralateral')?>
</div>
