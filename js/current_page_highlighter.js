$(function(){
	$('nav li a').each(function() {
		if ($(this).prop('href') == window.location.href) {
			$(this).parent('li').addClass('active');
		}
	});
});