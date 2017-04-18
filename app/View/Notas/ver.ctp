<div class="row">
	<div class="col s9">
		<div class="row">
			<div class="col s12">
				<a href="/notas/ver/<?=$nota['Nota']['id']?>">
					<h4><?=$nota['Nota']['titulo']?></h4>
				</a>
				<img src="https://unsplash.it/1000/400/?random" alt="" class="responsive-img">
				<div><?=nl2br($nota['Nota']['contenido'])?></div>
			</div>
		</div>
	</div>
	<?=$this->Element("barralateral")?>
</div>
