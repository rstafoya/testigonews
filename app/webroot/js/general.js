$(document).ready(function(){
	$(".slider").slider();

	/////////////////////////////////////////////////////////////

	$(".altura").each(function(index, el) {
		$(this).css('background-image','url('+$(this).data('fondo')+')')
	});

	/////////////////////////////////////////////////////////////

	$(".img-altofijo").each(function(index, el) {
		var este = $(this)
		este.after('<div class=contenidodelaimagen></div>');
		este.next().css({
			"background-image": 'url('+este.attr('src')+')',
			"background-position": "center",
			"background-size": "cover",
			'width':'100%',
			'height':este.attr("height"),
		});
		este.remove()
	});

	/////////////////////////////////////////////////////////////

	$(".ajaxload").each(function(){
		var este = $(this);
		$.get(este.data('ajax'), function(data) {
			este.html(data)
		});
	})

	/////////////////////////////////////////////////////////////

	while($(".repite").length){
		$(".repite").each(function(){
			var html = $(this).html()
			var cuantos = $(this).data('repite')
			for (var i = 1; i < cuantos; i++) {
				$(this).append(html)
			}
			$(this).removeClass('repite')
		});
	}

	/////////////////////////////////////////////////////////////

	$(".button-collapse").sideNav();
})
