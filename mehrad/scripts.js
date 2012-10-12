$(function(){
//-------------------------------- action menu ----------------
window.onscroll=function(){
		var scrolled = $(window).scrollTop();
		//console.log(scrolled);
		if(scrolled < 60){

			$('header.head').removeClass('action');
			$('header.action').css({
				opacity:0
			});

		}else{

			$('header.head').addClass('action');

			$('header.action').animate({

				opacity:1

			},500);
		}
	};	
});



