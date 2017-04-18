<!--    Galería de las últimas cuatro notas    -->
<div class="row">
	<div class="col s7">
		<div class="slider">
			<ul class="slides">
				<?php foreach($ultimos as $u):?>
					<li>
						<a href="/notas/ver/<?=$u['Nota']['id']?>">
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
	<div class="col s5">
		<div class="row">
			<?php foreach($ultimos as $u):?>
				<div class="col s6">
					<a href="/notas/ver/<?=$u['Nota']['id']?>"><img src="<?=$u['Nota']['imagen_de_portada']?>" alt="" class="responsive-img"></a><br><br>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</div>

<!--                Listado de categorías                 -->

<div class="row">
	<div class="col s9">
		<?php foreach ($categorias as $cat):?>
			<?php if(isset($cat['Nota'][0])): ?>
				<div class="row">
					<div class="col s12">
						<p class="titulocategoria">
							<a href="/categorias/ver/<?=$cat['Categoria']['id']?>"><?=$cat['Categoria']['nombre']?></a>
						</p>
					</div>
					<div class="col s7">
						<a href="/notas/ver/<?=$cat['Nota'][0]['id']?>">
							<img src="<?=$cat['Nota'][0]['imagen_de_portada']?>" alt="" class="responsive-img">
							<h5><?=$cat['Nota'][0]['titulo']?></h5>
							<p><?=$cat['Nota'][0]['resumen']?></p>
						</a>
					</div>
					<?php foreach($cat['Nota'] as $nota):?>
						<div class="col s5">
							<div class="row">
								<a href="/notas/ver/<?=$nota['id']?>">
									<div class="col s4">
										<img src="<?=$nota['imagen_de_portada']?>" alt="" class="responsive-img">
									</div>
									<div class="col s8">
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
