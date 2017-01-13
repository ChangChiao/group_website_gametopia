
// =============================預先載入圖片

var bg1= new Image();
var bg2= new Image();
var bg3= new Image();
var bg4= new Image();
var bg5= new Image();
var bg6= new Image();
// var bg7= new Image();
// var bg8= new Image();
// var bg9= new Image();
// var bg10= new Image();
// var bg11= new Image();
// var bg12= new Image();
bg1.src= "images/castle.png";
bg2.src= "images/gu.png";
bg3.src= "images/tree-hoyo.png";
bg4.src= "images/tower1.jpg";
bg5.src= "images/town1.jpg";
bg6.src= "images/ss4.png";
// bg7.src= "images/pageShoppingmall.png";
// bg8.src= "images/pageBackground.png";
// bg9.src= "images/pageNews.png";
// bg10.src= "images/pageForum.png";
// bg11.src= "images/pageMember.png"
// bg12.src= "images/pageGift.png";


bg1.addEventListener('load', checkbackgroundimage, false);
bg2.addEventListener('load', checkbackgroundimage, false);
bg3.addEventListener('load', checkbackgroundimage, false);
bg4.addEventListener('load', checkbackgroundimage, false);
bg5.addEventListener('load', checkbackgroundimage, false);
bg6.addEventListener('load', checkbackgroundimage, false);
// bg7.addEventListener('load', checkbackgroundimage, false);
// bg8.addEventListener('load', checkbackgroundimage, false);
// bg9.addEventListener('load', checkbackgroundimage, false);
// bg10.addEventListener('load', checkbackgroundimage, false);
// bg11.addEventListener('load', checkbackgroundimage, false);
// bg12.addEventListener('load', checkbackgroundimage, false);


var k= 0;
function checkbackgroundimage(){
	++k;
	if (k== 1) {

		// ===============================load svg
		
		// $svg = $('.index-load').drawsvg();


		// var count = 0,
	 //    $svg = $('.index-load').drawsvg({
	 //      callback: function() {
	 //        animate();
	 //      }
	 //    });

		// function animate() {
		//   $svg.drawsvg('animate');  
		// }

		// animate();

		$('.triBox').show();
		$('body').addClass('stop-scrolling');
	}
	if(k== 6){
		$(".bg1").css('backgroundImage', 'url('+ bg1.src+ ')');
		$(".bg2").css('backgroundImage', 'url('+ bg1.src+ ')');
		$(".bg3").css('backgroundImage', 'url('+ bg1.src+ ')');
		$(".bg4").css('backgroundImage', 'url('+ bg1.src+ ')');
		$(".bg5").css('backgroundImage', 'url('+ bg1.src+ ')');
		$(".bg6").css('backgroundImage', 'url('+ bg1.src+ ')');
		window.addEventListener('load', dofirst, false);
	}
}



 // function preventResize(){
 //  		 	$('.preventResizeBox').hide();
 //  		 	var web_window = $(window);
 // 			var web_width = web_window.width();
 //  		 	$(window).resize(function(){
	//   		 	if(web_width>=1200){
	//   				$('.preventResizeBox').show();
	//   				$('body').addClass('stop-scrolling')
	//   				console.log('prevent_ok');
	// 	  				$('.preventResizeBox span').click(function(){
	// 	  		 			$('.preventResizeBox').hide();
	// 	  		 			location.reload();
	// 	  		 	});
	//   			}else{
	  				
	//   				$('.preventResizeBox').hide();	
	//   				console.log('prevent_notwork');
		  
	//   			}
 //  		 	});
	
 //  		 }

 //  		 window.addEventListener('load',preventResize,false);


 	function reloadPage(){
		var web_window = $(window);
		var web_width = web_window.width();
	/* Resize Event */	  
		    $(window).resize(function(){
		        // Check window width has actually changed and it's not just iOS triggering a resize event on scroll
		        if ($(window).width() != web_width) {

		            // Update the window width for next time
		            web_width = $(window).width();
		            location.reload();
		            // Do stuff here

		        }

		    });


	 	}

	  window.addEventListener('load',reloadPage,false);


function dofirst(){

		$('body').removeClass('stop-scrolling');
	
 	// ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝	
 		var web_window = $(window);
 		var web_width = web_window.width();
 		var web_height = web_window.height();
 		var web_top_position = web_window.scrollTop();
 		var web_bottom_position = web_height+web_top_position;
 		var high_web_womangod = 14* web_height ;  //1680 height 930
 		var high_web_womangod_distance = 0.78*web_height;
 		var web_womangod = 16.15* web_height ;  //1440 height 780
 		var web_womangod_distance =0.93*web_height;
 		var mid_web_womangod = 18.52* web_height ; //1024 height 680
 		var mid_web_womangod_distance =1.07*web_height;
 		var low_web_womangod = 20.5* web_height ;  // ? height 638
 		var low_web_womangod_distance =1.14*web_height;
 		// var web_womangod_opacity = web_womangod-00;
 		// 2* web_height

// ----------------loading畫面----------------
		
		if(web_width >= 1200){

	
	      $('.triBox').animate({opacity:'0'},500).css('z-index',-1);
	     }else{
	     	$('.triBox').animate({opacity:0},500,function(){
	     		$(this).hide()
	     	});
	     }  
  
      
// ========================paper-doll-fix=========================	
		
			
		if(web_width>=1750){
			$('.paper-doll-img').css('padding-top','500px');
			$('.randomizeMachine').css('top','50px').css('height','550px');
			$('.randomizeMachine h3').css('top','-50px');
		}else if(web_width>=1450){
			$('.paper-doll-img').css('padding-top','500px');
			$('.randomizeMachine').css('top','100px').css('height','500px');
			$('.randomizeMachine h3').css('top','-100px');
		}


		// if(web_width>=992){
		// 	$('	#index-container1').css('display','block');
		// 	$('	#index-container2').css('display','none');
		// }else if(web_width<992){
		// 	$('	#index-container1').css('display','none');
		// 	$('	#index-container2').css('display','block');
		// }


// =============================================================     
   
 	// if(web_width>=992 && web_width<1005){
 	// 	$('.space').css('overflow','scroll');
 	// }





// ------------------------------先載入圖片
	// $(function(){

	// 		var $this, src;

	// 		$('img').each(function(){
	// 			$this = $(this);
	// 			src = $this.data('src');
	// 			$this.attr('src', src);
	// 		});

	// 		$('div').preload(function(){
	// 			$(this).show();
	// 		});

	// 		$('.bg1').preload(function(){
	// 			$(this).show();
	// 		});
	// 		$('.bg2').preload(function(){
	// 			$(this).show();
	// 		});
	// 		$('.bg3').preload(function(){
	// 			$(this).show();
	// 		});

	// 		$('.bg4').preload(function(){
	// 			$(this).show();
	// 		});
	// 		$('.bg5').preload(function(){
	// 			$(this).show();
	// 		});

	// 		$('.bg6').preload(function(){
	// 			$(this).show();
	// 		});

	// 	});

	// $.preload( 
	// 	'AD103-G2/../images/castle2.jpg',
 //        'AD103-G2/../images/gu.png',
 //        'AD103-G2/../images/tower1.jpg',
 //        'AD103-G2/../images/town1.jpg',
 //        'AD103-G2/../images/tree4.jpg',
 //        'AD103-G2/../images/stone-bg.png',
 //        'AD103-G2/../images/paper-bg.png',
 //        'AD103-G2/../images/bird-bg.png',
 //        'AD103-G2/../images/ss4.jpg',
 //        'AD103-G2/../images/3DSMALL.png',
 //        'AD103-G2/../images/clouds.png',
 //        'AD103-G2/../images/item.png',
 //        'AD103-G2/../images/stone-single.png',
 //        'AD103-G2/../images/paper-single.png',
 //        'AD103-G2/../images/bird-single.png',
 //        'AD103-G2/../images/anime01.gif'
       
 //      );


 		// =======================卡片效果============================	
 			$('.l2-card').hover(function(){
 				$(this).sparkle({
	 				 count: 15,
	 				 overlap: 0
 				});	
 			});

 		// ＝＝＝＝＝＝＝＝＝＝＝女神的按鈕效果＝＝＝＝＝＝＝＝＝＝＝＝

 		$('.womangod-do').hover(function(){
 			$(this).sparkle({
 				 count: 15,
 				 overlap: 0
 			});
 		});





// ----------------------------換背景圖片-----------------------------------
		function check(){
			var web_window = $(window);
			var web_width = web_window.width();
			var window_top_position = web_window.scrollTop();
			var web_height = web_window.height();
 			var web_bottom_position = web_height + window_top_position;
			 console.log('window_top_position: '+window_top_position);
			 console.log('window_width: '+web_width);
			 console.log('window_bottom_position: '+web_bottom_position);
			 console.log('window_height_position: '+web_height);
			 console.log('window_womangod: '+web_womangod);
			 console.log('web_womangod_distance: '+web_womangod_distance);


		}


		// function changeBg(){
		// 	var web_window = $(window);
		// 	var window_top_position = web_window.scrollTop();
		// 		//1445
		// 	if(window_top_position>=1465){
		// 		$('body').addClass('bg6');
		// 		console.log('ok');
		// 	}else if(window_top_position>=1310){
		// 		$('body').removeClass('bg6');
		// 		$('body').addClass('bg5');
		// 		console.log('ok2');	
		// 	}else if(window_top_position>=1059){
		// 		$('body').removeClass('bg5');
		// 		$('body').addClass('bg4');
		// 		console.log('ok3');	
		// 	}else if(window_top_position>=768){
		// 		$('body').removeClass('bg4');
		// 		$('body').addClass('bg3');
		// 		console.log('ok4');	
		// 	}else if(window_top_position>=580){
		// 		$('body').removeClass('bg3');
		// 		$('body').addClass('bg2');
		// 		console.log('ok2');	
		// 	}else{
		// 		$('body').removeClass('bg2');
		// 		$('body').addClass('bg1');
		// 		console.log('ok4');	
		// 	}
		// }

		function changeBg(){
			var web_window = $(window);
			var web_width = web_window.width();
			var window_top_position = web_window.scrollTop();
			if(web_width >= 1200 ){
				if(window_top_position<=2471){
					// $('body').css('background-image','../images/b8.jpg');
					$('body').removeClass('bg2');
					$('body').removeClass('bg3');
					$('body').removeClass('bg4');
					$('body').removeClass('bg5');
					$('body').removeClass('bg6');
					$('body').addClass('bg1');
					console.log('ok');
				}else if(window_top_position >2471 && window_top_position<=5024){
					$('body').removeClass('bg1');
					$('body').removeClass('bg3');
					$('body').removeClass('bg4');
					$('body').removeClass('bg5');
					$('body').removeClass('bg6');
					$('body').addClass('bg2');
					console.log('ok2');	
				}else if(window_top_position > 5024 && window_top_position<=7501){
					$('body').removeClass('bg2');
					$('body').removeClass('bg1');
					$('body').removeClass('bg4');
					$('body').removeClass('bg5');
					$('body').removeClass('bg6');
					$('body').addClass('bg3');
					console.log('ok3');	
				}else if(window_top_position >7501 && window_top_position <=9958){
					$('body').removeClass('bg3');
					$('body').removeClass('bg1');
					$('body').removeClass('bg2');
					$('body').removeClass('bg6');
					$('body').removeClass('bg5');
					$('body').addClass('bg4');
					console.log('ok4');	
				}else if(window_top_position >9958 && window_top_position <=12391){
					$('body').removeClass('bg1');
					$('body').removeClass('bg2');
					$('body').removeClass('bg3');
					$('body').removeClass('bg6');
					$('body').removeClass('bg4');
					$('body').addClass('bg5');
					console.log('ok5');	
				}else{
					$('body').removeClass('bg1');
					$('body').removeClass('bg2');
					$('body').removeClass('bg3');
					$('body').removeClass('bg4');
					$('body').removeClass('bg5');
					$('body').addClass('bg6');
					console.log('ok6');	
				}
			}else{
				$('body').removeClass();
				$('body').css("background-color","#000");
			}

		}


		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			$('body').removeClass();

		}

		///偵測滑動距離讓導覽列變化
		function changeNav(){
			var web_window = $(window);
			var web_width = $(window).width();
			var web_height = web_window.height();
			var window_top_position = web_window.scrollTop();
					

			if( web_width>=1200){		
				if(window_top_position<=2471 && window_top_position >=web_height){
					// $('.header').css('opacity',.4);

					$('#sm-icon').attr('src','images/supermarket-bag-2.png');
					$('#gb-icon').attr('src','images/giftbox.png');
					$('#sh-icon').attr('src','images/bag.png');
					$('#gm-icon').attr('src','images/newspaper-report.png');
					$('#fo-icon').attr('src','images/chat.png');
					$('.zone-pin').css('opacity',0);
					$('.sm-pin').css('opacity',1);
					$('.header-meun-all li a').css('color','#385F7A');
					$('.header-meun-all li:first-child a').css('color','#6186A0');	

			

					console.log('ok_1');
				}else if(window_top_position >2471 && window_top_position<=5024){
					// $('.header').css('opacity',.4);
					$('#sm-icon').attr('src','images/supermarket-bag.png');
					$('#gb-icon').attr('src','images/giftbox-2.png');
					$('#sh-icon').attr('src','images/bag.png');
					$('#gm-icon').attr('src','images/newspaper-report.png');
					$('#fo-icon').attr('src','images/chat.png');
					$('.zone-pin').css('opacity',0);
					$('.gb-pin').css('opacity',1);
					$('.header-meun-all li a').css('color','#385F7A');
					$('.header-meun-all li:nth-child(2) a').css('color','#6186A0');	

					console.log('ok_2');	
				}else if(window_top_position > 5024 && window_top_position<=7501){
					// $('.header').css('opacity',.4);
					$('#sm-icon').attr('src','images/supermarket-bag.png');
					$('#sh-icon').attr('src','images/bag-2.png');
					$('#gb-icon').attr('src','images/giftbox.png');
					$('#gm-icon').attr('src','images/newspaper-report.png');
					$('#fo-icon').attr('src','images/chat.png');
					$('.zone-pin').css('opacity',0);
					$('.sh-pin').css('opacity',1);
					$('.header-meun-all li a').css('color','#385F7A');
					$('.header-meun-all li:nth-child(3) a').css('color','#6186A0');
					console.log('ok_3');	
				}else if(window_top_position >7501 && window_top_position <=9958){
					// $('.header').css('opacity',.4);
					$('#gb-icon').attr('src','images/giftbox.png');
					$('#sm-icon').attr('src','images/supermarket-bag.png');
					$('#gm-icon').attr('src','images/newspaper-report-2.png');
					$('#sh-icon').attr('src','images/bag.png');
					$('#fo-icon').attr('src','images/chat.png');
					$('.zone-pin').css('opacity',0);
					$('.gm-pin').css('opacity',1);
					$('.header-meun-all li a').css('color','#385F7A');
					$('.header-meun-all li:nth-child(4) a').css('color','#6186A0');
					
					console.log('ok_4');
				}else if(window_top_position >9958 && window_top_position <=12391){
					// $('.header').css('opacity',.4);
					$('#sh-icon').attr('src','images/bag.png');
					$('#gm-icon').attr('src','images/newspaper-report.png');
					$('#gb-icon').attr('src','images/giftbox.png');
					$('#sm-icon').attr('src','images/supermarket-bag.png');
					$('#fo-icon').attr('src','images/chat-2.png');
					$('.zone-pin').css('opacity',0);
					$('.fo-pin').css('opacity',1);
					$('.header-meun-all li a').css('color','#385F7A');
					$('.header-meun-all li:nth-child(5) a').css('color','#6186A0');

					console.log('ok_5');
				}else{
					// $('.header').attr('src','header/images/bag-2.png');
					$('#sh-icon').attr('src','images/bag.png');
					$('#gm-icon').attr('src','images/newspaper-report.png');
					$('#gb-icon').attr('src','images/giftbox.png');
					$('#sm-icon').attr('src','images/supermarket-bag.png');
					$('#fo-icon').attr('src','images/chat.png');
					$('.zone-pin').css('opacity',0);
					$('.header-meun-all li a').css('color','#385F7A');
					console.log('ok_6');	
				}
			}

		}


		// reload功能先註解掉
		// function reLoad(){
			
		// 		location.reload();
			
		// }
		

		// $(window).resize(function(){
		// 	location.reload();
		// });

		$(window).scroll(function(){
			changeBg();
		});




		// $(window).on('resize', function() {
  //     		reLoad()
  //   	});

  		 


  		// $(window).on('resize', function() {
    //   		preventResize()
    // 	});

		$(window).on('scroll resize', function() {
      		check()
    	});

    	// $(window).on('scroll resize', function() {
     //  		changeBg()
    	// });

    	$(window).on('scroll', function() {
      		changeNav()
    	});

		
// ==========================slider====================================
		$(function() {
	/** -----------------------------------------
	 * Modulo del Slider 
	 -------------------------------------------*/
	 var SliderModule = (function() {
	 	var pb = {};
	 	pb.el = $('#slider');
	 	pb.items = {
	 		panels: pb.el.find('.slider-wrapper > li'),
	 	}

	 	// Interval del Slider
	 	var SliderInterval,
	 		currentSlider = 0,
	 		nextSlider = 1,
	 		lengthSlider = pb.items.panels.length;

	 	// Constructor del Slider
	 	pb.init = function(settings) {
	 		this.settings = settings || {duration: 8000};
	 		var items = this.items,
	 			lengthPanels = items.panels.length,
	 			output = '';

	 		// Insertamos nuestros botones
	 		for(var i = 0; i < lengthPanels; i++) {
	 			if(i == 0) {
	 				output += '<li class="active"></li>';
	 			} else {
	 				output += '<li></li>';
	 			}
	 		}

	 		$('#control-buttons').html(output);

	 		// Activamos nuestro Slider
	 		activateSlider();
	 		// Eventos para los controles
	 		$('#control-buttons').on('click', 'li', function(e) {
	 			var $this = $(this);
	 			if(!(currentSlider === $this.index())) {
	 				changePanel($this.index());
	 			}
	 		});

	 	}

	 	// Funcion para activar el Slider
	 	var activateSlider = function() {
	 		SliderInterval = setInterval(pb.startSlider, pb.settings.duration);
	 	}

	 	// Funcion para la Animacion
	 	pb.startSlider = function() {
	 		var items = pb.items,
	 			controls = $('#control-buttons li');
	 		// Comprobamos si es el ultimo panel para reiniciar el conteo
	 		if(nextSlider >= lengthSlider) {
	 			nextSlider = 0;
	 			currentSlider = lengthSlider-1;
	 		}

	 		controls.removeClass('active').eq(nextSlider).addClass('active');
	 		items.panels.eq(currentSlider).fadeOut('slow');
	 		items.panels.eq(nextSlider).fadeIn('slow');

	 		// Actualizamos los datos del slider
	 		currentSlider = nextSlider;
	 		nextSlider += 1;
	 	}

	 	// Funcion para Cambiar de Panel con Los Controles
	 	var changePanel = function(id) {
	 		clearInterval(SliderInterval);
	 		var items = pb.items,
	 			controls = $('#control-buttons li');
	 		// Comprobamos si el ID esta disponible entre los paneles
	 		if(id >= lengthSlider) {
	 			id = 0;
	 		} else if(id < 0) {
	 			id = lengthSlider-1;
	 		}

	 		controls.removeClass('active').eq(id).addClass('active');
	 		items.panels.eq(currentSlider).fadeOut('slow');
	 		items.panels.eq(id).fadeIn('slow');

	 		// Volvemos a actualizar los datos del slider
	 		currentSlider = id;
	 		nextSlider = id+1;
	 		// Reactivamos nuestro slider
	 		activateSlider();
	 	}

		return pb;
	 }());

	 SliderModule.init({duration: 4000});

});
		
// =======================scrollmagic================================
		var timeline = new TimelineMax({ repeat: 0 });
		var controller = new ScrollMagic.Controller();
		
//如果視窗寬度大於992	就執行第一支動畫	
 if(web_width >= 1200){

		move0 = new TimelineMax().to("#lx" ,1.5,{

	 			
	 			opacity:1,
				transform: 'scale(2.2)',
				transform: 'translateZ(2000px)',
				ease: Sine.easeOut, y: 0

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:1000,
        	offset:500,
        	//only run once
        	// reverse: true
	 	})
	 	.setPin('.camera')
	 	.setTween(move0)
	 	.addIndicators()
	 	.setClassToggle("#l0","fadeOut")
	 	.triggerHook(.2)
	 	.addTo(controller);

		


	// =================section1===============================
	 	
	 	move1 = new TimelineMax().to("#l1" ,1.5,{

	 			// opacity:1,
				transform: 'translateZ(-100px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:300,
        	offset:800,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(move1)
	 	// .addIndicators()
	 	// .setClassToggle("#l1","fadein")
	 	.triggerHook(0.3)
	 	.addTo(controller);


 	 	
	 	m1_opacity = new TimelineMax().to("#l1" ,1.5,{

	 			opacity:1,
				

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:180,
        	offset:800,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(m1_opacity)
	 	// .addIndicators()
	 	.triggerHook(0.3)
	 	.addTo(controller);


	 	move1_go = new TimelineMax().to("#l1" ,1.5,{

	 			// opacity:1,
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:800,
        	offset:1800,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(move1_go)
	 	// .addIndicators()
	 	// .setClassToggle("#l1","fadein")
	 	.triggerHook(0.3)
	 	.addTo(controller);



	 	c1 = new TimelineMax().to("#cloud-1" ,1.5,{

	 			
	 			opacity:1,
				// backgroundColor:'#f00',
				ease: Sine.easeOut, y: 0,
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:800,
        	offset:2200,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(c1)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);


		

	 	

// ========================seciton2恩澤================================
		item2 = new TimelineMax().to("#l2-c" ,1.5,{

	 			
				ease: Circ.easeOut, y: 0,
				transition:'.5s',
				transform: 'rotate(25deg) translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:1000,
        	offset:2600,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(item2)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);


	 	item2_opacity = new TimelineMax().to("#l2-c" ,1.5,{

	 			opacity:1
	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:180,
        	offset:2600,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(item2_opacity)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);
	 	


	 	move2 = new TimelineMax().to("#l2" ,1.5,{

	 			
	 			opacity:1,
				// backgroundColor:'#f00',
				ease: Circ.easeOut, y: 0,
				transform: 'translateZ(-100px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:300,
        	offset:3200,
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(move2)
	 	// .addIndicators()
	 	// .setClassToggle("#l2","fadein")
	 	.triggerHook(0.4)
	 	.addTo(controller);


	 	move2_go = new TimelineMax().to("#l2" ,1.5,{

	 			
	 			opacity:1,
				// backgroundColor:'#f00',
				ease: Circ.easeOut, y: 0,
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:800,
        	offset:4200,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(move2_go)
	 	// .addIndicators()
	 	// .setClassToggle("#l2","fadein")
	 	.triggerHook(0.4)
	 	.addTo(controller);


	 	m2_opacity = new TimelineMax().to("#l2" ,1.5,{

	 			opacity:1,
				

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:180,
        	offset:3200,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(m2_opacity)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);

	 	c2 = new TimelineMax().to("#cloud-2" ,1.5,{

	 			
	 			opacity:1,
				// backgroundColor:'#f00',
				ease: Sine.easeOut, y: 0,
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:800,
        	offset:4600,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(c2)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);
 		
// // ==========================seciton3獵寶==============================
		item3 = new TimelineMax().to("#l3-c" ,1.5,{

	 			
				ease: Circ.easeOut, y: 0,
				transition:'.5s',
				transform: 'rotate(15deg) translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:1000,
        	offset:5000,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(item3)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);

	 	item3_opacity = new TimelineMax().to("#l3-c" ,1.5,{

	 		opacity:1

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:180,
        	offset:5000,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(item3_opacity)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);
	 	

		move3 = new TimelineMax().to("#l3" ,1.5,{

	 			
	 			// opacity:1,
				// backgroundColor:'#f00',
				ease: Circ.easeOut, y: 0,
				transform: 'translateZ(-100px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration: 300,
        	offset:5600,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(move3)
	 	// .addIndicators()
	 	.setClassToggle("#l3","fadein")
	 	.triggerHook(0.4)
	 	.addTo(controller);

	 	move3_go = new TimelineMax().to("#l3" ,1.5,{

	 			
	 			// opacity:1,
				// backgroundColor:'#f00',
				ease: Circ.easeOut, y: 0,
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration: 800,
        	offset:6600,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(move3_go)
	 	// .addIndicators()
	 	.setClassToggle("#l3","fadein")
	 	.triggerHook(0.4)
	 	.addTo(controller);

	 	m3_opacity = new TimelineMax().to("#l3" ,1.5,{

	 			opacity:1,
				

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:180,
        	offset:5600,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(m3_opacity)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);

	 	c3 = new TimelineMax().to("#cloud-3" ,1.5,{

	 			
	 			opacity:1,
				// backgroundColor:'#f00',
				ease: Sine.easeOut, y: 0,
				transform: 'translateZ(2000px)'

	 	});	

	 	
	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:800,
        	offset:7000,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(c3)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);
	 
// // =====================section4仰望================================
		item4 = new TimelineMax().to("#l4-c" ,1.5,{

	 			
				// backgroundColor:'#f00',
				ease: Circ.easeOut, y: 0,
				transition:'.5s',
				transform: 'rotate(-25deg) translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:1000,
        	offset:7400,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(item4)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);


	 	item4_opacity = new TimelineMax().to("#l4-c" ,1.5,{

	 		opacity:1

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:180,
        	offset:7400,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(item4_opacity)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);

		move4 = new TimelineMax().to("#l4" ,1.5,{

	 			
	 			// opacity:1,
				// backgroundColor:'#f00',
				ease: Circ.easeOut, y: 0,
				transform: 'translateZ(-100px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:300,
        	offset:8000,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(move4)
	 	// .addIndicators()
	 	// .setClassToggle("#l4","fadein")
	 	.triggerHook(0.4)
	 	.addTo(controller);

	 	move4_go = new TimelineMax().to("#l4" ,1.5,{

	 			
	 			// opacity:1,
				// backgroundColor:'#f00',
				ease: Circ.easeOut, y: 0,
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:800,
        	offset:9000,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(move4_go)
	 	// .addIndicators()
	 	// .setClassToggle("#l4","fadein")
	 	.triggerHook(0.4)
	 	.addTo(controller);
	 	
	 	m4_opacity = new TimelineMax().to("#l4" ,1.5,{

	 			opacity:1,
				

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:180,
        	offset:8000,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(m4_opacity)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);

	 	c4 = new TimelineMax().to("#cloud-4" ,1.5,{

	 			duration:1000,
	 			opacity:1,
				// backgroundColor:'#f00',
				ease: Sine.easeOut, y: 0,
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:800,
        	offset:9400,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(c4)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);
// // =====================section5呢喃====================
		item5 = new TimelineMax().to("#l5-c" ,1.5,{

				ease: Circ.easeOut, y: 0,
				transition:'.5s',
				transform: 'rotate(-10deg) translateZ(2000px)'
	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:1000,
        	offset:9800,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(item5)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);

	 	item5_opacity = new TimelineMax().to("#l5-c" ,1.5,{

				opacity:1
	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:180,
        	offset:9800,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(item5_opacity)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);

		move5 = new TimelineMax().to("#l5" ,1.5,{

	 			
	 			// opacity:1,
				// backgroundColor:'#f00',
				ease: Circ.easeOut, y: 0,
				transform: 'translateZ(-100px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration: 300,
        	offset:10400,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(move5)
	 	// .addIndicators()
	 	// .setClassToggle("#l5","fadein")
	 	.triggerHook(0.4)
	 	.addTo(controller);

	 	move5_go = new TimelineMax().to("#l5" ,1.5,{

	 			
	 			// opacity:1,
				// backgroundColor:'#f00',
				ease: Circ.easeOut, y: 0,
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration: 800,
        	offset:11400,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(move5_go)
	 	// .addIndicators()
	 	// .setClassToggle("#l5","fadein")
	 	.triggerHook(0.4)
	 	.addTo(controller);

	 	m5_opacity = new TimelineMax().to("#l5" ,1.5,{

	 			opacity:1,
				

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:180,
        	offset:10400,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(m5_opacity)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);

	 	c5 = new TimelineMax().to("#cloud-5" ,1.5,{

	
				// backgroundColor:'#f00',
				ease: Sine.easeOut, y: 0,
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:800,
        	offset:11800,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(c5)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);
// // ======================secition6=========================
		item6 = new TimelineMax().to("#l6-c" ,1.5,{

	 			
				// backgroundColor:'#f00',
				ease: Circ.easeOut, y: 0,
				transition:'.5s',
				transform: 'rotate(25deg) translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:1000,
        	offset:12200,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(item6)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);


	 	item6_opacity = new TimelineMax().to("#l6-c" ,1.5,{

	 			opacity:1

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:180,
        	offset:12400,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(item6_opacity)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);
// ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝最吐血的女神＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
		
	if(web_height>=900){

		move6 = new TimelineMax().to("#l6" ,1.5,{

	 			// opacity:1,
				// backgroundColor:'#f00',
				ease: Circ.easeOut, y: 0,
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:high_web_womangod_distance, //730
        	offset:high_web_womangod, //12600 low pixer height是680
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(move6)
	 	.addIndicators({name: "test",colorStart:"transparent",colorTrigger:"transparent", colorEnd: "transparent"})
	 	// .setClassToggle("#l6","fadein")
	 	.triggerHook(0.58)
	 	.addTo(controller);



	 	m6_opacity = new TimelineMax().to("#l6" ,1.5,{

	 			opacity:1,
				

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
			//180 1600
	 		triggerElement: ".tp1",
        	duration:180,
        	offset:high_web_womangod,
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(m6_opacity)
	 	// .addIndicators()
	 	.triggerHook(0.58)
	 	.addTo(controller);

	 	god6 = new TimelineMax().to("#womangod" ,1.5,{

	 		
				// backgroundColor:'#f00',
				transition:'1s',
				opacity:1,
				ease: Circ.easeOut, y: 0,
				top:'100px',
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
			// 50 1550
	 		triggerElement: ".tp1",
        	duration:high_web_womangod_distance,
        	offset:high_web_womangod,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(god6)
	 	// .addIndicators()
	 	.triggerHook(0.58)
	 	.addTo(controller);




	 	c6= new TimelineMax().to("#cloud-6" ,1.5,{

	 			
	 			opacity:1,
				// backgroundColor:'#f00',
				ease: Sine.easeOut, y: 0,
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:800,
        	offset:12600,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(c6)
	 	// .addIndicators()
	 	.triggerHook(0.58)
	 	.addTo(controller);
	
		
// ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝中間值		
	}else if(web_height>=780){
		move6 = new TimelineMax().to("#l6" ,1.5,{

	 			// opacity:1,
				// backgroundColor:'#f00',
				ease: Circ.easeOut, y: 0,
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:web_womangod_distance, //730
        	offset:web_womangod, //12600 mac height固定是780
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(move6)
	 	.addIndicators({name: "test",colorStart:"transparent",colorTrigger:"transparent", colorEnd: "transparent"})
	 	// .setClassToggle("#l6","fadein")
	 	.triggerHook(0.5)
	 	.addTo(controller);


	 	// move6_go = new TimelineMax().to("#l6" ,1.5,{

	 	// 		// opacity:1,
			// 	// backgroundColor:'#f00',
			// 	ease: Circ.easeOut, y: 0,
			// 	transform: 'translateZ(2000px)'

	 	// });	

	 	

	 	// scene = new ScrollMagic.Scene({
	
	 	// 	triggerElement: ".tp1",
   //      	duration:300, //730
   //      	offset:web_womangod, //3600 mac height固定是780
        	
	 	// })
	 	// .setPin(".camera")
	 	// .setTween(move6_go)
	 	// .addIndicators({name: "test",colorStart:"transparent",colorTrigger:"transparent", colorEnd: "transparent"})
	 	// // .removeIndicators()
	 	// // .setClassToggle("#l6","fadein")
	 	// .triggerHook(0.4)
	 	// .addTo(controller);



	 	m6_opacity = new TimelineMax().to("#l6" ,1.5,{

	 			opacity:1,
				

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
			//180 1600
	 		triggerElement: ".tp1",
        	duration:180,
        	offset:web_womangod,
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(m6_opacity)
	 	// .addIndicators()
	 	.triggerHook(0.5)
	 	.addTo(controller);

	 	god6 = new TimelineMax().to("#womangod" ,1.5,{

	 		
				// backgroundColor:'#f00',
				transition:'1s',
				opacity:1,
				ease: Circ.easeOut, y: 0,
				top:'100px',
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
			// 50 1550
	 		triggerElement: ".tp1",
        	duration:web_womangod_distance,
        	offset:web_womangod,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(god6)
	 	// .addIndicators()
	 	.triggerHook(0.5)
	 	.addTo(controller);




	 	c6= new TimelineMax().to("#cloud-6" ,1.5,{

	 			
	 			opacity:1,
				// backgroundColor:'#f00',
				ease: Sine.easeOut, y: 0,
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:800,
        	offset:12000,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(c6)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);
		

	}else if(web_height<780 && web_height>=680){

		move6 = new TimelineMax().to("#l6" ,1.5,{

	 			// opacity:1,
				// backgroundColor:'#f00',
				ease: Circ.easeOut, y: 0,
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:mid_web_womangod_distance, //730
        	offset:mid_web_womangod, //12600 low pixer height是680
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(move6)
	 	.addIndicators({name: "test",colorStart:"transparent",colorTrigger:"transparent", colorEnd: "transparent"})
	 	// .setClassToggle("#l6","fadein")
	 	.triggerHook(0.4)
	 	.addTo(controller);

	 	// move6_go = new TimelineMax().to("#l6" ,1.5,{

	 	// 		// opacity:1,
			// 	// backgroundColor:'#f00',
			// 	ease: Circ.easeOut, y: 0,
			// 	transform: 'translateZ(2000px)'

	 	// });	

	 	

	 	// scene = new ScrollMagic.Scene({
	
	 	// 	triggerElement: ".tp1",
   //      	duration:mid_web_womangod_distance, //730
   //      	offset:mid_web_womangod, //3600 low pixer height是680
   //      	//only run once
       
	 	// })
	 	// .setPin(".camera")
	 	// .setTween(move6_go)
	 	// .addIndicators()
	 	// // .setClassToggle("#l6","fadein")
	 	// .triggerHook(0.4)
	 	// .addTo(controller);

	 	m6_opacity = new TimelineMax().to("#l6" ,1.5,{

	 			opacity:1,
				

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
			//180 1600
	 		triggerElement: ".tp1",
        	duration:180,
        	offset:mid_web_womangod,
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(m6_opacity)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);

	 	god6 = new TimelineMax().to("#womangod" ,1.5,{

	 		
				// backgroundColor:'#f00',
				transition:'1s',
				opacity:1,
				ease: Circ.easeOut, y: 0,
				top:'100px',
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
			// 50 1550
	 		triggerElement: ".tp1",
        	duration:mid_web_womangod_distance,
        	offset:mid_web_womangod,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(god6)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);




	 	c6= new TimelineMax().to("#cloud-6" ,1.5,{

	 			
	 			opacity:1,
				// backgroundColor:'#f00',
				ease: Sine.easeOut, y: 0,
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:800,
        	offset:12600,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(c6)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);
		
		
	// =============================低解析度=================================		
			
	}else{
		
		move6 = new TimelineMax().to("#l6" ,1.5,{

	 			// opacity:1,
				// backgroundColor:'#f00',
				ease: Circ.easeOut, y: 0,
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:low_web_womangod_distance, //730
        	offset:low_web_womangod, //3600 low pixer height是638
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(move6)
	 	.addIndicators({name: "test",colorStart:"transparent",colorTrigger:"transparent", colorEnd: "transparent"})
	 	// .setClassToggle("#l6","fadein")
	 	.triggerHook(0.4)
	 	.addTo(controller);

	 	move6_go = new TimelineMax().to("#l6" ,1.5,{

	 			// opacity:1,
				// backgroundColor:'#f00',
				ease: Circ.easeOut, y: 0,
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:low_web_womangod_distance, //730
        	offset:low_web_womangod, //3600 low pixer height是638
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(move6_go)
	 	// .addIndicators()
	 	// .setClassToggle("#l6","fadein")
	 	.triggerHook(0.4)
	 	.addTo(controller);

	 	m6_opacity = new TimelineMax().to("#l6" ,1.5,{

	 			opacity:1,
				

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
			//180 1600
	 		triggerElement: ".tp1",
        	duration:180,
        	offset:low_web_womangod,
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(m6_opacity)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);

	 	god6 = new TimelineMax().to("#womangod" ,1.5,{

	 		
				// backgroundColor:'#f00',
				transition:'1s',
				opacity:1,
				ease: Circ.easeOut, y: 0,
				top:'100px',
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
			// 50 1550
	 		triggerElement: ".tp1",
        	duration:low_web_womangod_distance,
        	offset:low_web_womangod,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(god6)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);




	 	c6= new TimelineMax().to("#cloud-6" ,1.5,{

	 			
	 			opacity:1,
				// backgroundColor:'#f00',
				ease: Sine.easeOut, y: 0,
				transform: 'translateZ(2000px)'

	 	});	

	 	

	 	scene = new ScrollMagic.Scene({
	
	 		triggerElement: ".tp1",
        	duration:600,
        	offset:12400,
        	//only run once
        	reverse: true
	 	})
	 	.setPin(".camera")
	 	.setTween(c6)
	 	// .addIndicators()
	 	.triggerHook(0.4)
	 	.addTo(controller);
		
		
		
			
		
	}		
// ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝logo
}
// ======================手機端==========================

else if(web_width<1200 && web_width>=992){


	
// =====================================ver3
	var tween08 = TweenMax.staggerFromTo( $( '#scene08' ), 1, { 
    autoAlpha:1,
	},{ autoAlpha:0}, 1 );

	var scene08 = new ScrollMagic.Scene({
	    triggerElement: '#scene18',
	    // duration: $( '#scene18' ).innerHeight(),
	    reverse:true

	})
	// .addIndicators()
	.setPin("#scene08")
	.addTo(controller)
	.setTween( tween08 )
	.triggerHook(0.98)
	.setClassToggle( "#scenex8", "fadeIn" );

	

// ==========================================================
	var tween18 = TweenMax.staggerFrom( $( '#scene18' ), 0.5, { 

	autoAlpha: 0,
    y: "-=10"
	}, 1 );

	var scene18 = new ScrollMagic.Scene({
	    triggerElement: '#scene18',
	    // duration: $( '#scene18' ).innerHeight(),
	    reverse:false

	})
	// .addIndicators()
	// .setPin("#index-container2")
	.addTo(controller)
	.setTween( tween18 )
	.setClassToggle( "#scene18", "fadeIn" );

// -----------------------------------------------------
	var tween28 = TweenMax.staggerFrom( $( '#scene28' ), 0.5, { 
 //    autoAlpha: 0,
 //    scale: 0.2,
 //    ease:Elastic.easeInOut
	// }, 0.3 );
	autoAlpha: 0,
    y: "-=10"
	}, 1 );


	var scene28 = new ScrollMagic.Scene({
	    triggerElement: '#scene28',
	    // duration: $( '#scene28' ).innerHeight(),
	    reverse:false

	})
	// .addIndicators()
	.addTo(controller)
	.setTween( tween28 )
	.setClassToggle( "#scene28", "fadeIn" );

// --------------------------------------------------
	var tween38 = TweenMax.staggerFrom( $( '#scene38' ), 0.5, { 
    autoAlpha: 0,
    y: "-=10"
	}, 1 );

	var scene38 = new ScrollMagic.Scene({
	    triggerElement: '#scene38',
	    duration: $( '#scene38' ).innerHeight(),
	    reverse:false

	})
	// .addIndicators()
	.addTo(controller)
	.setTween( tween38 )
	.setClassToggle( "#scene38", "fadeIn" );
// --------------------------------------------------
	var tween48 = TweenMax.staggerFrom( $( '#scene48' ), 0.5, { 
    autoAlpha: 0,
    y: "-=10"
	}, 1 );

	var scene48 = new ScrollMagic.Scene({
	    triggerElement: '#scene48',
	    duration: $( '#scene48' ).innerHeight(),
	    reverse:false

	})
	// .addIndicators()
	.addTo(controller)
	.setTween( tween48 )
	.setClassToggle( "#scene48", "fadeIn" );

// --------------------------------------------------
	var tween58 = TweenMax.staggerFrom( $( '#scene58' ), 0.5, { 
    autoAlpha: 0,
    y: "-=10"
	}, 1 );

	var scene58= new ScrollMagic.Scene({
	    triggerElement: '#scene58',
	    duration: $( '#scene58' ).innerHeight(),
	    reverse:false

	})
	// .addIndicators()
	.addTo(controller)
	.setTween( tween58 )
	.setClassToggle( "#scene58", "fadeIn" );


// --------------------------------------------------	
	var tween68 = TweenMax.staggerFrom( $( '#scene68' ), 0.5, { 
    autoAlpha: 0.5,
    y: "-=10"
	}, 1 );

	var scene68 = new ScrollMagic.Scene({
	    triggerElement: '#scene68',
	    duration: $( '#scene68' ).innerHeight(),
	    reverse:false

	})
	// .addIndicators()
	.addTo(controller)
	.setTween( tween68 )
	.setClassToggle( "#scene68", "fadeIn" );

	}else{

	// 	var tween08 = TweenMax.staggerFromTo( $( '#scenex8' ), 1, { 
 //    autoAlpha:1,
	// },{ autoAlpha:0}, 1 );


	// var tween0 = TweenMax.staggerFromTo( $( '#scene0' ), 1, { 
 //    opacity:1,
	// },{opacity:'0'}, 1 );

	// var scene0 = new ScrollMagic.Scene({
	//     triggerElement: '#scene1',
	//     // duration: $( '#scene1' ).innerHeight(),
	//     reverse:true

	// })
	// // .addIndicators()
	// .setPin("#scene0")
	// .addTo(controller)
	// .setTween( tween0 )
	// .triggerHook(0.98)
	// .setClassToggle( "#scene", "fadeIn" );

	

// ==========================================================
	var tween1 = TweenMax.staggerFrom( $( '#scene1' ), 0.5, { 

	autoAlpha: 0,
    y: "-=10"
	}, 1 );

	var scene1 = new ScrollMagic.Scene({
	    triggerElement: '#scene1',
	    // duration: $( '#scene1' ).innerHeight(),
	    reverse:false

	})
	// .addIndicators()
	// .setPin("#index-container2")
	.addTo(controller)
	.setTween( tween1 )
	.setClassToggle( "#scene1", "fadeIn" );

// -----------------------------------------------------
	var tween2 = TweenMax.staggerFrom( $( '#scene2' ), 0.5, { 
 //    autoAlpha: 0,
 //    scale: 0.2,
 //    ease:Elastic.easeInOut
	// }, 0.3 );
	autoAlpha: 0,
    y: "-=10"
	}, 1 );


	var scene2 = new ScrollMagic.Scene({
	    triggerElement: '#scene2',
	    // duration: $( '#scene2' ).innerHeight(),
	    reverse:false

	})
	// .addIndicators()
	.addTo(controller)
	.setTween( tween2 )
	.setClassToggle( "#scene2", "fadeIn" );

// --------------------------------------------------
	var tween3 = TweenMax.staggerFrom( $( '#scene3' ), 0.5, { 
    autoAlpha: 0,
    y: "-=10"
	}, 1 );

	var scene3 = new ScrollMagic.Scene({
	    triggerElement: '#scene3',
	    duration: $( '#scene3' ).innerHeight(),
	    reverse:false

	})
	// .addIndicators()
	.addTo(controller)
	.setTween( tween3 )
	.setClassToggle( "#scene3", "fadeIn" );
// --------------------------------------------------
	var tween4 = TweenMax.staggerFrom( $( '#scene4' ), 0.5, { 
    autoAlpha: 0,
    y: "-=10"
	}, 1 );

	var scene4 = new ScrollMagic.Scene({
	    triggerElement: '#scene4',
	    duration: $( '#scene4' ).innerHeight(),
	    reverse:false

	})
	// .addIndicators()
	.addTo(controller)
	.setTween( tween4 )
	.setClassToggle( "#scene4", "fadeIn" );

// --------------------------------------------------
	var tween5 = TweenMax.staggerFrom( $( '#scene5' ), 0.5, { 
    autoAlpha: 0,
    y: "-=10"
	}, 1 );

	var scene5= new ScrollMagic.Scene({
	    triggerElement: '#scene5',
	    duration: $( '#scene5' ).innerHeight(),
	    reverse:false

	})
	// .addIndicators()
	.addTo(controller)
	.setTween( tween5 )
	.setClassToggle( "#scene5", "fadeIn" );


// --------------------------------------------------	
	var tween6 = TweenMax.staggerFrom( $( '#scene6' ), 0.5, { 
    autoAlpha: 0.5,
    y: "-=10"
	}, 1 );

	var scene6 = new ScrollMagic.Scene({
	    triggerElement: '#scene6',
	    duration: $( '#scene6' ).innerHeight(),
	    reverse:false

	})
	// .addIndicators()
	.addTo(controller)
	.setTween( tween6 )
	.setClassToggle( "#scene6", "fadeIn" );



	}



// ========================================owl
 
  $("#owl-demo").owlCarousel({
 
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
 
      // "singleItem:true" is a shortcut for:
      items : 3
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });

  $("#owl-demo8").owlCarousel({
 
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
 
      // "singleItem:true" is a shortcut for:
      items : 3
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });


  $("#owl-demo-gift").owlCarousel({
 
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
 
      // "singleItem:true" is a shortcut for:
      items : 3
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
 $("#owl-demo-sh").owlCarousel({
 
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
 
      // "singleItem:true" is a shortcut for:
      items : 3
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });


 $("#owl-demo-news").owlCarousel({
 
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
 
      // "singleItem:true" is a shortcut for:
      items : 3
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });



 
  $("#owl-demo-gift8").owlCarousel({
 
      autoPlay: 3000, 
 
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });


  $("#owl-demo-sh8").owlCarousel({
 
      autoPlay: 3000, 
 
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 

  $("#owl-demo-news8").owlCarousel({
 
      autoPlay: 3000, 
 
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });






 var owl = $("#owl-demo");		

  $(".pre_btn1").click(function(){
    owl.trigger('owl.prev');
  })
  $(".next_btn1").click(function(){
    owl.trigger('owl.next');
  })



 var owl2 = $("#owl-demo-gift");		

  $(".pre_btn2").click(function(){
    owl2.trigger('owl.prev');
  })
  $(".next_btn2").click(function(){
    owl2.trigger('owl.next');
  })

  var owl3 = $("#owl-demo-sh");		

  $(".pre_btn3").click(function(){
    owl3.trigger('owl.prev');
  })
  $(".next_btn3").click(function(){
    owl3.trigger('owl.next');
  })

  var owl4 = $("#owl-demo-news");		

  $(".pre_btn4").click(function(){
    owl4.trigger('owl.prev');
  })
  $(".next_btn4").click(function(){
    owl4.trigger('owl.next');
  })
 

// ===============for_ipad===================


 var owl8 = $("#owl-demo8");		

  $(".pre_btn8").click(function(){
    owl8.trigger('owl.prev');
  })
  $(".next_btn8").click(function(){
    owl8.trigger('owl.next');
  })



 var owl28 = $("#owl-demo-gift8");		

  $(".pre_btn28").click(function(){
    owl28.trigger('owl.prev');
  })
  $(".next_btn28").click(function(){
    owl28.trigger('owl.next');
  })

  var owl38 = $("#owl-demo-sh8");		

  $(".pre_btn38").click(function(){
    owl38.trigger('owl.prev');
  })
  $(".next_btn38").click(function(){
    owl38.trigger('owl.next');
  })
 


}