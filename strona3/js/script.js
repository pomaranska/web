$(document).ready(function(){

//scroll, pasek
$(document).on("scroll", function(){
	var evt = Math.round($(window).scrollTop());
		if(evt > 70)
		{
			$("nav").addClass("fixed");

		}
		else
		{
			$("nav").removeClass("fixed");

		}
	})

	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	    acc[i].onclick = function(){
	        this.classList.toggle("active");
	        this.nextElementSibling.classList.toggle("show");
	  }
	}

});