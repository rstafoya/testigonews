<!--    Galería de las últimas cuatro notas    -->
<div class="row">
	<div class="col s7">
		<div class="slider">
			<ul class="slides">
				<li>
					<a href="nota.html">
						<img src="https://unsplash.it/800/600/?image=1">
						<div class="caption center-align">
							<h4><?php echo $ultimos[0]['Nota']['titulo'] ?></h4>
						</div>
					</a>
				</li>
				<li>
					<a href="nota.html">
						<img src="https://unsplash.it/800/600/?image=2">
						<div class="caption center-align">
							<h4><?php echo $ultimos[0]['Nota']['titulo'] ?></h4>
						</div>
					</a>
				</li>
				<li>
					<a href="nota.html">
						<img src="https://unsplash.it/800/600/?image=3">
						<div class="caption center-align">
							<h4><?php echo $ultimos[0]['Nota']['titulo'] ?></h4>
						</div>
					</a>
				</li>
				<li>
					<a href="nota.html">
						<img src="https://unsplash.it/800/600/?image=4">
						<div class="caption center-align">
							<h4><?php echo $ultimos[0]['Nota']['titulo'] ?></h4>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="col s5">
		<div class="row">
			<div class="col s6"><img src="https://unsplash.it/800/600/?image=1" alt="" class="responsive-img"></div>
			<div class="col s6"><img src="https://unsplash.it/800/600/?image=2" alt="" class="responsive-img"></div>
		</div>
		<div class="row">
			<div class="col s6"><img src="https://unsplash.it/800/600/?image=3" alt="" class="responsive-img"></div>
			<div class="col s6"><img src="https://unsplash.it/800/600/?image=4" alt="" class="responsive-img"></div>
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
							<img src="https://unsplash.it/800/600/?random" alt="" class="responsive-img">
							<h5><?=$cat['Nota'][0]['titulo']?></h5>
							<p><?=$cat['Nota'][0]['resumen']?></p>
						</a>
					</div>
					<?php foreach($cat['Nota'] as $nota):?>
						<div class="col s5">
							<div class="row">
								<a href="/notas/ver/<?=$nota['id']?>">
									<div class="col s3">
										<img src="http://unsplash.it/400/300/?random" alt="" class="responsive-img">
									</div>
									<div class="col s9">
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
