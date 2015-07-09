$(document).ready(function(){
	$('input#headersearch').focusin(function(){
		$('.search-dropdown').css('display', 'block');
	}).focusout(function(){
		$('.search-dropdown').css('display', 'none');
	});
	
	$('.search-dropdown div').mouseenter(function(){
		var text = $(this).children('p');
		text = text.text();
		$('input#headersearch').attr('placeholder', text);
	});
	$('.parallax').parallax();
	
	$('#hour').timepicker();
	
	$('#apartar').on('hidden.bs.modal', function (e) {
		$('#confirmacion').modal('show');
	});
});