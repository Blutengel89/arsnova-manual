
$(document).ready(function() {
	$("a:not(.carousel-control)").click(function() {
		var page = $(this).attr('href');
		$('#main-content').load(page);
		return false;
	});
});


    $('.template').click(function(){
        $('.toggle-temp').toggleClass('carousel-inner');
        $('.container').toggleClass('toggle-carousel').toggleClass('toggle-list');
        $('.carousel-control').toggleClass('hidden');
        if($.cookie("view") == 'carousel') {
            $.cookie('view', 'list', {path: '/'});

             $('.carousel-caption').each(function() {
                    $(this).insertBefore( $(this).prev('.screenshot') );
                    });        
        }else{
            $('.screenshot').each(function() {
                    $(this).insertBefore( $(this).prev('.carousel-caption') );
                    }); 
            $.cookie('view', 'carousel', {path: '/'});
        }
    });
