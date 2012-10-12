$(function(){
	$(window).scroll(function(){
		var scrolled = $(window).scrollTop();
		//console.log(scrolled);
		if(scrolled < 60){

			$('header.head').removeClass('action');

		}else{

			$('header.head').addClass('action');

			setTimeout(function(){
				$('header.head').animate({
					opacity:1
				},500)
				$('header.action .header .logo').css({
					display: 'none'
				})

			},600)
		};
	});
});