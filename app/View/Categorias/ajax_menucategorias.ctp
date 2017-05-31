<?php
function existe($i,$a){
	$c=0;
	foreach ($a as $key => $value) {
		if ($i==$key) {
			$c++;
		}
	}
	return $c;
}
######################
$menu=[];
$sub=[];
foreach ($categorias as $cat) {
	if ($cat['Categoria']['padre']>0) {
		$sub[$cat['Categoria']['padre']][]=$cat;
	}else{
		$menu[]=$cat;
	}
}
?>

<?php foreach($sub as $i=>$v):?>
	<ul id="submenu<?=$i?>" class="dropdown-content colortestigo">
		<?php foreach($v as $c):?>
			<li><a class="white-text" href="/categorias/ver/<?=$c['Categoria']['id']?>"><?=$c['Categoria']['nombre']?></a></li>
		<?php endforeach;?>
	</ul>
<?php endforeach;?>

<nav class="colortestigo">
	<div class="nav-wrapper">
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		

		<ul class="left hide-on-med-and-down">
			<li><a href="/">Inicio</a></li>
			<?php foreach($menu as $m):?>
				<?php if(existe($m['Categoria']['id'],$sub)>0):?>
					<li><a href="/categorias/ver/<?=$m['Categoria']['id']?>"
						class="dropdown-button"
						data-hover="true"
						data-induration=0
						data-beloworigin="true"
						data-constrainwidth="false"
						data-activates="submenu<?=$m['Categoria']['id']?>"><?=$m['Categoria']['nombre']?><i class="material-icons right">keyboard_arrow_right</i></a></li>
					<?php else:?>
						<li><a href="/categorias/ver/<?=$m['Categoria']['id']?>"><?=$m['Categoria']['nombre']?></a></li>
					<?php endif;?>
				<?php endforeach; ?>
			</ul>

			<ul class="right">
				<li><input type="text" class="barra" id=textobuscador></li>
			</ul>


			<ul class="side-nav" id="mobile-demo">
				<li><a href="/">Inicio</a></li>
				<?php foreach($categorias as $m):?>
					<li><a href="/categorias/ver/<?=$m['Categoria']['id']?>">
						<?php if($m['Categoria']['padre']):?>
							<i class="material-icons">keyboard_arrow_right</i>
						<?php  endif;?>
						<?=$m['Categoria']['nombre']?></a></li>
					<?php endforeach;?>
				</ul>
			</div>
		</nav>
<style>
	#textobuscador{
		width: 200px !important;
		height: 30px !important;
		margin: 0px !important;
		padding: 0px 5px !important;
		background: #eee !important;
		border: none !important;
		color:#555 !important;
		margin-right: 1em!important;
		display: hidden !important;
	}
</style>
<script>
	$("#textobuscador").keyup(function(event) {
		var palabras = '';
		var lista = $("#textobuscador").val().split(" ")

		for (var i = lista.length - 1; i >= 0; i--) {
			if (lista[i].length>=3) {
				palabras =lista[i]+ " "+ palabras ;
			}
		}
		palabras = palabras.trim()
		palabras = palabras.replace(/ /g, '-');

		if (event.keyCode==13 && palabras.length>=3) {
			location.href="/notas/buscar/"+palabras;
		}
	});
</script>