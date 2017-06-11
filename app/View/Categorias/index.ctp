<style>
	.peque{
		overflow:hidden;
	}
	.peque h5{
		font-size: 105%;
		margin-top: 0px;
	}
	.peque p{
		font-size: 80%;
		text-align: justify;
	}
</style>
<!--    Galería de las últimas cuatro notas    -->
<div class="row hide-on-small-only">
	<div class="col m2 s12 peque">
	<?php if(isset($editorial['Nota'])): ?>
		<h5><?=$editorial['Nota']['titulo']?></h5>
		<p><?=nl2br($editorial['Nota']['resumen'])?></p>
	<?php endif; ?>
	</div>
	<div class="col m6 s12" id="elmaximo">
		<div class="slider">
			<ul class="slides">
				<?php foreach($ultimos as $u):?>
					<li>
						<a href="/nota/<?=$u['Nota']['ruta']?>">
							<img src="<?=$u['Nota']['imagen_de_portada']?>">
							<div class="caption center-align">
								<h4><?=$u['Nota']['titulo']?></h4>
							</div>
						</a>
					</li>
				<?php endforeach;?>
			</ul>
		</div>
	</div>
	<!-- Las mismas noticias, pero en cuadritos -->
	<div class="col m4">
		<div class="row">
			<?php foreach($ultimos as $u):?>
				<div class="col s6">
					<a class="altura" data-fondo="<?=$u['Nota']['imagen_de_portada']?>" href="/nota/<?=$u['Nota']['ruta']?>">
						<span><?=$u['Nota']['titulo']?></span>
					</a>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</div>

<div class="row">
	<div class="col s12 ajaxload" data-ajax="/anuncios/random/5"></div>
</div>
<!--                Listado de categorías                 -->

<div class="row">
	<div class="col m9 s12">
		<?php foreach ($categorias as $cat):?>
			<?php if(isset($cat['Nota'][0])): ?>
				<div class="row">
					<div class="col s12">
						<p class="titulocategoria">
							<a href="/categorias/ver/<?=$cat['Categoria']['id']?>"><?=$cat['Categoria']['nombre']?></a>
						</p>
					</div>
					<!-- PRIMERA NOTA; LA MAS GRANDE -->
					<?php $primero = $cat['Nota'][0] ?>
					<div class="col m7 hide-on-small-only">
						<a href="/nota/<?=$primero['ruta']?>" class="altura" data-fondo="<?=$primero['imagen_de_portada']?>" style="height: 400px">
							<h5><?=$primero['titulo']?></h5>
						</a>
					</div>
					<?php $j=0?>
					<?php foreach($cat['Nota'] as $nota):?>
						<?php if(($j++)==0):?>
							<div class="col m5 notitas hide-on-med-and-up">
						<?php else:?>
							<div class="col m5 notitas">
						<?php endif;?>
							<div class="row" style="margin-bottom: 0px;">
								<a href="/nota/<?=$nota['ruta']?>">
									<div class="col s4">
										<img src="<?=$nota['imagen_de_portada']?>" alt="" class="responsive-img">
									</div>
									<div class="col s8 chico">
										<?=$nota['titulo']?>
									</div>
								</a>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>

	<?=$this->Element('barralateral')?>
</div>
<script>
	$(".peque").height($("#elmaximo").height())
</script>
