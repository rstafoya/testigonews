<?php
if (isset($_FILES["archivo_a_subir"])) {
	$target_dir = "./";
	$ext = explode('.', $_FILES['archivo_a_subir']['name']);
	$ext = strtolower(array_pop($ext));
	$target_file = $target_dir . date("Ynd-His").'.'.$ext;
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
	.subida{
		display: block;
		background: white;
		position: block;
		width: 50%;
		min-width: 300px;
		padding: 20px;
		border-radius: 10px;
		box-shadow: 0px 3px 3px rgba(0,0,0,.5);
		margin:100px auto 0px auto;
		font-size: 26px;
	}
</style>
<body>
	<div class="botones">
		<a href="#" class="btn" id="mas">+</a>
		<a href="#" class="btn" id="menos">-</a>
		<a href="#" class="btn">sig</a>
		<a href="#" class="btn">ant</a>
		<a href="#" class="btn" id="subir">subir</a>
	</div>
	<?php
	$archivos = array_slice(scandir('.'), 2);

	foreach ($archivos as $a) {
		if ($a!='dir.php') {
			echo '<img class="miniatura" src="/img/media/'.$a.'">';
		}
	}
	?>
	<div class="sombra">
		<div class="subida">
			<form action="dir.php" method="post" enctype="multipart/form-data">
				<input type="file" name="archivo_a_subir" accept=".jpg,.jpeg,.gif,.png">
				<br>
				<input name="submit" type="submit" value="Subir imagen">
			</form>
		</div>
	</div>
	<script>
		$("#mas").click(function(event) {
			$(".miniatura").animate({'height':$(".miniatura").height()*1.4},'fast')
		});
		$("#menos").click(function(event) {
			$(".miniatura").animate({'height':$(".miniatura").height()*.7},'fast')
		});
		$(".miniatura").click(function(event) {
			alert($(this).attr('src'))
		});
		$("#subir").click(function() {
			$(".sombra").fadeIn();
		});
	</script>
</body>
</html>
