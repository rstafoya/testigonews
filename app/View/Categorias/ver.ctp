<style>
	.resumen{
		font-size: 90%;
		color:#333;
	}
</style>
<?php $j = 1;?>
<div class="row">
	<div class="col m9 s12">
		<?php foreach($data['Nota'] as $nota):?>
			<div class="row" style="border-top: 1px solid rgb(160, 16, 39)">
				<div class="col s5">
					<img height="150" src="<?=$nota['imagen_de_portada']?>" alt="<?=$nota['titulo']?>" class="img-altofijo">
				</div>
				<div class="s7 resumen">
				<a href="/nota/<?=$nota['ruta']?>">
					<h5><?=$nota['titulo']?></h5>
				</a>
					<?=nl2br($nota['resumen'])?>
				</div>
			</div>
			<?php if(($j++)%3==0): ?>
				<div class="row">
					<div class="col s12 ajaxload" data-ajax="/anuncios/random/3"></div>
				</div>
			<?php endif;?>
		<?php endforeach;?>
	</div>
	<?=$this->Element('barralateral')?>
</div>
