
$('.template').click(function(){
	$('.carousel-control').toggleClass('hidden');
	$('.toggle-temp').toggleClass('carousel-inner');
	$('.container').toggleClass('toggle-carousel').toggleClass('toggle-list');
	$('.carousel-indicators').toggleClass('hidden');
	var cookieValue = $.cookie("view");
	if(cookieValue == 'carousel') {
		$.cookie("view", "list");
	}
	else if(cookieValue == 'list') {
		$.cookie("view", "carousel");	
	}		
});

var a=document.getElementsByTagName("a");
for(var i=0;i<a.length;i++)
{
    a[i].onclick=function()
    {
        window.location=this.getAttribute("href");
        return false
    }
}