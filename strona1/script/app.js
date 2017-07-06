$(document).ready(function(){

$(document).on("scroll", function(){
	var evt = Math.round($(window).scrollTop());
		if(evt > 45)
		{
			$("#navigation").addClass("fixed");
			$("#nav-start").addClass("fixed");
		}
		else
		{
			$("#navigation").removeClass("fixed");
			$("#nav-start").removeClass("fixed");
		}
	})
});