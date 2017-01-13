$(document).ready(function(){
		
		$('#login').click(function(){
			
			$('#login').unbind('click', false);
			$('#bs-lightbox1').css('height','400px').css('padding-top','70px').css('z-index',999);
			$('.mask').css('opacity',1).css('z-index',999);
			$('#signup').bind('click', false);

		});


		$('#signup').click(function(){
			
			$('#signup').unbind('click', false);
			$('#bs-lightbox2').css('height','550px').css('padding-top','20px').css('z-index',999);
			$('.mask').css('opacity',1).css('z-index',999);
			$('#login').bind('click', false);

		});

		$('.close').click(function(){
			$('.bs-lightbox').css('height','0px').css('padding-top','0px');
			$('.mask').css('opacity',0).css('z-index',-1);
		});

		function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
 
                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }
 
                reader.readAsDataURL(input.files[0]);
            }
        }


        function doFirst(){

			document.getElementById('myFile').onchange = fileChange;
		
		}
		
		function fileChange(){

			var file = document.getElementById('myFile').files[0]; //抓到的檔案
		

		/*////////////////////////*/

			var readFile = new FileReader(); 
			readFile.readAsDataURL(file); //用文字檔格式呈現
			readFile.addEventListener('load',function(){
				var image = document.getElementById('image');
				image.src = readFile.result;
				image.style.maxWidth = '30px';
			},false);

		}


		document.getElementById('myFile').onchange = fileChange;


		function doFirst(){

			function checkPsw(){
				var psw_first = document.getElementById('memPsw').value;
				var psw_second = document.getElementById('memPsw-confirm').value;
	 
				if(psw_first!=psw_second){
					window.alert('您的確認密碼有誤');
				}

			}

			var s_sub = document.getElementById('#signup_submit');
			// s_sub.addEventListener('click',checkPsw,false);
			s_sub.onclick = checkPsw;

		
		}

// ===========================================================


	}); //ready





		
		

