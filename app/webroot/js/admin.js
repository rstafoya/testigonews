$(document).ready(function() {
	$("select").material_select()
	$("form .input").addClass('input-field')
	$("table").addClass('bordered compacto')
	$("textarea").addClass('materialize-textarea')
	$(".wysiwygeditor").trumbowyg();
	$("#flashMessage").addClass("animated tada").wrap('<div class="sombra"></div>')
	$(".sombra").click(function(event) {
		$(this).remove()
	});
});
