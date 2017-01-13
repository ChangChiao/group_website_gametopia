<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gametopia 商品</title>
	<script src="js/jquery-3.1.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/products.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	 <link rel="Shortcut Icon" type="image/x-icon" href="images/gametopia.ico"/>
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/resizeSvg.js"></script>
	<script src="js/tagName.js"></script>
	<script src="js/slider.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body class="sm">
<?php
	error_reporting( E_ALL || ~E_NOTICE);
	include("function/header.php");
	include("function/memberBarSwitcher.php");
	include("function/connectSQL.php");
	$proQuery = "SELECT * FROM products ORDER BY id DESC";
	$proRec = $pdo->query($proQuery);
?>
<img src="">
<div class="productsBox">
	<div class="banner">
			<?php
				$productSliderQuery = "SELECT * FROM banner WHERE bannerType = '商品頁slider-1' OR bannerType = '商品頁slider-2' OR bannerType = '商品頁slider-3'";
				$productSliderRec = $pdo->query($productSliderQuery);
				$sliderImg = array();
				$sliderHref = array();
				while($productSliderRow = $productSliderRec->fetch(PDO::FETCH_ASSOC)){
					$sliderImg[] = $productSliderRow["bannerImg"];
					$sliderHref[] = $productSliderRow["bannerHref"];
				}
			?>
			<ul id="sliderBox">
				<li class="slide show"><a href="<?php echo $sliderHref[0]; ?>"><img src="<?php echo $sliderImg[0]; ?>"></a></li>
				<li class="slide"><a href="<?php echo $sliderHref[1]; ?>"><img src="<?php echo $sliderImg[1]; ?>"></a></li>
				<li class="slide"><a href="<?php echo $sliderHref[2]; ?>"><img src="<?php echo $sliderImg[2]; ?>"></a></li>
				<!-- <li class="slide"><a href="#"><img src="https://placem.at/people?w=600&random=17&txt=0"></a></li>
				<li class="slide"><a href="#"><img src="https://placem.at/people?w=600&random=30&txt=0"></a></li> -->
			</ul>
			<!-- 箭頭 -->
			<div class="sliderArr">
				<i class="fa fa-caret-left" id="btnLeft" aria-hidden="true"></i>
				<i class="fa fa-caret-right" id="btnRight" aria-hidden="true"></i>
			</div>



			<svg version="1.1" id="psSvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="873.71px" height="395.886px" viewBox="566.858 69.545 873.71 395.886"
			 enable-background="new 566.858 69.545 873.71 395.886" xml:space="preserve">
				<g>
					<path fill="#211A2D" d="M1437.861,220.485c-5.56-41.478-23.676-77.333-51.815-108.226c-2.678-2.946-5.449-4.004-9.46-4.01
						c-0.024,0-0.051,0-0.076,0c0.109,0.082,0.218,0.169,0.326,0.251h-0.006c-0.107-0.081-0.215-0.167-0.322-0.248
						c-0.975-0.001-1.948-0.011-2.924-0.016l0,0c0.976,0.004,1.95,0.014,2.925,0.016c-25.746-19.263-54.412-28.384-85.18-31.852
						c0.383,0.375,0.751,0.772,1.11,1.183h-0.001c-0.358-0.411-0.729-0.808-1.109-1.183c-0.551-0.062-1.109-0.107-1.662-0.166v-0.003
						c0.554,0.059,1.112,0.104,1.664,0.166c-4.986-4.889-11.997-6.814-19.633-6.814c-178.055,0.025-356.108,0.058-534.162-0.038
						c-7.866-0.006-14.412,1.881-19.741,6.113c1.665-0.176,3.347-0.32,5.038-0.447v0.002c-1.692,0.126-3.375,0.271-5.04,0.447
						l-0.001,0.001c-30.889,3.282-57.063,15.171-80.755,32.4c0.766-0.034,1.531-0.081,2.297-0.117l0,0
						c-0.765,0.037-1.531,0.083-2.296,0.117c-1.021,0.743-2.034,1.509-3.047,2.272h-0.001c1.014-0.764,2.026-1.53,3.049-2.274
						c-1.46,0.07-2.92,0.134-4.379,0.191c-5.087,0.204-8.612,1.332-12.017,5.1c-21.819,24.134-37.553,51.74-45.852,83.115
						c-13.488,50.963-8.854,101.396,6.93,151.084c6.246,19.677,16.293,37.321,30.774,52.346c5.062,5.254,10.62,7.776,17.995,8.331
						c0.408,0.032,0.808,0.064,1.216,0.098c0,0,0.001,0.001,0.002,0.002c0.347,0.028,0.694,0.064,1.041,0.094l0,0
						c-0.348-0.029-0.694-0.066-1.042-0.094c23.616,24.681,51.816,38.449,83.063,46.22c-0.89-0.948-1.756-1.969-2.604-3.044l0,0
						c0.848,1.075,1.714,2.095,2.604,3.044c0.003,0,0.006,0.001,0.009,0.002c6.9,7.354,15.246,10.953,26.711,10.883
						c87.403-0.565,174.815-0.293,262.22-0.293c89.229,0,178.456-0.05,267.689,0.098c6.953,0.013,12.921-1.64,17.4-6.814
						c1.198-1.382,2.391-2.764,3.574-4.16c32.821-7.076,59.159-23.609,82.248-45.762c1.192-1.145,2.367-2.321,3.544-3.496l0,0
						c-1.176,1.175-2.351,2.352-3.543,3.496c1.141-0.109,2.282-0.217,3.423-0.313c6.444-0.554,11.499-2.649,16.063-7.188
						c11.352-11.295,20.104-24.396,26.229-39.03C1439.379,316.495,1444.369,269.045,1437.861,220.485z M1363.501,108.122
						c-0.213-0.004-0.427-0.005-0.64-0.01l0,0C1363.074,108.116,1363.288,108.117,1363.501,108.122L1363.501,108.122z M1362.85,108.109
						c-7.137-0.14-14.278-0.414-21.392-0.924c-17.47-1.236-32.723-6.405-43.152-20.815c14.133,3.587,28.497,6.475,42.177,11.294
						C1348.129,100.36,1355.846,103.801,1362.85,108.109z M1298.299,86.366c-0.073-0.103-0.143-0.214-0.216-0.318v-0.001
						C1298.156,86.151,1298.226,86.264,1298.299,86.366L1298.299,86.366z M1292.375,454.256c1.629-1.908,3.245-3.828,4.853-5.756l0,0
						C1295.622,450.428,1294.006,452.348,1292.375,454.256L1292.375,454.256z M1295.044,146.932c0.204-6.342,4.991-10.913,11.34-10.836
						c6.253,0.076,11.194,4.952,11.228,11.072c0.023,6.074-5.013,11.123-11.123,11.148
						C1299.876,158.342,1294.835,153.325,1295.044,146.932z M710.335,84.4C710.335,84.399,710.335,84.399,710.335,84.4L710.335,84.4
						c-6.679,11.115-16.432,18.674-29.422,20.223c-8.153,0.969-16.331,1.721-24.521,2.314c7.674-4.614,15.398-9.107,23.448-12.899
						C689.383,89.544,699.9,85.859,710.335,84.4z M655.5,106.997L655.5,106.997c0.296-0.021,0.592-0.036,0.888-0.058l0,0
						C656.092,106.96,655.796,106.976,655.5,106.997z M620.167,121.526L620.167,121.526c-0.1,0.087-0.201,0.17-0.3,0.257
						c0,0,0,0,0-0.001C619.966,121.696,620.067,121.613,620.167,121.526z M643.946,409.548c-0.065-0.008-0.131-0.014-0.196-0.021l0,0
						C643.815,409.534,643.881,409.54,643.946,409.548c-0.058-0.057-0.112-0.116-0.17-0.173h0.009c0.056,0.056,0.106,0.115,0.164,0.17
						c9.153,1.065,18.295,2.39,27.448,3.468c9.179,1.084,16.195,5.45,21.576,12.991c3.801,5.323,7.713,10.569,11.686,15.771
						c0.059,0.021,0.116,0.044,0.175,0.065v0.003c-0.06-0.021-0.117-0.044-0.176-0.065l0,0c-11.266-4.195-22.599-8.23-33.319-13.521
						C661.521,423.405,651.736,417.191,643.946,409.548z M736.751,417.917c-5.846,0.006-7.975-1.224-7.962-7.662
						c0.223-99.758-1.052-192.237-1.052-291.995c0-2.601,0-5.208,0-8.567c183.708,0,366.549,0,549.804,0
						c0,104.902,1.212,202.321,1.212,307.605c-2.468,0.179-4.826,0.498-7.184,0.504C1093.298,417.821,915.021,417.796,736.751,417.917z
						 M1327.369,432.362c-8.242,4.945-17.364,9.313-26.677,11.932c-0.229,0.282-0.463,0.559-0.691,0.839v-0.001
						c0.229-0.281,0.464-0.558,0.691-0.839c-0.229,0.065-0.461,0.123-0.691,0.186v-0.001c0.23-0.063,0.463-0.12,0.693-0.186
						c2.996-3.671,5.922-7.387,8.752-11.167c6.966-9.319,13.412-18.798,26.483-20.13c7.563-0.771,15.095-1.753,22.643-2.69
						c0,0,0,0-0.001,0.001C1348.334,417.943,1338.263,425.821,1327.369,432.362z"/>
					<path fill="#211A2D" d="M1271.944,115.398H734.8v297.216h537.146L1271.944,115.398L1271.944,115.398z M1270.032,410.701h-533.32
						v-293.39h533.32V410.701z"/>
				</g>
			</svg>

	</div> <!-- 主頁BANNER -->



	<div class="filter"> <!-- 篩選/搜尋列 -->
		<form action="prductsSearchResult.php" method="get">
			<input type="search" name="proSearch" id="search">
			<select name="proSeries" id="platform">
				<option value="1" selected>平台</option>
				<option value="ps">PS</option>
				<option value="xbox">XBOX</option>
				<option value="pc">PC</option>
				<option value="handheld">掌機</option>
				<option value="mobile">手機</option>
			</select>
			<select name="proClass" id="category">
				<option value="1" selected>分類</option>
				<option value="advance">冒險</option>
				<option value="action">動作</option>
				<option value="multiplayer">多人</option>
				<option value="race">競速</option>
				<option value="strategy">策略</option>
				<option value="sports">運動</option>
				<option value="shooting">射擊</option>
				<option value="roleplay">角色扮演</option>
			</select>
			<button id="btnSearch" type="submit"><i class="fa fa-search"></i></button>
		</form>
	</div>
	
	
	
	
	<div class="giftSct">  <!-- 贈禮專區超大按鈕? -->
		<div class="male">
			<img src="images/male_original.png" alt="">		
		</div>
		<a href="giftAndCard.php"><i class="fa fa-gift"></i>送禮專區</a>
		<span>煩惱該送什麼遊戲給親朋好友嗎？點我就對了！</span>
		<div class="female">
			<img src="images/female_original.png" alt="">
		</div>
	</div>
	
	
	<div class="mainContent"> <!-- 下方主要內容區大Container -->
		
		<div class="adsSct"> <!-- 左下方廣告區域 -->
			<div class="item-advs"> <!-- 似乎是有ad或adv字眼的東西都會被adBlock擋住 -->
				<?php
					$bannerQuery = "SELECT * FROM banner WHERE bannerType = '商品頁banner-1' OR bannerType = '商品頁banner-2' ORDER BY bannerType ASC";
					$bannerRec = $pdo->query($bannerQuery);
					$bannerImg = array();
					$bannerHref = array();

					while($bannerRow = $bannerRec->fetch(PDO::FETCH_ASSOC)){
						$bannerImg[] = $bannerRow["bannerImg"];
						$bannerHref[] = $bannerRow["bannerHref"];
					}
				?>
				<a href="<?php echo $bannerHref[0]; ?>" target="_blank"><img src="<?php echo $bannerImg[0]; ?>"></a>
			</div>
			<div class="item-advs">
				<a href="<?php echo $bannerHref[1]; ?>" target="_blank"><img src="<?php echo $bannerImg[1]; ?>"></a>
			</div>
		</div>
	
	
		<div class="products"> <!-- 主要商品區 -->
			<div class="prod-popular"> <!-- 熱門新品 -->
				<h3 class="block-title">熱門商品</h3>
				<div class="row">
					<?php
						$hotProQuery = "SELECT * FROM products ORDER BY clickNum DESC LIMIT 0,3";
						$hotProRec = $pdo->query($hotProQuery);
						while($hotProRow = $hotProRec->fetch(PDO::FETCH_ASSOC)){
					?>
					<div class="item-box">
						<div class="item">
							<img src="<?php echo $hotProRow["proImg"]; ?>">
							<h5><?php echo $hotProRow["proName"]; ?></h5>
							<div class="tagPS"><?php echo $hotProRow["proSeries"]; ?></div>
							<div class="tag"><?php echo $hotProRow["proClass"]; ?></div>
							<p class="price">NT$<?php echo $hotProRow["proPrice"]; ?></p>
						</div>
					</div>

					<?php } ?>
					<!-- <div class="item-box">
						<div class="item">
							<img src="images/Warframe.jpg">
							<h5>戰甲神兵</h5>
							<div class="tagXBOX">XBOX</div>
							<div class="tag">射擊</div>
							<p class="price">NT$878</p>
						</div>
					</div>
					<div class="item-box">
						<div class="item">
							<img src="images/Mafia3.jpg">
							<h5>四海兄弟3</h5>
							<div class="tagPC">PC</div>
							<div class="tag">角色扮演</div>
							<p class="price">NT$878</p>
						</div>
					</div>
				</div> -->
			</div>
	
			
	
			<div class="prod-latest">  <!-- 最新商品 -->
				<h3 class="block-title">最新商品</h3>
				<div class="row">
	
					<?php
					while($proRow = $proRec->fetch(PDO::FETCH_ASSOC)){	
					?>
					<div class="item-box">
						<div class="item">
								<img src="<?php echo $proRow["proImg"]; ?>" onclick="location.href='productIntro.php?proId=<?php echo $proRow["proId"]; ?>'">
							<h5><?php echo $proRow["proName"]; ?></h5>
							<div class="tagName"><?php echo $proRow["proSeries"]; ?></div>
							<div class="tag"><?php echo $proRow["proClass"]; ?></div>
							<p class="price">NT$<?php echo $proRow["proPrice"]; ?></p>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
	
	
		</div>
	
	</div>
</div>
</div>
<?php include("function/footer.php"); ?>
</body>
</html>