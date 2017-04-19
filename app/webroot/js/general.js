$(document).ready(function(){
	$(".slider").slider();

	$(".altura").each(function(index, el) {
		$(this).css('background-image','url('+$(this).data('fondo')+')')
	});

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

	$(".button-collapse").sideNav();

	$.get('/categorias/ajax_menucategorias', function(data) {
		$(".menucategorias").html(data)
	});
})
