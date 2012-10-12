$(function(){
//-------------------------------- action menu ----------------
	$(window).scroll(function(){
		var scrolled = $(window).scrollTop();
		//console.log(scrolled);
		if(scrolled < 59){

			$('header.head').removeClass('action');
			$('header.action').animate({
				opacity:0
			},500)

		}else{

			$('header.head').addClass('action');

			$('header.action').animate({
				opacity:1
			},500)
			$('header.action .header .logo').css({
				display: 'none'
			});

		};
	});
});