<?php if(isset($data['Anuncio'])):?>
<a
	href="<?=$data['Anuncio']['url']?>"
	target="_blank"
	style="background: black; color:white;font-family: helvetica, arial; font-size: 10px;display:block; padding: 1px;text-align: right;">
	
	<?php if(strlen($data['Anuncio']['codigo'])>1):?>
		<div class="video-container"><?=$data['Anuncio']['codigo']?></div>
	<?php else:?>
		<img onerror="this.src='/img/transparentetestigo.png';" width="100%" src="<?=$data['Anuncio']['imagen']?>" alt="<?=$data['Anuncio']['nombre']?>">
	<?php endif;?>

	<br>Publicidad &nbsp;
</a>
<?php endif;?>
