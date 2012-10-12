$(function(){
//-------------------------------- action menu ----------------
	$(window).scroll(function(){
		var scrolled = $(window).scrollTop();
		//console.log(scrolled);
		if(scrolled < 60){

			$('header.head').removeClass('action');
			$('header.head').css({
				opacity:0
			});

		}else{

			$('header.head').addClass('action');

			$('header.action').animate({
				opacity:1
			},500);
			

		};
	});
});