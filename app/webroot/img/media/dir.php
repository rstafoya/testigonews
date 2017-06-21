<?php
if (isset($_FILES["archivo_a_subir"])) {         // SUBIR ARCHIVO
	$target_dir = "./";
	$ext = explode('.', $_FILES['archivo_a_subir']['name']);
	$ext = strtolower(array_pop($ext));
	$target_file = $target_dir . date("Ymd-His").'.'.$ext;
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["archivo_a_subir"]["tmp_name"]);
		if($check !== false) {
			copy($_FILES["archivo_a_subir"]["tmp_name"], $target_file);
		}
		unlink($_FILES["archivo_a_subir"]["tmp_name"]);
		header('Location: dir.php');
		end();
	}
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Imágenes</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
</head>
<style>
	.miniatura{
		margin:5px;
		border-radius: 5px;
		height: 80px;
		box-shadow: 0px 3px 3px rgba(0,0,0,0.3);
	}
	body{
		text-align: center;
		font-family: helvetica, arial;
		font-size: 12px;
		margin:40px 0px 0px 0px;
		padding: 0px;
		background: #cff;
	}
	.cancelar{
		position: fixed;
		top:10px;
		left: 10px;
		background: white;
		color:black;
		cursor: pointer;
		padding: 10px 20px;
		box-shadow: 0px 3px 3px rgba(0,0,0,.5);
		border-radius: 5px;
	}
	.btn{
		background:#d84315;
		color:white;
		margin:5px;
		font-weight: bold;
		text-decoration: none;
		padding:5px 20px;
		border-radius: 5px;
		box-shadow: 0px 3px 3px rgba(0,0,0,.5);
	}
	.btn:hover{
		background:orange;
	}
	.botones{
		position: fixed;
		top:0px;
		margin:auto;
		text-align: center;
		width: 100%;
		padding: 15px 0px;
		background:rgba(255,255,255,.5);
		margin:0px auto;
	}
	.sombra{
		display: none;
		background: rgba(0,0,0,.7);
		position: fixed;
		top:0px;
		left: 0px;
		width: 100%;
		height: 100%;
	}
	.ventana{
		display: block;
		background: white;
		position: block;
		width: 80%;
		min-width: 300px;
		padding: 20px;
		border-radius: 10px;
		box-shadow: 0px 3px 3px rgba(0,0,0,.5);
		margin:50px auto 0px auto;
	}
	.ventana input{
		font-size: 18px;
		margin: 20px;
		padding: 5px auto;
	}
</style>
<body>
	<div class="botones">
		<a href="#" class="btn" id="mas">+</a>
		<a href="#" class="btn" id="menos">-</a>
		<!--a href="#" class="btn">sig</a-->
		<!--a href="#" class="btn">ant</a-->
		<a href="#" class="btn" id="subir">subir</a>
	</div>
	<?php
	$archivos = array_slice(scandir('.'), 2);
	rsort($archivos);

	foreach ($archivos as $a) {
		if (strpos($a, '.png')>0 or strpos($a, '.jpg')>0 or strpos($a, '.jpeg')>0 or strpos($a, '.gif')>0) {
			echo '<img class="miniatura" src="/img/media/'.$a.'">';
		}
	}
	?>
	<div class="sombra subir">
		<div class="ventana">
			<form action="dir.php" method="post" enctype="multipart/form-data">
				<input type="file" name="archivo_a_subir" accept=".jpg,.jpeg,.gif,.png">
				<br>
				<input type="submit" name="submit" value="Subir imagen" style="width:200px;">
			</form>
		</div>
		<div class="cancelar">Cancelar</div>
	</div>
	<div class="sombra seleccionar">
		<div class="ventana">
			<input type="range" min="20" max="900" value="700" id="altura" style="width: 90%; margin:10px;"><span id="ancho"></span><br>
			<input type="text" id="codigo" style="width: 45%; text-align: center; margin:10px;">
			<input type="text" id="imagen_src" style="width: 45%; text-align: center; margin:10px;"><br>
			<img class="imagenseleccionada" src="">
		</div>
		<div class="cancelar">Cancelar</div>
	</div>

	<script>
		$("#mas").click(function(event) {
			$(".miniatura").animate({'height':$(".miniatura").height()*1.4},'fast')
		});

		$("#menos").click(function(event) {
			$(".miniatura").animate({'height':$(".miniatura").height()*.7},'fast')
		});

		$(".cancelar, .sombra").click(function(event) {
			$(".sombra").fadeOut('fast');
		});
		
		$(".ventana").click(function(event) {
			event.stopPropagation()
		});

		$(".miniatura").click(function(event) {
			$(".imagenseleccionada").attr({'src': $(this).attr('src'),'width':700});
			$(".sombra.seleccionar").fadeIn();
			$("#codigo").val("<img width=700 src='"+$(".imagenseleccionada").attr('src')+"'>")
			$("#imagen_src").val($(".imagenseleccionada").attr('src'))
		});

		$("#subir").click(function() {
			$(".sombra.subir").fadeIn();
		});

		$("#altura").on('change input',function(event) {
			$("#ancho").text($("#altura").val());
			$(".imagenseleccionada").attr('width',$("#altura").val())
			$("#codigo").val("<img width="+$("#altura").val()+" src='"+$(".imagenseleccionada").attr('src')+"'/>")
		});
	</script>
</body>
</html>
