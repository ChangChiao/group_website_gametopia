function doFirst(){
	// 直接先看SESSION 有無資料，有的話直接LOAD 出
	changeUsedProdToSession( 'plus' );

	$(".usedInfo").on("change","input[type='file']",function(){
		// 上傳圖檔
	    var files= this.files;
	    var k= 0;
	    var fileNames= "";
	    for (var i = files.length - 1; i >= 0; i--) {
	    	if(files[i].name.indexOf("JPG")!=-1 || files[i].name.indexOf("png")!=-1){
	    		k= 1;
	    		fileNames+= files[i].name+ "//";
	    	}else{
	    		k= 0;
	    		$("#showFile").html("未上傳圖檔，或格式有誤");
	        	return false;
	    	}
	    }
	    $("#showFile").html(fileNames);
	    
	});
	// var kkkkkk= "<?php if(isset($_SESSION['usedProd'])=== false) echo "false";else echo "true";?>";
	// if (kkkkkk== "true") {
	// 	$('.usedList .init').css('display', 'none');
	// 	$('.usedList table').css('display', 'block');
	// }else{
	// 	$('.usedList table').css('display', 'none');
	// 	$('.usedList .init').css('display', 'block');
	// }

	$('.uploadList span').click(function(){
		changeUsedProdToSession('plus');
	});
	$('#remove').click(function(){
		changeUsedProdToSession('remove');
	});
	$('#send').click(function(){
		if ($('.usedPostRule input').prop('checked')) {
			changeUsedProdToSession('send');
		}
	});
	$('#deAll_1').click(function(){
		if ( $(this).prop('checked') ) {

			$('#deAll_1').prop('checked', true);
			$('#deAll_2').prop('checked', true);

			$('input[name="usedProdList"]').each(function(){
				$(this).prop('checked', true);
			});
		}else{

			$('#deAll_1').prop('checked', false);
			$('#deAll_2').prop('checked', false);

			$('input[name="usedProdList"]').each(function(){
				$(this).prop('checked', false);
			});
		}
	});
	$('#deAll_2').click(function(){
		if ( $(this).prop('checked') ) {

			$('#deAll_1').prop('checked', true);
			$('#deAll_2').prop('checked', true);

			$('input[name="usedProdList"]').each(function(){
				$(this).prop('checked', true);
			});
		}else{

			$('#deAll_1').prop('checked', false);
			$('#deAll_2').prop('checked', false);

			$('input[name="usedProdList"]').each(function(){
				$(this).prop('checked', false);
			});
		}
	});
	function changeUsedProdToSession( action ){
		var xhr= new XMLHttpRequest();
		xhr.onreadystatechange= function(){
			if (xhr.readyState== 4) {
				if (xhr.status== 200) {
					if (action== 'plus') {
						dependAction(xhr.responseText, action);
						console.log(xhr.responseText);
					}else if (action== 'remove') {
						console.log(xhr.responseText);
						changeUsedProdToSession('plus');
						if (xhr.responseText== "dropTable") {
							$('.usedList .table').css('display', 'none');
							$('.init').css('display', 'block');
						}
					}
				}else{
					alert(xhr.status);
				}
			}
		}

		var url= "changeUsedProdToSession.php?action="+ action;
		if (action== "plus") {
			url+= '&usedProdName='+ $('.prodName+input').val();
			$('.prodName+input').val('');
			url+= '&usedProdSeries='+ $('.prodSeries+input').val();
			$('.prodSeries+input').val('');
			url+= '&usedProdClass='+ $('.prodClass+input').val();
			$('.prodClass+input').val('');
			url+= '&usedProdPrice='+ $('.prodPrice+input').val();
			$('.prodPrice+input').val('');
			url+= '&usedProdImages='+ $('#showFile').text();
			$('#showFile').text('');
			url+= '&prodInfo='+ $('.prodInfo+input').val();
			$('.prodInfo+input').val('');
		}else if (action== "remove") {
			var deObject= "";
			var arr= [];
			var total= 0;
			var drop= 0;
			if (document.getElementById('deAll_1').checked || document.getElementById('deAll_2').checked) {
				$('.usedList .table').css('display', 'none');
				$('.init').css('display', 'block');
				// <?php unset($_SESSION['usedProd']);?>
				$('input[name="usedProdList"]').each(function(){
					if ( $(this).prop('checked') ) {
						arr.push(this.id.split('P')[1]);
					};
				});
				$('.usedList #table').html("");
				document.getElementById('deAll_1').checked= false;
				document.getElementById('deAll_2').checked= false;
			}else {
				// $('input[name="usedProdList"]').prop('checked', true);
				$('input[name="usedProdList"]').each(function(){
					total+=1;
					if ( $(this).prop('checked') ) {
						drop+=1;
						// id="UP???"
						arr.push(this.id.split('P')[1]);

						var removeTarget= '#usedprod'+ this.id.split('P')[1];
						$(removeTarget).remove();
					};
				});
				if(total == drop){
					// 當所有等於要移除的 等同於整個table 移除掉
					$('.usedList .table').css('display', 'none');
					$('.init').css('display', 'block');
				}
			}
			deObject= arr.join('a1a1a1');
			url+= "&deProd="+ deObject;
		}
		xhr.open("Get", url, true);
		xhr.send(null);
	}

	function dependAction( str, action ){
			
		if (str!= "false") {
			var answerStr= "";
			var totalAnswer= str.split('!__!');
			console.log(str);
			for (var i = totalAnswer.length - 1; i >= 0; i--) {
				if (totalAnswer[i]== "") {
					totalAnswer[i]= "　";
				}
			}
			for (var i =  0; i < totalAnswer.length/9 -1; i++) {
				// <div class="tr" id="usedprod序號">
				answerStr+= '<div class="tr" id='+ totalAnswer[i*9+1]+ '>';
				// 	<div class="col_xs_1 col_sm_1">
				// 		<input type="checkbox" name="usedProdList" id="UP序號">
					answerStr+= '<div class="col_xs_1 col_sm_1">';
					answerStr+= '<input type="checkbox" name="usedProdList" id='+ totalAnswer[i*9+2]+ '>'
					answerStr+= '</div>';
				// 	<div class="col_xs_1 col_sm_1">
				// 		序號
				// 	</div>
					answerStr+= '<div class="col_xs_1 col_sm_1">';
					answerStr+= totalAnswer[i*9+3];
					answerStr+= '</div>';
				// 	<div class="col_xs_4 col_sm_2">
				// 		<img src="images/商品檔名">
				// 	</div>
					answerStr+= '<div class="col_xs_4 col_sm_2">';
					answerStr+= '<img src="images/'+ totalAnswer[i*9+4]+ '">';
					answerStr+= '</div>';
				// 	<div class="col_xs_6 col_sm_8">
					answerStr+= '<div class="col_xs_6 col_sm_8">';
				// 		<div class="col_xs_12 col_sm_2">
				// 			商品名稱
				// 		</div>
					answerStr+= '<div class="col_xs_12 col_sm_2">';
					answerStr+= totalAnswer[i*9+5];
					answerStr+= '</div>';
				// 		<div class="col_xs_12 col_sm_2">
				// 			商品系列
				// 		</div>
					answerStr+= '<div class="col_xs_12 col_sm_2">';
					answerStr+= totalAnswer[i*9+6];
					answerStr+= '</div>';
				// 		<div class="col_xs_12 col_sm_2">
				// 			商品類別
				// 		</div>
					answerStr+= '<div class="col_xs_12 col_sm_2">';
					answerStr+= totalAnswer[i*9+7];
					answerStr+= '</div>';
				// 		<div class="col_xs_12 col_sm_2">
				// 			NT$<span>商品價格</span>
				// 		</div>
					answerStr+= '<div class="col_xs_12 col_sm_2">';
					answerStr+= totalAnswer[i*9+8];
					answerStr+= '</div>';
				// 		<div class="col_xs_12 col_sm_4">
				// 			商品簡介
				// 		</div>
					answerStr+= '<div class="col_xs_12 col_sm_4">';
					answerStr+= totalAnswer[i*9+9];
					answerStr+= '</div>';

					answerStr+= '<div class="clearfix"></div>';
					answerStr+= '</div>';
					answerStr+= '<div class="clearfix"></div>';

				answerStr+= '</div>';
			}
			$('#table').html(answerStr);
			$('.usedList .table').css('display', 'block');
			$('.init').css('display', 'none');
		}else{
			$('.usedList .table').css('display', 'none');
			$('.init').css('display', 'block');
		}
		
	}
}window.addEventListener('load', doFirst, false);