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
			<div class="row">
				<div class="col s12">
					<p class="titulocategoria">
						<a href="/categorias/ver/<?=$cat['Categoria']['id']?>"><?=$cat['Categoria']['nombre']?></a>
					</p>
				</div>
				<div class="col s7">
					<a href="nota.html">
						<img src="https://unsplash.it/800/600/?random" alt="" class="responsive-img">
						<h5>Título de la nota</h5>
						<p>Subtitulo de la nota, si es que tiene</p>
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
		<?php endforeach; ?>
	</div>

	<div class="col s3">
		<div class="row">
			<div class="col s12">
				<img src="http://unsplash.it/300/100/?image=21" alt="" class="responsive-img">
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<iframe
				width="100%"
				height="600"
				style="border:none;overflow:hidden"
				scrolling="no"
				frameborder="0"
				allowTransparency="true"
				src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fzonafrancapuntomx%2F&tabs=timeline&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=160136826418"></iframe>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<img src="http://unsplash.it/300/100/?image=20" alt="" class="responsive-img">
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<a class="twitter-timeline" data-lang="es" data-height="600" data-theme="light" href="https://twitter.com/Dios_Padre">Tweets by Dios_Padre</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
		</div>
	</div>
</div>
