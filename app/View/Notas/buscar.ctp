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
				<p class="chico"><small><?=$t['Nota']['created']?></small><br><a href="/notas/ver/<?=$t['Nota']['id']?>"><?=$t['Nota']['titulo']?></a></p>
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