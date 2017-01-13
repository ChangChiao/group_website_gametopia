
function init(){
// 初始化bar高度
	if ( $("#mailList_2").css("height") == $("#mailBox_2").css("height") ) {
		$('#Scrollbar-Handle_2').css('height', "100%");
	}else{
		$('#Scrollbar-Handle_2').css('height', "calc(100% / 9)");
	}
	if ( $("#rightMailList").css("height").split('p')[0]-60+'px' == $("#mailBox_3").css("height") ) {
		$('#Scrollbar-Handle_3').css('height', "calc(100% - 60px)");
	}else{
		$('#Scrollbar-Handle_3').css('height', "calc(100% / 9)");
	}

// ================scroll_2================

	// 調整透明度
	$('#dv_scroll_track_2').mouseover(function(){
		$('#Scrollbar-Handle_2').css('opacity', '0.5');
	}).mouseout(function(){
		$('#Scrollbar-Handle_2').css('opacity', '0');
	});

	// $('#Scrollbar-Handle_2').mousedown().mouseup();
	$('#Scrollbar-Handle_2').mousedown(function(){
		var barHeight_2= $('#Scrollbar-Handle_2').css('height').split('p')[0];
		var totalBarHeight_2= $('#dv_scroll_track_2').css('height').split('p')[0];
		// $('#Scrollbar-Handle_2').mousemove();
		$('#Scrollbar-Handle_2').mousemove(function(e){
			console.log(e);
			var mb= $('#mailBox_2').css('height').split('p')[0];
			var ml= $('#mailList_2').css('height').split('p')[0];
			if(e.pageY-60 > barHeight_2/2 && (e.pageY-60)+(barHeight_2/2) < totalBarHeight_2){
			// 上下拉動

				$('#Scrollbar-Handle_2').css('top', ( (e.pageY-60)-(barHeight_2/2) )+'px');

				// 信件總欄的移動量
				var a= -( (e.pageY-60) - (barHeight_2/2) )*( (mb-ml) / (totalBarHeight_2-barHeight_2) );
				$('#mailBox_2').css('top', a+'px');

			}
			if( (e.pageY-60)+(barHeight_2/2) >= totalBarHeight_2){
			// 拉到底

				$('#Scrollbar-Handle_2').css('top', totalBarHeight_2-barHeight_2+'px');

			}
			
		});
	}).mouseup(function(){
		// remove mousemove eventListener
		$('#Scrollbar-Handle_2').off('mousemove');
		if(e.pageY-60 > barHeight_2/2 && (e.pageY-60)+(barHeight_2/2) < totalBarHeight_2){
			$('#Scrollbar-Handle_2').css('top', ( (e.pageY-60)-(barHeight_2/2) )+'px');
		}
		if( (e.pageY-60)+(barHeight_2/2) >= totalBarHeight_2){
			$('#Scrollbar-Handle_2').css('top', totalBarHeight_2-barHeight_2+'px');
		}
	});

// ================scroll_3================

	$('#dv_scroll_track_3').mouseover(function(){
		$('#Scrollbar-Handle_3').css('opacity', '0.5');
	}).mouseout(function(){
		$('#Scrollbar-Handle_3').css('opacity', '0');
	});

	// $('#Scrollbar-Handle_3').mousedown().mouseup();
	$('#Scrollbar-Handle_3').mousedown(function(){
		var barHeight_3= $('#Scrollbar-Handle_3').css('height').split('p')[0];
		var totalBarHeight_3= $('#dv_scroll_track_3').css('height').split('p')[0];
		// $('#Scrollbar-Handle_3').mousemove();
		$('#Scrollbar-Handle_3').mousemove(function(e){
			console.log(e);
			var mb= $('.mailBox2').css('height').split('p')[0];
			var ml= $('.mailInfoList').css('height').split('p')[0];
			if(e.pageY-60 > barHeight_3/2 && (e.pageY-60)+(barHeight_3/2) < totalBarHeight_3-60){
			// 上下拉動

				$('#Scrollbar-Handle_3').css('bottom', totalBarHeight_3-( (e.pageY-60)+(barHeight_3/2) )+'px');

				// 信件內容的移動量
				var a= -( totalBarHeight_3-( (e.pageY-60)+(barHeight_3/2) )-60 )*( (mb-ml+60) / (totalBarHeight_3-barHeight_3-60) );
				$('.mailBox2').css('bottom', a+60+'px');

			}
			if( (e.pageY-60)+(barHeight_3/2) <= barHeight_3){
			// 拉到最上方

				$('#Scrollbar-Handle_2').css('bottom', totalBarHeight_3-barHeight_3+'px');

			}
			
		});
	}).mouseup(function(){
		// remove mousemove eventListener
		$('#Scrollbar-Handle_3').off('mousemove');
		if(e.pageY-60 > barHeight_3/2 && (e.pageY-60)+(barHeight_3/2) < totalBarHeight_3-60){
			$('#Scrollbar-Handle_3').css('bottom', totalBarHeight_3-( (e.pageY-60)+(barHeight_3/2) )+'px');
		}
		if( (e.pageY-60)+(barHeight_3/2) <= barHeight_3){
			$('#Scrollbar-Handle_3').css('bottom', totalBarHeight_3-barHeight_3+'px');
		}
	});


// ================mousewheel================
	document.getElementById('mailList_2').onwheel= twoWheel;
	document.getElementById('rightMailList').onwheel= threeWheel;


// ================輸入內文================
	$('.contenteditable').keyup(function(){
		var typedText= this.innerText;
		var ph= '#ph_'+ this.id.split('_')[1];
		if (typedText!= "") {
			$(ph).text("");
		}else{
			$(ph).text("請輸入內文");
		}

		var cont= '#mailContent_'+ this.id.split('_')[1];
		$(cont).val(typedText);
		console.log($(cont).val());
	});

// ================送出信件================
	$("#sendNewMail_1").click(function(){
		$("#form_1").submit();
	});
	$("#sendNewMail_2").click(function(){
		$("#form_2").submit();
	});
	
}

function oneWheel(e){
	$('#Scrollbar-Handle_1').css('opacity', '0.5');

	var barHeight= $('#Scrollbar-Handle_1').css('height').split('p')[0];
	var totalBarHeight= $('#dv_scroll_track_1').css('height').split('p')[0];
	var mb= $('#mailBox_1').css('height').split('p')[0];
	var ml= $('#mailList_1').css('height').split('p')[0];
	var a;

	var direction= e.deltaY;// e.deltaY 往下滾為正
	var barPosition= $('#Scrollbar-Handle_1').css('top').split('p')[0];
	if ( direction>0 && !(barPosition>= totalBarHeight-barHeight) ){
	// 方向往下

		if ( barPosition-(-14) > totalBarHeight-barHeight ) {

			a= -( totalBarHeight-barHeight )*( (mb-ml) / (totalBarHeight-barHeight) )+'px';
			barPosition= totalBarHeight-barHeight+'px';

		}else {

			a= -( barPosition-(-14) )*( (mb-ml) / (totalBarHeight-barHeight) )+'px';
			barPosition= barPosition-(-14)+'px';

		}
	}else if ( direction<0 && !(barPosition<= 0) ) {
	// 方向往上
		if ( barPosition-14 < 0 ) {
			a= '0px';
			barPosition= '0px';
		}else {

			a= -( barPosition-14 )*( (mb-ml) / (totalBarHeight-barHeight) )+'px';
			barPosition= barPosition-14+'px';

		}
	}
	$('#Scrollbar-Handle_1').css('top', barPosition);
	$('#mailBox_1').css('top', a);
	// $('#Scrollbar-Handle_1').delay(3000).css('opacity', '0');===>not work
	$setTimeout(function(){
		$('#Scrollbar-Handle_1').css('opacity', '0');
	},1);
}
function twoWheel(e){
	$('#Scrollbar-Handle_2').css('opacity', '0.5');

	var barHeight= $('#Scrollbar-Handle_2').css('height').split('p')[0];
	var totalBarHeight= $('#dv_scroll_track_2').css('height').split('p')[0];
	var mb= $('#mailBox_2').css('height').split('p')[0];
	var ml= $('#mailList_2').css('height').split('p')[0];
	var a;

	var direction= e.deltaY;// e.deltaY 往下滾為正
	var barPosition= $('#Scrollbar-Handle_2').css('top').split('p')[0];
	if ( direction>0 && !(barPosition>= totalBarHeight-barHeight) ){
	// 方向往下

		if ( barPosition-(-14) > totalBarHeight-barHeight ) {

			a= -( totalBarHeight-barHeight )*( (mb-ml) / (totalBarHeight-barHeight) )+'px';
			barPosition= totalBarHeight-barHeight+'px';

		}else {

			a= -( barPosition-(-14) )*( (mb-ml) / (totalBarHeight-barHeight) )+'px';
			barPosition= barPosition-(-14)+'px';

		}
	}else if ( direction<0 && !(barPosition<= 0) ) {
	// 方向往上
		if ( barPosition-14 < 0 ) {
			a= '0px';
			barPosition= '0px';
		}else {

			a= -( barPosition-14 )*( (mb-ml) / (totalBarHeight-barHeight) )+'px';
			barPosition= barPosition-14+'px';

		}
	}
	$('#Scrollbar-Handle_2').css('top', barPosition);
	$('#mailBox_2').css('top', a);
	// $('#Scrollbar-Handle_2').delay(3000).css('opacity', '0');===>not work
	$setTimeout(function(){
		$('#Scrollbar-Handle_2').css('opacity', '0');
	},1);
}
function threeWheel(e){
	$('#Scrollbar-Handle_3').css('opacity', '0.5');

	var barHeight= $('#Scrollbar-Handle_3').css('height').split('p')[0];
	var totalBarHeight= $('#dv_scroll_track_3').css('height').split('p')[0];
	var mb= $('.mailBox2').css('height').split('p')[0];
	var ml= $('.mailInfoList').css('height').split('p')[0];
	var a;

	var direction= e.deltaY;// e.deltaY 往下滾為正
	var barPosition= $('#Scrollbar-Handle_3').css('bottom').split('p')[0];
	if ( direction<0 && !(barPosition>= totalBarHeight-barHeight) ){
	// 方向往上

		if ( barPosition-(-14) > totalBarHeight-barHeight ) {

			a= -( totalBarHeight-barHeight )*( (mb-ml) / (totalBarHeight-barHeight) )+'px';
			barPosition= totalBarHeight-barHeight+'px';

		}else {

			a= -( barPosition-(-14) )*( (mb-ml) / (totalBarHeight-barHeight) )+'px';
			barPosition= barPosition-(-14)+'px';

		}
	}else if ( direction>0 && !(barPosition<= 0) ) {
	// 方向往下

		if ( barPosition-14 < 60 ) {
			a= '60px';
			barPosition= '60px';
		}else {

			a= -( barPosition-14 )*( (mb-ml) / (totalBarHeight-barHeight) )+'px';
			barPosition= barPosition-14+'px';

		}
	}
	$('#Scrollbar-Handle_3').css('bottom', barPosition);
	$('.mailBox2').css('bottom', a);
	// $('#Scrollbar-Handle_3').delay(3000).css('opacity', '0');===>not work
	$setTimeout(function(){
		$('#Scrollbar-Handle_3').css('opacity', '0');
	},1);
}
window.addEventListener('load', init, false);