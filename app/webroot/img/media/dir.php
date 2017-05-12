<!DOCTYPE html>
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
</style>
<body>
<div class="botones">
	<a href="#" class="btn" id="mas">+</a>
	<a href="#" class="btn" id="menos">-</a>
	<a href="#" class="btn">sig</a>
	<a href="#" class="btn">ant</a>
</div>
<?php
	$archivos = array_slice(scandir('.'), 2);

	foreach ($archivos as $a) {
		if ($a!='dir.php') {
			echo '<img class="miniatura" src="/img/media/'.$a.'">';
		}
	}
?>
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
</script>
</body>
</html>