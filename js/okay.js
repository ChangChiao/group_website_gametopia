$(document).ready(function(){
		
		
		function check(){
			var web_window = $(window);
			var window_top_position = web_window.scrollTop();
			 console.log('window_top_position: '+window_top_position);
		}


		


		$(window).on('scroll resize', function() {
      	check()
    	}); 


		

		function run(){
			var web_window = $(window);
			var wtp = web_window.scrollTop();
			$('.d-child').css('transform','translateZ(-600px)');
			
			for(i=0;i<=wtp;i+=3){
				if(wtp>=600){
				$('.d-child').css('transform',"'translateZ(" +wtp+ "px)'");
				console.log('ok');
				}else{
				console.log('error');
				}

			}
		}

		$(window).on('scroll resize', function() {
      	run()
    	}); 
		

	}); 
// =======================================

// $(document).ready(function(){
// 	// IE9、Chrome、Safari、Opera
// 	document.getElementById("d2").addEventListener("scroll resize", myFunction);
// 	// Firefox
// 	document.getElementById("d2").addEventListener("scroll resize", myFunction);

// 	function myFunction(e) {
// 	var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
// 	d2.style.width = Math.max(20, Math.min(400, d2.width + (30 * delta))) + "px";
// 	document.getElementById("d2").innerHTML = "test " + e.deltaZ;
// 	return false;
// 	}
// });



