function validateText(str,len){
	return str.length >= len;
}

function validateEmail(str){
	var emailPattern = /^[a-z0-9+_%.-]+@(?:[a-z0-9-]+\.)+[a-z]{2,6}$/i ;

	return emailPattern.test(str);
}

$(function(){
//-------------------------------- action menu ----------------
window.onscroll=function(){
		var scrolled = $(window).scrollTop();
		//console.log(scrolled);
		if(scrolled < 30){

			$('nav.action').animate({

				opacity : 0

			},350,null,function(){

				$('nav.action').css({

					display : 'none'

				});
			});

			setTimeout(function(){

				$('nav.normal').animate({

					opacity : 1

				},400);

			},500);

		}else{

			$('nav.action').css({

				display : 'block'

			}).animate({

					opacity : 1

				},400)

			$('nav.normal').css({

				opacity:0
			});
		}
	};	
});



