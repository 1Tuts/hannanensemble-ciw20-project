$(function(){
//-------------------------------- action menu ----------------
window.onscroll=function(){
		var scrolled = $(window).scrollTop();
		//console.log(scrolled);
		if(scrolled < 30){
			$('header.head').removeClass('action');

		}else{
			
			$('header.head').addClass('action');

			$('header.action').animate({

				opacity:1

			},500);
		}
	};	
});



