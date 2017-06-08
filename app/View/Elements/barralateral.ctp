<div class="col m3 hide-on-small-only">

	<div class="row">
		<div class="col s12">
			<div style="background:#ccc; border-radius: 4px; padding:10px; color:#333;">
				<b><small>Tipo de cambio:<br>
						1 USD = <?php echo file_get_contents(Configure::read('App.www_root').'dolar.txt'); ?> MNX</small></b>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col s12 ajaxload" data-ajax="/anuncios/random/1">
		</div>
	</div>

	<div class="row">
		<div class="col s12">
			<iframe
			width="100%"
			height="600"
			style="border:none;overflow:hidden"
			scrolling="no"
			frameborder="0"
			allowTransparency="true"
			src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fzonafrancapuntomx%2F&tabs=timeline&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=160136826418"></iframe>
		</div>
	</div>

	<div class="row">
		<div class="col s12">
			<a class="twitter-timeline" data-lang="es" data-height="600" data-theme="light" href="https://twitter.com/Dios_Padre">Tweets by Dios_Padre</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
	</div>
</div>
