
$(document).ready(function() {
	$("a:not(.carousel-control)").click(function() {
		var page = $(this).attr('href');
		$('.main-content').load(page);
		return false;
	});
});
