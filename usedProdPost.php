<?php
ob_start();
session_start();
error_reporting( E_ALL || ~E_NOTICE);
require_once("function/connectSQL.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml1">
<html>
<head>
	<!-- <meta charset="utf-8"> -->
	<meta http-equiv="Context-Type" content="text/html"; charset="utf-8" />
	<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>二手商品上架/遊戲烏托邦-GameTopia</title>
	<link rel="Shortcut Icon" type="image/x-icon" href="images/gametopia.ico"/>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/usedProdPost.css">
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/usedProdPost.js"></script>
</head>
<body class="sh">
<?php
	include("function/header.php");
	include("function/memberBarSwitcher.php");
?>
<div class="outBox">
	<div class="outBoxContainer">
		<div class="usedInfo">
			<div class="title">二手商品資訊</div>
			<form action="changeUsedProdToSession.php" method="post">
				<div class="col_xs_12 col_sm_3">
					<div class="prodName">
						商品名稱
					</div>
					<input type="text" name="usedProdName">

				</div>
				<div class="col_xs_12 col_sm_3">
					<div class="prodSeries">
						使用平台
					</div>
					<input type="text" name="usedProdSeries">

				</div>
				<div class="col_xs_12 col_sm_3">
					<div class="prodClass">
						遊戲類別
					</div>
					<input type="text" name="usedProdClass">

				</div>
				<div class="col_xs_12 col_sm_3">
					<div class="prodPrice">
						商品售價
					</div>
					<input type="text" name="usedProdPrice">

				</div>
				<div class="col_xs_12 col_sm_4">
					<div class="prodImage">
						商品圖片
					</div>
					<div>
						<input type="file" name="usedProdImages" multiple>
						選擇檔案
					</div>
						<div id="showFile">
							未上傳圖檔
						</div>
				</div>
				<div class="col_xs_12 col_sm_4">
					<div class="prodInfo">
						備註說明
					</div>
					<input type="text" name="usedProdInfo">

				</div>
				<div class="clearfix"></div>
			</form>
			
			<div class="uploadList">
				<span>儲存商品</span>
			</div>
			
		</div>
		<div class="usedList">
			<div class="title">二手商品清單</div>
			<div class="init">
				尚未寄賣任何商品
			</div>
			<div class="table" id="table_1">
				<div class="title_1">
					<div class="col_xs_1">
						<input type="checkbox" name="usedProdListAll" id="deAll_1">
					</div>
					<div class="col_xs_1">序號</div>
					<div class="col_xs_4">圖片</div>
					<div class="col_xs_6">介紹</div>
					<div class="clearfix"></div>
				</div>
				<div class="title_2">
					<div class="col_sm_1">
						<input type="checkbox" name="usedProdListAll" id="deAll_2">
					</div>
					<div class="col_sm_1">序號</div>
					<div class="col_sm_2">圖片</div>
					<div class="col_sm_8">
						<div class="col_sm_2">商品名稱</div>
						<div class="col_sm_2">使用平台</div>
						<div class="col_sm_2">商品類別</div>
						<div class="col_sm_2">商品價格</div>
						<div class="col_sm_4">商品簡介</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div id="table">
					<!-- <div class="tr" id="usedprod序號">
						<div class="col_xs_1 col_sm_1">
							<input type="checkbox" name="usedProdList" id="UP序號">
						</div>
						<div class="col_xs_1 col_sm_1">
							序號
						</div>
						<div class="col_xs_4 col_sm_2">
							<img src="images/商品檔名">
						</div>
						<div class="col_xs_6 col_sm_8">
							<div class="col_xs_12 col_sm_2">
								商品名稱
							</div>
							<div class="col_xs_12 col_sm_2">
								商品系列
							</div>
							<div class="col_xs_12 col_sm_2">
								商品類別
							</div>
							<div class="col_xs_12 col_sm_2">
								NT$<span>商品價格</span>
							</div>
							<div class="col_xs_12 col_sm_4">
								商品簡介
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div> -->
				</div>
				<div class="tr"><span id="remove">移除商品</span></div>
			</div>
		</div>
		<div class="usedPostRule">
			<div class="title">二手商品上架條款</div>
			<div>
				◎由於代售期約為3個月，預期未售出的商品將會退回給賣家。<br>
				◎商品攝影原則上以系統化方式並採用人檯拍攝。<br>
				◎二手商品的價值衡量來自於它的新舊、熱門、磨損程度等因素，GameTopia提供代售服務，不保證一定售出。<br>
				◎若有違反善良風俗或侵害他人智慧財產權之事宜，GameTopia有權終止任何服務條款。<br>
				◎GameTopia 不預先收取上架費用，若代售期間要將商品領回，您需要負擔返還運費80元，以及上架途中領回處理費100元/件。<br>
				◎對於上架方式若有不符合商品事實請Email至客服信箱，由於網站風格、版面設計以及字數限制，最終上架資訊包含影像呈現由GameTopia決定，請您見諒。<br>
				◎GameTopia保留代售上架權利。<br>
				<label>
					<input type="checkbox" id="checkRule">
					<span>同意</span>
				</label>
			</div>
			
		</div>
		<div class="send">
			<span id="send">確認送出</span>
		</div>
		</div>
	</div>
	<?php
		include("function/footer.php");
	?>
</body>
</html>
