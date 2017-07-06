//slider
$(function(){
	$slideshow = $(".gallery ul");
	$slideactive = $slideshow.find("li.each").first().addClass('active').show();
	$(".direction .next").click(function(){
	$slideactive = $slideshow.find("li.active").next();
		if(!$slideactive.size())
			$slideactive = $slideshow.find("li.each").first();		$slideshow.find("li.active").removeClass("active");
			$slideactive.addClass("active");
	});
});


//tabs
$(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

});