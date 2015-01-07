
$('.template').click(function(){
	console.log(window.location.href);
	$('.carousel-control').toggleClass('hidden');
	$('.toggle-temp').toggleClass('carousel-inner');
	$('.container').toggleClass('toggle-carousel').toggleClass('toggle-list');
	$('.carousel-indicators').toggleClass('hidden');
	var url = $(location).attr('href');
	var cookieValue = $.cookie("view");
	if(cookieValue == 'carousel') {
		$.cookie("view", "list");
	}
	else if(cookieValue == 'list') {
		$.cookie("view", "carousel");	
	}		
});


	$("a:not(.carousel-control)").click(function() {
 		var page = $(this).attr('href');
 		$('body').load(page);
 		
 	});
