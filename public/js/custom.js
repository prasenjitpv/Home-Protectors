$(window).scroll(function(){
	if($(window).scrollTop() > 50 )
	{
		$("header").addClass("top-fixed")
	}
	else
	{
		$("header").removeClass("top-fixed")
	}
})

$(document).ready(function(){
    $(window).scroll(function(){
        var scrollTop = 90
        if($(window).scrollTop() >= scrollTop){
			$(".gotop").addClass("gotop-show")
        }
        if($(window).scrollTop() < scrollTop){
			$(".gotop").removeClass("gotop-show")
        }
    })
})

$(".gotop").click(function(){
	$('html, body').animate({scrollTop: 0},1500);	
})