<style id=estiloreusable>
	.chico{
		font-size: 80%;
	}
	.portadas{
		background-position: center;
		background-size: cover;
		height: 150px;
	}
	.notitas{
		margin:10px 0px 0px 0px;
		padding: 0px;
	}
</style>
<div class="row">
	<?php foreach($titulos as $t):?>
		<div class="col l3 m4 s6 hoverable">
			<div class="notitas">
				<div class="portadas" style="background-image: url(<?=$t['Nota']['imagen_de_portada']?>);"></div>
				<a href="/nota/<?=$t['Nota']['ruta']?>">
					<p class="chico">
						<small><?=$t['Nota']['created']?></small><br>
						<b style="color:rgb(0, 28, 60);"><?=$t['Categoria']['nombre']?></b><br>
						<?=$t['Nota']['titulo']?>
					</p>
				</a>
			</div>
		</div>
	<?php endforeach;?>
</div>
<script>
	var max = 0;
	$(".notitas").each(function(index, el) {
		if ($(el).height()>max) {
			max=$(el).height()
		}
	});
	$(".notitas").css('height', max+2);
</script>
