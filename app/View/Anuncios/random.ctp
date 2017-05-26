<?php if(isset($data['Anuncio'])):?>
<a
	href="<?=$data['Anuncio']['url']?>"
	target="_blank"
	style="background: black; color:white;font-family: helvetica, arial; font-size: 10px;display:block; padding: 1px;text-align: right;">
	<img 
onerror="this.src='/img/transparentetestigo.png';"
	 width="100%" src="<?=$data['Anuncio']['imagen']?>" alt="<?=$data['Anuncio']['nombre']?>"><br>
	Publicidad &nbsp;
</a>
<?php endif;?>
