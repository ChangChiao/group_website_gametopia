$(document).ready(function(){
		$('.mz-tab-all li:first-child a').css('border-bottom','2px solid steelblue');
		// 被點到台的人底部有藍線
		$(".mz-tab-all li a").click(function(e){
			e.preventDefault();
			$('.mz-tab-all li a').not(this).css('border-bottom','2px solid #ccc');
			$(this).css('border-bottom','2px solid steelblue');
			
		});

		// 為了強迫表格們上來的方法...
		// var  contentHeight1 = $('#content1').height();
		// var  contentHeight2 = $('#content2').height();
		// var  contentHeight3 = $('#content3').height();
		// var  contentHeightAll = contentHeight1+contentHeight2;
		// console.log(contentHeight2);
		// console.log(contentHeight3);
		// console.log(contentHeightAll);

		// 按到該連結 內容出現
		// $('#content2').css('visibility','hidden');
		// 		$('#content3').css('visibility','hidden');

		// $(".tab-all li:first-child a").click(function(){	
		// 		$('.content').css('visibility','hidden').css('z-index',1);		
		// 		$('#content1').css('visibility','visible').css('z-index',100);
				
		// });
		// $(".tab-all li:nth-child(2) a").click(function(){
		// 		$('.content').css('visibility','hidden').css('z-index',1);
		// 		$('#content2').css('visibility','visible').css('z-index',100);
		// });

		// $(".tab-all li:last-child a").click(function(){
		// 		$('.content').css('visibility','hidden').css('z-index',1);	
		// 		$('#content3').css('visibility','visible').css('z-index',100);
		// });

		$('.mz-content').hide();
		$('#mz-content1').show();
		$('.mz-tab-all a').click(function(e){
		  	e.preventDefault();
		    var $this = $(this),
		        target = $this.attr('href');
			    $('.mz-tab-content').children('div').hide();
			    $(target).show();
  				$(this).tabs({heightStyle:"fill"});	
		});


    	


		//按到筆可以修改內容
		$('#mz-n-revise').click(function(){
			$('#mz-name').removeAttr('disabled')
					  .attr('value','')
					  .css('color','#fa0');
		});

		$('#mz-p-revise').click(function(){
			$('#mz-password').removeAttr('disabled')
						  .attr('value','')
						  .css('color','green');
		});

		$('#mz-e-revise').click(function(){
			$('#mz-email').removeAttr('disabled')
			           .attr('value','')
			           .css('color','blue');
		});

		// ==========================圖片預覽=========================
		function preview(input) {
 
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#previewImg').attr('src', e.target.result);
          	
            }
 
            reader.readAsDataURL(input.files[0]);
        	}
    	}
 
    	$("body").on("change", ".myFile", function (){
        	preview(this);
    	})

    
    // =====================fake_file_input==============================
		document.getElementById("mz-self-img").onchange = function () {
		    document.getElementById("uploadFileMem").value = this.value;
		};	
	

	});