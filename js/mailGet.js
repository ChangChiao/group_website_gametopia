$('document').ready(function(){
	$('#R2').click(function(){
		$(this).css('background','#ccc');
		$('.right').css('right','0').css('index',500);
	});

	$('#back_btn').click(function(){
		$('.right').css('right','-100%');
	}); 	
});


function onloadTriger(){

	getStart();

}

function getStart(){

	var mailType = 'beginning';
	var memAccount = $('input[name="forMemberAccount"]').val();

	$.ajax({
		url:"function/mailGet.php",
		type:"POST",
		data:{mailType:mailType,memAccount:memAccount},
		dataType:"JSON",
		success: function(data){
			if(data["status"] == "success"){
				
				$('.unReadCount').text('('+data["unReadCount"]+')');
				$('#mailBox_2').html(data["data"]);
			}else{
				alert('error');
			}
		}
	})

	setInterval("getStart()",60000);
}
//點擊左側會員頭像倒出右側訊息
function getMesFromMemberTriger(mailId){	

	getMesFromMember(mailId);
	getStart();
	
}

function getMesFromMember(mailId){

	var a = mailId;
	var mailFrom = $("#"+a).attr('mailFrom');
	// var mailId = $('.mail').attr('mailId');
	
	var mailTypeRight = 'memberOnClick';
	var memAccount = $('input[name="forMemberAccount"]').val();

	console.log(mailFrom);
	console.log(a);
	

	$.ajax({

		url: "function/mailGet.php",
		type: "POST",
		data: {mailType:mailTypeRight,mailId:mailId,mailFrom:mailFrom,memAccount:memAccount},
		dataType: "JSON",
		success: function(data){
			if(data["status"] == "success"){
				$('#mailBox_3').html(data['data']);
				//移植相關資料到回信INPUT欄位
				$('.mailTo').text(' '+data['mailFrom']);
				$('input[name="remail_mailTo"]').val(data['mailFrom']);
				$('input[name="remail_mailFrom"]').val(memAccount);
				$('input[name="remail_mailId"]').val(a);

				//移植相關資料到新寄信INPUT欄位
				$('input[name="newMail_mailFrom"]').val(memAccount);

			}
		}

	})

	setInterval("getMesFromMember(mailId)",60000);

}

function replyMail(){
	var mailInfo = $('input[name="remail_mailInfo"]').val();
	var mailFrom = $('input[name="remail_mailFrom"]').val();
	var mailTo = $('input[name="remail_mailTo"]').val();
	var mailId = $('input[name="remail_mailId"]').val();
	var mailSource = 'reMail';

	

	$.ajax({
		url:"function/mailSend.php",
		data: {mailInfo:mailInfo,mailFrom:mailFrom,mailTo:mailTo,mailId:mailId,mailSource:mailSource},
		type: "POST",
		dataType: "JSON",
		success: function(data){
			if(data['status'] == 'success'){
				
				$('#cont_1').text("");
				getMesFromMemberTriger(mailId);
			}
		}
	})
}


function newMail(){
	var mailTo = $('input[name="newMail_mailTo"]').val();
	var mailInfo = $('input[name="newMail_mailInfo"]').val();
	var mailFrom = $('input[name="newMail_mailFrom"]').val();
	var mailSource = 'newMail';

	$.ajax({

		url:"function/mailSend.php",
		type:"POST",
		data:{mailTo:mailTo,mailInfo:mailInfo,mailFrom:mailFrom,mailSource:mailSource},
		dataType:"JSON",
		success: function(data){
			if(data['status'] == 'success'){
				
				location.href='mail_1.php';
			}
		}

	})


}


window.addEventListener('load', onloadTriger, false);