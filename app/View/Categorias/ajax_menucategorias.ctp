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
		<ul class="left">
			<li><a href="/">Inicio</a></li>
		<?php foreach($menu as $m):?>
			<?php if(existe($m['Categoria']['id'],$sub)>0):?>
			<li><a href="#"
			class="dropdown-button"
			data-hover="true"
			data-induration=0
			data-beloworigin="true"
			data-constrainwidth="false"
			data-activates="submenu<?=$m['Categoria']['id']?>"><?=$m['Categoria']['nombre']?></a></li>
			<?php else:?>
			<li><a href="/categorias/ver/<?=$m['Categoria']['id']?>"><?=$m['Categoria']['nombre']?></a></li>
			<?php endif;?>
		<?php endforeach; ?>
		</ul>
	</div>
</nav>
