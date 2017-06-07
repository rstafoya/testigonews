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

	if (Cookies.get('anunciomodal')!=1) {
		Cookies.set("anunciomodal",1);
		$("body").append('<div id="modalanuncio" class="modal"><div class="modal-content"><img class="responsive-img" src="http://testigonewsbajio.mx/img/media/20170607-104412.jpg"></div></div>');
		$(".modal").modal();
		$("#modalanuncio").modal('open');
	}

	/////////////////////////////////////////////////////////////

	$(".ajaxload").each(function(){
		var este = $(this);
		$.get(este.data('ajax'), function(data) {
			este.html(data)
			$(".button-collapse").sideNav();
			$(".dropdown-button").dropdown();
			$(".modal").modal();
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

	var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	var f=new Date();
	$("#lafecha").text(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear())

})
