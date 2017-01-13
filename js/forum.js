function init(){

	$("#btnUpload").click(function(){ //發表新文章的圖片按鈕
		$("#upImg").trigger('click');
	});

	$("#btnClose").click(function(){ //發表新文章關閉按鈕
		$(".giantBox").css("display","none");
	});

	$("a.btnPost").click( openForm );  //頁面上的發表文章
	$("button#btnReply").click( openForm );

	$("button#btnSend").click( formValidation ); //發表文章光箱的送出按鈕	
}

function fillzero(num, k){ //驗證碼補0用函式
	if((num/k) >= 1){
		return num;
	}else{
		return "0"+fillzero(num, k/10);
	}
}

function openForm(e){ /*開啟發文光箱*/
	if ( this == document.getElementById("btnPost") ){
		e.preventDefault(); //防止<a>的預設行為
	}
	if ( this == document.getElementById("btnReply") ){
		$("#postArticle h2.title").text("回覆文章");
		$("#form_Post").attr("action", "function/forumAddReply.php");
		$("#postArticle .platNcat").css("display", "none");
		$("#postArticle .artTitle").css("display", "none");
		$("#postArticle .artImg").css("display", "none");
		$("#postArticle textarea").attr("name", "replyContent");
	}else if( this == document.getElementById("btnPost") ){
		$("#postArticle h2.title").text("發表新文章");
		$("#form_Post").attr("action", "function/forumAddArticle.php");
		$("#postArticle .platNcat").css("display", "block");
		$("#postArticle .artTitle").css("display", "block");
		$("#postArticle .artImg").css("display", "block");
		$("#postArticle textarea").attr("name", "artContent");
	}
	$(".giantBox").css("display","block");
	var rdm = Math.round(Math.random()*9997)+1; //隨機產生驗證碼
	rdm = fillzero(rdm, 1000);
	
	$("span#randomCode").text(rdm); 
}

function formValidation(){
	var i = 0;
	var errString = "";
	if( $("#postArticle h2.title").text()== "發表新文章"){
		if( $("#platform").val() == 'default' ){
		errString += "請選擇平台\n";
		i++;
		}
		if( $("#postCategory").val() == 'default' ){
			errString += "請選擇文章類型\n";
			i++;
		}
	}
	
	if ( $("span#randomCode").text() != $("input#examCode").val() ){
		errString += "驗證碼錯誤\n";
		i++;
	}
	if( i == 0 ){
		$("form#form_Post").submit();
	}else{
		rdm = Math.round(Math.random()*9997)+1;
		$("span#randomCode").text(rdm);
		alert( errString );
	}
}


window.addEventListener("load", init); 

