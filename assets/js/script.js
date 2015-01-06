  	$("a:not(.carousel-control)").click(function() {
 		var page = $(this).attr('href');
 		$('#main-content').load(page);
 		return false;
 	});



    $('.template').click(function(){
        $('.toggle-temp').toggleClass('carousel-inner');
        $('.container').toggleClass('toggle-carousel').toggleClass('toggle-list');
        $('.carousel-control').toggleClass('hidden');
        $('.carousel-indicators').toggleClass('hidden');
        
    });


