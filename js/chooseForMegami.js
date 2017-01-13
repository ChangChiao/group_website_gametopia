function chooseForMegami(){
	$("div[class='Qtypes']").click(function(){
		var gameType = $(this).text();
		$("input[name='typeResult']").val(gameType);
	});
	$("div[class='QgameMoms']").click(function(){
		var consoleResult = $(this).text();
		$("input[name='consoleResult']").val(consoleResult);

		searchResult();
	});
}

function searchResult(){
	var gameType = $("input[name='typeResult']").attr("value");
	console.log(gameType);
	var consoleResult = $("input[name='consoleResult']").attr("value");
	console.log(consoleResult);

	$.ajax({
		url:"function/seccondHandMegami.php",
		type:"POST",
		data:{gameType:gameType,consoleResult:consoleResult},
		dataType:"JSON",
		success: function(data){
			if(data['status'] == 'success'){
				//搜尋後商品小圖
				$("img[name='resultImg']").attr("src",data["result"]["proImg"]);
				$("#SH_productName").text(data["result"]["proName"]);
				//商品詳細
				// console.log(data["result"]["proSeries"]);
				$("#SH_productName_detail").text(data["result"]["proName"]);
				$("#SH_ProductImg").attr("src",data["result"]["proImg"]);
				$("#price").text(data["result"]["proPrice"]);
				$("#sellMem").text(data["result"]["seller"]);
				$("#SH_productmemo").text(data["result"]["proInfo"]);
				$("#SH_productImg1").attr("src",data["result"]["proPic01"]);
				$("#SH_productImg2").attr("src",data["result"]["proPic02"]);
				$("#SH_productImg3").attr("src",data["result"]["proPic03"]);
				//主機標籤
				if(data["result"]["proSeries"] == 'PS4'){

					$("#gameMomPS").text("PS4");
					$("#gameMomPS").css("background-color","#0072BC");
					$("#gameMomPS").attr("id","gameMomPS");

				}else if(data["result"]["proSeries"] == 'XBOX'){

					$("#gameMomPS").text("XBOX");
					$("#gameMomPS").css("background-color","#7CC576");
					$("#gameMomPS").attr("id","gameMomXBOX");

				}else if(data["result"]["proSeries"] == '掌機'){

					$("#gameMomPS").text("掌機");
					$("#gameMomPS").css("background-color","#C05459");
					$("#gameMomPS").attr("id","gameMom3DS");

				}else if(data["result"]["proSeries"] == 'PC'){

					$("#gameMomPS").text("PC");
					$("#gameMomPS").css("background-color","#9955FF");
					$("#gameMomPS").attr("id","gameMomPC");

				}

				var proId = data["result"]["proId"];
				$("#addCart").click(function(){
					$.ajax({
						url: "function/sessionCartAdd.php",
						type: "POST",
						data: {proId:proId,quantity:1},
						dataType: "JSON"
					})
				})

				var seller = data["result"]["seller"];
				$("#sellMem").click(function(){
					location.href="mail_1.php?seller="+seller;
				})

			}else{
				alert('error');
			}
		}
		
	});
}