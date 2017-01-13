<?php

error_reporting(E_ALL || ~E_NOTICE);

require_once("function/connectSQL.php");
// error_reporting(E_ALL || ~E_NOTICE);

$proId = $_GET["proId"];

$proQuery = "SELECT * FROM products WHERE proId = '$proId'";
$proRec = $pdo->query($proQuery);
$proRow = $proRec->fetch(PDO::FETCH_ASSOC);

$clickNum = $proRow["clickNum"]+1;
$clickQuery = "UPDATE products SET clickNum = '$clickNum' WHERE proId = '$proId'";
$clickRec = $pdo->query($clickQuery);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utff-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>商品詳細</title>
	<link rel="stylesheet" type="text/css" href="css/productIntro.css">
	<link rel="Shortcut Icon" type="image/x-icon" href="images/gametopia.ico"/>
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<script src="js/jquery-3.1.1.min.js"></script>
	

</head>
<body class="sm">
	<?php
	include("function/header.php");
	?>
	<?php
	include("function/memberBarSwitcher.php");
	?>
	<div class="outBox">

		<div class="first">
			<div class="col_xs_12 col_sm_8 breadCrumbs">
			<!-- 麵包屑 -->
				<span class="a"><a href="#">所有遊戲</a></span>
				<span class="b">&raquo;</span>
				<span class="a"><a href="#">動作類</a></span>
				<span class="b">&raquo;</span>
				<span class="a">巫師3:狂獵</span>
			</div>
			<div class="clearfix"></div>
			<div class="col_xs_12 col_sm_6 prodImage">
				<div class="col_xs_2 col_sm_2 smallPic">
				<!-- 四張小圖 -->
					<div class="pic">
						<div class="col_xs_4 col_sm_4"></div>
						<div class="col_xs_8 col_sm_12 imgConstrain">
							<img id="pic1" src="<?php echo $proRow["proImg"]; ?>" class="col_xs_12 col_sm_12">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="pic">
						<div class="col_xs_4 col_sm_4"></div>
						<div class="col_xs_8 col_sm_12 imgConstrain">
							<img id="pic2" src="<?php echo $proRow["proPic01"]; ?>" class="col_xs_12 col_sm_12">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="pic">
						<div class="col_xs_4 col_sm_4"></div>
						<div class="col_xs_8 col_sm_12 imgConstrain">
							<img id="pic3" src="<?php echo $proRow["proPic02"]; ?>" class="col_xs_12 col_sm_12">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="pic">
						<div class="col_xs_4 col_sm_4"></div>
						<div class="col_xs_8 col_sm_12 imgConstrain">
							<img id="pic4" src="<?php echo $proRow["proPic03"]; ?>" class="col_xs_12 col_sm_12">
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col_xs_10 col_sm_10 showPic">
				<!-- 大圖SHOW -->
					<div class="col_xs_12 col_sm_11 imgConstrain">
						<img src="<?php echo $proRow["proImg"]; ?>" class="col_xs_12 col_sm_12" id="prodBigImg">
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col_xs_12 col_sm_6 prodIntroduce">
				<div class="prodTitle">巫師3:狂獵</div>
				<div class="machinType">
				<!-- 動態新增 -->
					<div class="tag" id="gameMomPS">PS4</div>
				</div>
				<div class="price">
					NT$890
				</div>
				<div class="star">
					玩家評分　4.5星
				</div>
				<div class="pay">
					付款方式 &gt; <img class="payImg" src="images/atm.png" alt=""><img class="payImg" src="images/visa.png" alt="">
				</div>
				<div class="send">
					配送方式 &gt; 郵寄/宅配
				</div>
				<form action="function/sessionCartAdd.php" method="post">
					<div class="qty">
						數量
						<select name="quantity">
						<!-- 動態增加 -->
							<option value="1">　1　</option>
							<option value="2">　2　</option>
							<option value="3">　3　</option>
							<option value="4">　4　</option>
							<option value="5">　5　</option>
						</select>
					</div>
					<input type="hidden" name="proId" value="<?php echo $proRow["proId"]; ?>">

					<div class="aa">
						<button type="submit" class="btn_addCart">加入購物車</button>
					</div>
				</form>
				<!-- form Ends Here -->
			</div>
		</div>

		<div class="second">
			<div class="col_xs_12 col_sm_12 smallTitle">
				<span class="col_xs_4 col_sm_2 col_md_2 col_lg_2">遊戲介紹</span>
			</div>
			<div class="col_sm_1"></div>
			<div class="col_xs_12 col_sm_10">
				<?php echo $proRow["proInfo"]; ?>
			</div>
			<div class="clearfix"></div>
		</div>

<!-- 		<div class="third">
			<div class="col_xs_12 col_sm_12 smallTitle">
				<span class="col_xs_4 col_sm_2 col_md_2 col_lg_2">系統需求</span>
			</div>
			<div class="col_sm_3"></div>
			<div class="col_xs_12 col_sm_6">
				<p>
					作業系統 : <span>Lorem ipsum dolor sit amet.</span>
				</p>
				<p>
					處理器 : <span>Lorem ipsum dolor sit amet.</span>
				</p>
				<p>
					記憶體 : <span>Lorem ipsum dolor sit amet.</span>
				</p>
				<p>
					顯示卡 : <span>Lorem ipsum dolor sit amet.</span>
				</p>
				<p>
					Direct : <span>Lorem ipsum dolor sit amet.</span>
				</p>
				<p>
					儲存空間 : <span>Lorem ipsum dolor sit amet.</span>
				</p>
			</div>
			<div class="clearfix"></div>
		</div> -->

		<div class="forth">
			<div class="col_xs_12 col_sm_12 smallTitle">
				<span class="col_xs_4 col_sm_2 col_md_2 col_lg_2">推薦商品</span>
			</div>


			<?php
			//推薦商品
			$proSeries = $proRow["proSeries"];
			$proComQuery = "SELECT * FROM products WHERE proSeries = '$proSeries' ORDER BY id DESC LIMIT 0,4";
			$proComRec = $pdo->query($proComQuery);
			while($proComRow = $proComRec->fetch(PDO::FETCH_ASSOC)){
			?>
			<div class="col_xs_6 col_sm_2 col_md_3 prodRecommend">
				<div class="imgConstrain">
					<img class="col_xs_12 col_sm_12" src="<?php echo $proComRow["proImg"]; ?>">
				</div>
				<div id="recommendGameName_1"><?php echo $proComRow["proName"]; ?></div>
				<div id="recommendGamePrice_1">NT$ <?php echo $proComRow["proPrice"]; ?></div>
			</div>
			<?php } ?>		

<!-- 			<div class="col_xs_6 col_sm_2 col_md_3 prodRecommend">
				<div class="imgConstrain">
					<img class="col_xs_12 col_sm_12" src="s9129171.jpg">
				</div>
				<div id="recommendGameName_2">FIVA</div>
				<div id="recommendGamePrice_2">NT$750</div>
			</div>
			<div class="col_xs_6 col_sm_2 col_md_3 prodRecommend">
				<div class="imgConstrain">
					<img class="col_xs_12 col_sm_12" src="s9129171.jpg">
				</div>
				<div id="recommendGameName_3">FIVA</div>
				<div id="recommendGamePrice_3">NT$750</div>
			</div>
			<div class="col_xs_6 col_sm_2 col_md_3 prodRecommend">
				<div class="imgConstrain">
					<img class="col_xs_12 col_sm_12" src="s9129171.jpg">
				</div>
				<div id="recommendGameName_4">FIVA</div>
				<div id="recommendGamePrice_4">NT$750</div>
			</div>
			<div class="col_xs_6 col_sm_2 prodRecommend">
				<div class="imgConstrain">
					<img class="col_xs_12 col_sm_12" src="s9129171.jpg">
				</div>
				<div id="recommendGameName_5">FIVA</div>
				<div id="recommendGamePrice_5">NT$750</div>
			</div>
			<div class="col_xs_6 col_sm_2 prodRecommend">
				<div class="imgConstrain">
					<img class="col_xs_12 col_sm_12" src="s9129171.jpg">
				</div>
				<div id="recommendGameName_6">FIVA</div>
				<div id="recommendGamePrice_6">NT$750</div>
			</div> -->
			<div class="clearfix"></div>
		</div>

		<div class="fivth">
			<div class="col_xs_12 col_sm_12 smallTitle">
				<span class="col_xs_4 col_sm_2 col_md_2 col_lg_2">商品討論</span>
			</div>
			<div class="col_xs_12 col_sm_12 commentInput">
				<form method="post" action="function/productMessageInput.php"><!-- ======================= -->
					<div class="col_xs_12 col_sm_12 input">
						<div class="col_xs_2 col_sm_2 col_md_2 headBlock">
							<div class="imgConstrain">
								<img class="col_xs_12 col_sm_12" src="memImg/member01.jpg">
								<div class="clearfix"></div>
							</div>
							<div class="userName">斬卍凱蒂貓卍佛</div>
						</div>
						<div class="col_xs_12 col_sm_10 col_md_9 inputBlock">
							<input type="text" name="commentTitle" class="commentTitle" placeholder="請輸入標題">
							<textarea name="commentContent" class="commentContent" placeholder="請輸入評論"></textarea>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col_xs_12 col_sm_12 evaluate">
						<div class="col_xs_12 col_sm_6 star">
							<span>推薦指數</span>
							<input type="hidden" id="radioChecker" value="0">
							<label for="star01" class="starLabel"></label>
							<input type="radio" id="star01" value="1" name="stars">
							<label for="star02" class="starLabel"></label>
							<input type="radio" id="star02" value="2" name="stars">
							<label for="star03" class="starLabel"></label>
							<input type="radio" id="star03" value="3" name="stars">
							<label for="star04" class="starLabel"></label>
							<input type="radio" id="star04" value="4" name="stars">
							<label for="star05" class="starLabel"></label>
							<input type="radio" id="star05" value="5" name="stars">


							<input type="hidden" name="proId" value="<?php echo $proId; ?>">

<!-- 							<img src="star.png" class="starImg" id="star1">
							<img src="star.png" class="starImg" id="star2">
							<img src="star.png" class="starImg" id="star3">
							<img src="star.png" class="starImg" id="star4">
							<img src="star.png" class="starImg" id="star5"> -->
						</div>
						<?php
						if($memAccount == ""){
						?>
						<div class="col_xs_12 col_sm_6 sendComment">
							<input type="button" value="送出" id="sendComment" onclick="alert('請先登入會員');">
						</div>
						<?php }elseif ($memAccount == $_SESSION["GTopiaAccount"]) { ?>
						
						<input type="hidden" name="memAccount" value="<?php echo $memAccount; ?>">
						<div class="col_xs_12 col_sm_6 sendComment">
							<input type="submit" value="送出" id="sendComment">
						</div>
						<?php } ?>
						<div class="clearfix"></div>
					</div>					
					<div class="clearfix"></div>
				</form><!-- ======================= -->
			</div>

			<div class="col_xs_12 col_sm_12 commentType">
				<button id="commentType_all">
					全部<span></span>
				</button>
				<button id="commentType_excellent">
					極好<span></span>
				</button>
				<button id="commentType_soso">
					普通<span></span>
				</button>
				<button id="commentType_bad">
					極差<span></span>
				</button>
			</div>
			<div class="col_xs_12 col_sm_12 commentShow">

				<?php
				$mesQuery = "SELECT * FROM message WHERE proId = '$proId' AND status = '正常'";
				$mesRec = $pdo->query($mesQuery);
				while($mesRow = $mesRec->fetch(PDO::FETCH_ASSOC)){
				?>
				<div id = "<?php
							if($mesRow["stars"] == 5){
								echo "rateExcellent";
							}elseif($mesRow["stars"] >= 2 && $mesRow["stars"] <= 4){
								echo "rateSoso";
							}elseif($mesRow["stars"] == 1){
								echo "rateBad";
							}	
							?>" 
					 class="col_xs_12 col_sm_12 <?php
							if($mesRow["stars"] == 5){
								echo "excellent";
							}elseif($mesRow["stars"] >= 2 && $mesRow["stars"] <= 4){
								echo "soso";
							}elseif($mesRow["stars"] == 1){
								echo "bad";
							}	
							?>
							">
					<div class="col_xs_3 col_sm_3 col_md_2 headBlock">
						<div class="imgConstrain">
						<?php 
						 	$memQueryAccount = $mesRow["memAccount"];
	 						$memQuery = "SELECT * FROM memberdata WHERE memAccount = '$memQueryAccount'";
							$memRec = $pdo->query($memQuery);
							$memRow = $memRec->fetch(PDO::FETCH_ASSOC);	 
						?>
							<img class="col_xs_12 col_sm_12" src="<?php echo $memRow["memImg"]; ?>">
						</div>
						<div class="userName"><?php echo $memRow["memNickName"]; ?>	
						</div>
					</div>
					<div class="col_xs_9 col_sm_9 col_md_10 outputBlock">
						<div class="commentTitle"><?php echo $mesRow["mesTitle"]; ?></div>
						<div class="commentContent"><?php echo $mesRow["mesInfo"]; ?></div>
					</div>
					<div class="clearfix"></div>
					<div class="col_xs_12 col_sm_12 evaluate">
						<div class="col_sm_6 col_md_8"></div>
						<div class="col_xs_12 col_sm_6 col_md_6 star">
							<span>推薦指數</span>
							<?php
							for ($i=1; $i <= $mesRow["stars"]; $i++) { 	
							?>
							<img src="images/yellowStar.png" class="mesRates">
							<?php } ?>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
					
				<?php } ?>
				<!-- ====== -->

<!-- 				<div class="col_xs_12 col_sm_12 soso">
					<div class="col_xs_3 col_sm_3 col_md_2 headBlock">
						<div class="imgConstrain">
							<img class="col_xs_12 col_sm_12" src="2014051449076957.jpg">
						</div>
						<div class="userName">斬卍凱蒂貓卍佛</div>
					</div>
					<div class="col_xs_9 col_sm_9 col_md_10 outputBlock">
						<div class="commentTitle">普通普通</div>
						<div class="commentContent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit a, maiores id, distinctio ipsa quae quaerat fuga omnis temporibus architecto!</div>
					</div>
					<div class="col_xs_12 col_sm_12 evaluate">
						<div class="col_sm_6 col_md_8"></div>
						<div class="col_xs_12 col_sm_6 col_md_4 star">
							<span>推薦指數</span>
							<img src="star.png">
							<img src="star.png">
							<img src="star.png">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="col_xs_12 col_sm_12 bad">
					<div class="col_xs_3 col_sm_3 col_md_2 headBlock">
						<div class="imgConstrain">
							<img class="col_xs_12 col_sm_12" src="2014051449076957.jpg">
						</div>
						<div class="userName">斬卍凱蒂貓卍佛</div>
					</div>
					<div class="col_xs_9 col_sm_9 col_md_10 outputBlock">
						<div class="commentTitle">超級糞Game</div>
						<div class="commentContent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit a, maiores id, distinctio ipsa quae quaerat fuga omnis temporibus architecto!</div>
					</div>
					<div class="col_xs_12 col_sm_12 evaluate">
						<div class="col_sm_6 col_md_8"></div>
						<div class="col_xs_12 col_sm_6 col_md_4 star">
							<span>推薦指數</span>
							<img src="star.png">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div> -->
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<?php 
		include('function/footer.php');
	?>
</body>
</html>
<script>
	

			

			function starSystem(){

				//star01
				$("label[for='star01']").mouseover(function(){
					$("label[for='star01']").css("background-image","url(images/yellowStar.png)");
				});
				$("label[for='star01']").mouseleave(function(){
					$("label[for='star01']").css("background-image","url(images/star.png)");
				});
				//star02
				$("label[for='star02']").mouseover(function(){
					$("label[for='star01']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star02']").css("background-image","url(images/yellowStar.png)");
				});
				$("label[for='star02']").mouseleave(function(){
					$("label[for='star01']").css("background-image","url(images/star.png)");
					$("label[for='star02']").css("background-image","url(images/star.png)");
				});	
				//star03
				$("label[for='star03']").mouseover(function(){
					$("label[for='star01']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star02']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star03']").css("background-image","url(images/yellowStar.png)");
				});
				$("label[for='star03']").mouseleave(function(){
					$("label[for='star01']").css("background-image","url(images/star.png)");
					$("label[for='star02']").css("background-image","url(images/star.png)");
					$("label[for='star03']").css("background-image","url(images/star.png)");
				});	
				//star04
				$("label[for='star04']").mouseover(function(){
					$("label[for='star01']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star02']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star03']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star04']").css("background-image","url(images/yellowStar.png)");
				});
				$("label[for='star04']").mouseleave(function(){
					$("label[for='star01']").css("background-image","url(images/star.png)");
					$("label[for='star02']").css("background-image","url(images/star.png)");
					$("label[for='star03']").css("background-image","url(images/star.png)");
					$("label[for='star04']").css("background-image","url(images/star.png)");
				});	
				//star05
				$("label[for='star05']").mouseover(function(){
					$("label[for='star01']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star02']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star03']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star04']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star05']").css("background-image","url(images/yellowStar.png)");
				});
				$("label[for='star05']").mouseleave(function(){
					$("label[for='star01']").css("background-image","url(images/star.png)");
					$("label[for='star02']").css("background-image","url(images/star.png)");
					$("label[for='star03']").css("background-image","url(images/star.png)");
					$("label[for='star04']").css("background-image","url(images/star.png)");
					$("label[for='star05']").css("background-image","url(images/star.png)");
				});	

		


				var radioChecker = $("#radioChecker").val();
				
				$("label[class='starLabel']").click(function(){
					$("#radioChecker").attr("value","6");
					$("label[for='star01']").unbind('mouseover').unbind('mouseleave');
					$("label[for='star02']").unbind('mouseover').unbind('mouseleave');
					$("label[for='star03']").unbind('mouseover').unbind('mouseleave');
					$("label[for='star04']").unbind('mouseover').unbind('mouseleave');
					$("label[for='star05']").unbind('mouseover').unbind('mouseleave');
					whenClick();
					
					
				});

			}

				
			function whenClick(){	

				$("input[name='stars']").change(function(){

					starValue = $('input:radio:checked').val();

					afterClick(starValue);
				
				});
			}

			function afterClick(){
				console.log(starValue);
				if(starValue == 1){
					$("label[for='star01']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star02']").css("background-image","url(images/star.png)");
					$("label[for='star03']").css("background-image","url(images/star.png)");
					$("label[for='star04']").css("background-image","url(images/star.png)");
					$("label[for='star05']").css("background-image","url(images/star.png)");
				}
				if(starValue == 2){
					$("label[for='star01']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star02']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star03']").css("background-image","url(images/star.png)");
					$("label[for='star04']").css("background-image","url(images/star.png)");
					$("label[for='star05']").css("background-image","url(images/star.png)");
				}
				if(starValue == 3){
					$("label[for='star01']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star02']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star03']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star04']").css("background-image","url(images/star.png)");
					$("label[for='star05']").css("background-image","url(images/star.png)");
				}
				if(starValue == 4){
					$("label[for='star01']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star02']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star03']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star04']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star05']").css("background-image","url(images/star.png)");
				}
				if(starValue == 5){
					$("label[for='star01']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star02']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star03']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star04']").css("background-image","url(images/yellowStar.png)");
					$("label[for='star05']").css("background-image","url(images/yellowStar.png)");
				}
			}
						
		
			function rateClass(){
				$("#commentType_all").click(function(){
					$("#rateExcellent").css("display","block");
					$("#rateSoso").css("display","block");
					$("#rateBad").css("display","block");
					console.log("good");
				})
				$("#commentType_excellent").click(function(){
					$("#rateExcellent").css("display","block");
					$("#rateSoso").css("display","none");
					$("#rateBad").css("display","none");
				})
				$("#commentType_soso").click(function(){
					$("#rateExcellent").css("display","none");
					$("#rateSoso").css("display","block");
					$("#rateBad").css("display","none");
				})
				$("#commentType_bad").click(function(){
					$("#rateExcellent").css("display","none");
					$("#rateSoso").css("display","none");
					$("#rateBad").css("display","block");
				})
			}
	
window.addEventListener('load',starSystem,false);
window.addEventListener('load',rateClass,false);
	

</script>