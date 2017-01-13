	$(document).ready(function(){
		
		$('#login').click(function(){
			
			$('#lightbox1').css('height','400px').css('padding-top','70px');
			$('body').css('background-color','rgba(0,0,0,.5)');

		});


		$('#signup').click(function(){
			
			$('#lightbox2').css('height','450px').css('padding-top','20px');
			$('body').css('background-color','rgba(0,0,0,.5)');

		});

		$('.close').click(function(){
			$('.lightbox').css('height','0px').css('padding-top','0px');
			$('body').css('background-color','transparent');
		});


	});