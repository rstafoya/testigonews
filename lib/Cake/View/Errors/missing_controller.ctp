<style>
	#sad, #e404{
		position: relative;
		top:0px;
	}
	#e404{
		opacity: 0;
	}
</style>
<h3 class="center">Lo sentimos...</h3>
<p class="center">
	No hemos podido encontrar la página que buscas, posiblemente esté mal escrita la dirección.
</p>
<p class="center">
	Te invitamos a que veas el resto del contenido que tenemos para ti.
</p>
<p class="center">
	<img src="/img/sad.png" alt="" id=sad><br>
	<img src="/img/404.png" alt="" id=e404>
</p>
<script>
	$("#e404").delay(2000).animate({
		'top':-320,
		'opacity':1
	},1000)
</script>