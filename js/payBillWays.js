var ifFilled= [0,0,0,0];// cardNum, month, year, safeCode
function doFirst(){
	var dataEqualToMember= 0;
	var state= [0, 0, 0, 0];
	var date= new Date();

// 開關 ul========================================================
	$('#addrTitleSelector').click(function(){
		if ( $('.addrTitle ul').css('display')== 'block' ) {
			$('.addrTitle ul').css('display', 'none');
		}else {
			$('.addrTitle ul').css('display', 'block');
		}
	});

// 地址開頭選擇===================================================
	$('.addrTitle ul li').click(function(){
		// 改變上一個選項的CSS 設定
		$('#AT').css('backgroundColor', '#fff');
		$('#AT').css('color', '#000');

		// id 互換
		var id= $('#AT').attr('id');
		$('#AT').attr('id', '');
		this.id= id;

		// 改變已選項目的CSS 設定
		$('#AT').css('backgroundColor', '#fa0');
		$('#AT').css('color', '#fff');

		// 改變所選值
		$('#addrTitle').text(this.innerText);

		$('.addrTitle ul').css('display', 'none');
	});

// 選擇寄送方式===================================================
	$('.sendMethod .checkMethodBtn').click(function(){
		// console.log();
		if (this.innerHTML==$('#mailTo').html()) {
			$('#mailTo span').css('backgroundColor', '#333');
			$('#packageTo span').css('backgroundColor', '#fff');
		}else{
			$('#mailTo span').css('backgroundColor', '#fff');
			$('#packageTo span').css('backgroundColor', '#333');
		}
		$('#sendMethod').val(this.innerText);
	});

// 選擇付款方式===================================================
	$('#month').text(date.getMonth()+1);
	$('#year').text(date.getFullYear());


	$('.payMethod .checkMethodBtn').click(function(){
		if (this.innerHTML==$('#cardPay').html()) {
			$('#cardPay span').css('backgroundColor', '#333');
			$('#remittance span').css('backgroundColor', '#fff');
			$('.cardNum, #month, #year, #safe div').css('backgroundColor', '#fff');

		}else{
			$('#cardPay span').css('backgroundColor', '#fff');
			$('#remittance span').css('backgroundColor', '#333');

			// 信用卡資料要清空
			ifFilled= [0,0,0,0];

			$('#cardNumber').val('');
			$('#validityPeriod').val('');
			$('#safeCode').val('');

			$('.cardNum').text('xxxx');
			$('#month').text(date.getMonth()+1);
			$('#year').text(date.getFullYear());
			$('#safe div').text('xxx');
			$('.cardNum, #month, #year, #safe div').css('backgroundColor', '#333');
			$('.cardNum, #month, #year, #safe div').css('color', '#aaa');

		}
		$('#payMethod').val(this.innerText);
	});

	// focus
	$('.cardNum, #month, #year, #safe div').focus(function(event){
		// 檢查使用者選項
		if($('#payMethod').val().indexOf('ATM 轉帳')+1)
			this.blur();
		else
			this.style.color= "#000";
	});
	$('.cardNum').focus(function(){
		if($('#payMethod').val().indexOf('ATM 轉帳')+1){
			this.blur();
		}else if(this.innerText== "xxxx"){
				this.innerText= "";
		}
	});
	$('#month').focus(function(){
		if($('#payMethod').val().indexOf('ATM 轉帳')+1){
			this.blur();
		}else if(ifFilled[1]== 0){
				this.innerText= "";
		}
	});
	$('#year').focus(function(){
		if($('#payMethod').val().indexOf('ATM 轉帳')+1){
			this.blur();
		}else if(ifFilled[2]== 0){
			this.innerText= "";
		}
	});
	$('#safe div').focus(function(){
		if($('#payMethod').val().indexOf('ATM 轉帳')+1){
			this.blur();
		}else if(ifFilled[3]== 0){
			this.innerText= "";
		}
	});

	// blur
	$('.cardNum').blur(function(event){
		// 檢查卡號
		if (this.innerText== "" || this.innerText== "xxxx" || this.innerHTML== "<br>") {
			// 若為空字串，或輸入內容為預設的值
			// 在FireFox 上，用backspace，innerHTML 會有<br>標籤，所以innerText != ""
			this.innerHTML= "xxxx";
			ifFilled[0]= 0;
			this.style.color= "#aaa";

		}else{
			this.style.color= "#000";
			// console.log(this.innerHTML);
			// console.log(this.innerText);
			if ( $('.cardNum').text().indexOf("xxxx") ) {
				// 若不包含"xxxx"，$('.cardNum').text().indexOf("xxxx")=(-1)
				ifFilled[0]= 1;

			}
		}
	});

	$('#month').blur(function(event){
		// 檢查月
		if (this.innerText== "" || this.innerHTML< date.getMonth()+1) {
			// 若為空字串，或月份小於當月
			this.innerHTML= date.getMonth()+1;
			ifFilled[1]= 0;
			this.style.color= "#aaa";

		}else if ($('#payMethod').val().indexOf('ATM 轉帳')+1) {
			ifFilled[1]= 0;
			this.style.color= "#aaa";
		}else{
			ifFilled[1]= 1;
			this.style.color= "#000";
			checkDate();

		}
	});

	$('#year').blur(function(event){
		// 檢查年
		if (this.innerText== "" || this.innerHTML< date.getFullYear()) {
			// 若為空字串，或年份小於今年
			this.innerHTML= date.getFullYear();
			ifFilled[2]= 0;

			if (ifFilled[1]) {
				// 月份已填寫的情況下
				$('#date span').text("年份尚未填寫");

			}
			this.style.color= "#aaa";

		}else if ($('#payMethod').val().indexOf('ATM 轉帳')+1) {
			ifFilled[2]= 0;
			this.style.color= "#aaa";
		}else{
			ifFilled[2]= 1;
			this.style.color= "#000";
			checkDate();

		}
	});

	function checkDate(){
		var MONTH= $('#month').text();
		var YEAR= $('#year').text();
		var year= date.getFullYear();

		if( parseInt(YEAR)== NaN || YEAR/2000< 1 || YEAR< year){
			$('#date span').text("年份錯誤");
			ifFilled[2]= 0;
			$('#year').text(date.getFullYear());
			$('#year').css('color', '#aaa');

		}else if(ifFilled[2]== 0 && ifFilled[1]== 1){
			// 年份還沒填，先填了月份
			$('#date span').text("年份尚未填寫");

		}else if(ifFilled[2]== 1 && ifFilled[1]== 0){
			// 年份已填寫，月份還未填寫
			$('#date span').text("");

		}else{
			// 若年份正確，檢查月份
			if( parseInt(MONTH)!= NaN && !(MONTH== 1 || MONTH== 2 || MONTH== 3 || MONTH== 4 || MONTH== 5 || MONTH== 6 || MONTH== 7 || MONTH== 8 || MONTH== 9 || MONTH== 10 || MONTH== 11 || MONTH== 12) && ifFilled[1]== 1 ){
				if(ifFilled[1]== 1){
					$('#date span').text("月份錯誤");
					ifFilled[1]= 0;
					$('#month').text(date.getMonth()+1);
					$('#month').css('color', '#aaa');

				}else{
					$('#date span').text("");

				}
			}else if( YEAR<= date.getFullYear() && MONTH< date.getMonth()+1 ){
				$('#date span').text("月份錯誤");
				ifFilled[1]= 0;
				$('#month').text(date.getMonth()+1);
				$('#month').css('color', '#aaa');

			}

		}
	};

	$('#safe div').blur(function(event){
		// 檢查安全碼填寫
		if (this.innerText== "" || this.innerText== "xxx" || this.innerHTML== "<br>") {
			this.innerHTML= "xxx";
			ifFilled[3]= 0;
			this.style.color= "#aaa";

		}else{
			if (this.innerText.length== 3) {
				ifFilled[3]= 1;
				this.style.color= "#000";
				$('#safe div+span').html("");

			}else{
				$('#safe div+span').html("安全碼錯誤");
				this.innerHTML= "xxx";
				ifFilled[3]= 0;
				this.style.color= "#aaa";

			}
		}
	});

// 選擇發票=======================================================
	$('.reciptType .checkMethodBtn').click(function(){
		if (this.innerHTML== $('#donate').html()) {
			$('#donate span').css('backgroundColor', '#333');
			$('#twoCol span').css('backgroundColor', '#fff');
			$('#threeCol span').css('backgroundColor', '#fff');
		}else if (this.innerHTML== $('#twoCol').html()) {
			$('#donate span').css('backgroundColor', '#fff');
			$('#twoCol span').css('backgroundColor', '#333');
			$('#threeCol span').css('backgroundColor', '#fff');
		}else{
			$('#donate span').css('backgroundColor', '#fff');
			$('#twoCol span').css('backgroundColor', '#fff');
			$('#threeCol span').css('backgroundColor', '#333');
		}
		$('#reciptType').val(this.innerText);
	});

// 取得收件人資訊=================================================
	$('#forName').keyup(function(){
		var name= this.innerHTML;
		$('#nameSendTo').val(name);
	});
	$('#forTel').keyup(function(){
		var tel= this.innerHTML;
		$('#telSendTo').val(tel);
	});
	$('#forAddr').keyup(function(){
		var addr= $('#addrTitle').text()+ this.innerHTML;
		$('#addrSendTo').val(addr);
	});


	$('#forName').blur(function(){
		var name= this.innerHTML;
		if (name.indexOf('<br>')>= 0) {
			this.innerHTML= name.split('<br>')[0];
			name= this.innerHTML;
		}
		$('#nameSendTo').val(name);
	});
	$('#forTel').blur(function(){
		var tel= this.innerHTML;
		if (tel.indexOf('<br>')>= 0) {
			this.innerHTML= tel.split('<br>')[0];
			tel= this.innerHTML;
		}
		$('#telSendTo').val(tel);
	});
	$('#forAddr').blur(function(){
		var addr= this.innerHTML;
		if (addr.indexOf('<br>')>= 0) {
			this.innerHTML= addr.split('<br>')[0];
			addr= this.innerHTML;
		}
		addr= $('#addrTitle').text()+ addr;
		$('#addrSendTo').val(addr);
	});

// 送出資料前的檢查===============================================
	$('#next').click(function(){
		var flag= 0;
		var name= $('#nameSendTo').val();
		var tel= $('#telSendTo').val();
		var addr= $('#addrSendTo').val();

		if (name== "" || tel== "" || addr== "") {
			// 若有任何一項收件人資訊未填寫
			$('#next+span').html('收件人資訊未填寫完畢');
		}else{
			for (var i = 0; i < ifFilled.length; i++) {
				if (ifFilled[i]== 0) {
					// 有其中一項信用卡資訊未填寫
					flag= 0;
					if ( $('#payMethod').val()== "信用卡" ) {
						// 有一項信用卡資訊未填寫，且付款方式為"信用卡"
						$('#next+span').html('信用卡資料未填寫完畢');
					}
					break;
				}else{
					flag= 1;
				}
			}

			if (flag) {
				// 付款方式為"信用卡"，且都填寫完畢
				// 將資料放入表單中
				$('#cardNumber').val( $('.cardNum').text() );
				$('#validityPeriod').val( $('#year').text()+ "/"+ $('#month').text() );
				$('#safeCode').val( $('#safe div').text() );
			}


			if ( (flag || $('#payMethod').val()== "ATM 轉帳") && !(name== "" || tel== "" || addr== "") ) {
				// 付款方式為"信用卡"或為"ATM 轉帳"，且所有收件人資訊皆填寫完畢
				$('#form').submit();
			}
		}

		
	});
};
window.addEventListener('load', doFirst, false);