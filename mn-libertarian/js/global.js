$(function () {
	$('a[href="#contact-us-modal"]').click(function (evt) {
		evt.preventDefault();
		$('#contact-modal').modal('show');
	});
	$('#contact-close').click(function () {
		$('#contact-modal').modal('hide');
	});
	$('#contact-send').click(function () {
		$('#contact-modal').modal('hide');
	});
});