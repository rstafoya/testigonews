$(document).ready(function() {
	$("select").material_select()
	$("form .input").addClass('input-field')
	$("table").addClass('bordered compacto')
	$("textarea").addClass('materialize-textarea')
	$(".wysiwygeditor").trumbowyg({
		autogrow:true,
		removeformatPasted: true,
		resetCss: true,
		lang:'es'
	});
	$("#flashMessage").addClass("animated fadeInDown").wrap('<div class="sombra"></div>')
	$(".sombra").click(function(event) {
		$(this).remove()
	});
});
