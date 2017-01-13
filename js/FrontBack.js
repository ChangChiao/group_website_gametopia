$(document).ready(function(){
	// function reLoad(){
			
	// 			location.reload();
			
	// }

	if ($(window).width() < 992) {
		$('.gametopia').css({
			'position':'absolute',
			'top':'30%',
			'right':'0',
			'left':'0'
		});
		$('.logoimg').css({
			'display':'none'
		});
		$('.gametopia h1').css({
			'font-size':'24px',
			'letter-spacing':'15px',
			'padding':'5px 0px',
			'opacity':'0.5'
		});
		$('.gametopia h2').css({
			'font-size':'18px',
			'letter-spacing':'10px',
			'opacity':'0.3'
		});

		$('body').css('background','url("02.jpg") center center');
		$('body').css('background-size','cover');
		$('.leader_desktop').css('display','none');
		$('.leader_mobile').css('display','block');
			// }else if($(window).width() > 768) {



	// 	$('.leader_desktop').css('display','none');
	// 	$('.leader_mobile').css('display','block');
	
   
	}else if($(window).width() >= 992) {

		$('.leader_desktop').css('display','block');
		$('.leader_mobile').css('display','none');
		$('.aaa').attr('onclick', 'location.href="gametopia/index.php"');
		$('.bbb').attr('onclick', 'location.href="gametopia/backLogin.php"');
		// $(window).on('resize', function() {
  //     		reLoad()
  //   	});




	}
	

	function reLoad(){
			
				location.reload();
			
	}

	$(window).on('resize', function() {
		reLoad()
	});

});