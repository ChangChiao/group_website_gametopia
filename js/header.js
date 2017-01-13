$(document).ready(function(){

//控制漢寶寶
			
		$('.header2-control').click(function(){
			$(this).toggleClass('open');
			$('.header2-meun-all-2').toggleClass('go');
		});


//摸到換圖案
		$('#sm-li a').hover(function(){
			$('#sm-icon').attr('src','images/supermarket-bag-2.png');
		},function(){
			$('#sm-icon').attr('src','images/supermarket-bag.png');
			
			}
		);

		$('#gb-li a').hover(function(){
			$('#gb-icon').attr('src','images/giftbox-2.png');
		},function(){
			$('#gb-icon').attr('src','images/giftbox.png');
			
			}
		);


		$('#sh-li a').hover(function(){
			$('#sh-icon').attr('src','images/bag-2.png');
		},function(){
			$('#sh-icon').attr('src','images/bag.png');
			
			}
		);

		$('#gm-li a').hover(function(){
			$('#gm-icon').attr('src','images/newspaper-report-2.png');
		},function(){
			$('#gm-icon').attr('src','images/newspaper-report.png');
			
			}
		);

		$('#fo-li a').hover(function(){
			$('#fo-icon').attr('src','images/chat-2.png');
		},function(){
			$('#fo-icon').attr('src','images/chat.png');
			
			}
		);

//控制導覽列  只有首頁要用到這段
	// 	function changeHeader(){
	// 	var web_window = $(window);
	// 	var web_height = web_window.height();
	// 	var window_top_position = web_window.scrollTop();

	// 	if(window_top_position>=web_height){
	// 		$('.header').css('opacity',.4);

	// 		$('.header').hover(function(){
	// 			$('.header').css('opacity',1);
	// 			console.log('okder');
	// 		},function(){
	// 			$('.header').css('opacity',.4);	

				
	// 		}

	// 		);

	// 	}else{
	// 		$('.header').css('opacity',1);
	// 	}
	// }

	// $(window).on('scroll', function() {
 //  			changeHeader()
	// });

	
});