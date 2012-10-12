$(function(){
//-------------------------------- action menu ----------------
window.onscroll=function(){
		var scrolled = $(window).scrollTop();
		//console.log(scrolled);
		if(scrolled < 31){
			$('header.head').removeClass('action');

		}else{
			
			$('header.action').css({
				opacity:0
			});
			$('header.head').addClass('action');

			$('header.action').animate({

				opacity:1

			},500);
		}
	};	
});



