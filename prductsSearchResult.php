<?php
include("function/connectSQL.php");
$proClass = 1;
$proSeries = 1;
$proSearch = 1;

if(isset($_GET["proSeries"]) && ($_GET["proSeries"]) != ""){
	$proSeries = $_GET["proSeries"];
}
if(isset($_GET["proClass"]) && ($_GET["proClass"]) != ""){
	$proClass = $_GET["proClass"];
}
if(isset($_GET["proSearch"]) && ($_GET["proSearch"]) != ""){
	$proSearch = $_GET["proSearch"];
}

// 三種搜尋方式搭配可能
if($proSearch != 1 && $proClass == 1 && $proSeries == 1){
	$searchList = " WHERE proName LIKE '%$proSearch%'";
}elseif($proSearch != 1 && $proClass != 1 && $proSeries = 1){
	$searchList = " WHERE proName LIKE '%$proSearch%' AND proClass = '$proClass'";
}elseif($proSearch != 1 && $proClass != 1 && $proSeries != 1){
	$searchList = " WHERE proName LIKE '%$proSearch%' AND proClass = '$proClass' AND proSeries = '$proSeries'";
}elseif($proSearch == 1 && $proClass != 1 && $proSeries == 1){
	$searchList = " WHERE proClass = '$proClass'";
}elseif($proSearch == 1 && $proClass == 1 && proSeries != 1){
	$searchList = " WHERE proSeries = '$proSeries'";
}elseif($proSearch == 1 && $proClass != 1 && $proSeries != 1){
	$searchList = " WHERE proClass = '$proClass' AND proSeries = '$proSeries'";
}


// 三種都沒輸入則跳警告返回原頁
if(!isset($_GET["proSearch"]) && !isset($_GET["proSeries"]) && !isset($_GET["proClass"])){
	unset($_GET["proSeries"]);
	unset($_GET["proClass"]);
	unset($_GET["proSearch"]);
	echo "
		<script>
			alert('請至少輸入一種搜尋方式');
			location.href='products.php';
		</script>
	";
}

$searchQuery = "SELECT * FROM products".$searchList;
$searchRec = $pdo->query($searchQuery);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gametopia 商品</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/products.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="Shortcut Icon" type="image/x-icon" href="images/gametopia.ico"/>
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/resizeSvg.js"></script>
	<script src="js/tagName.js"></script>
	<!-- <script src="js/slider.js"></script> -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body class="sm">
	<?php
		error_reporting( E_ALL || ~E_NOTICE);
		// include("function/header.php");
		// include("function/memberBarSwitcher.php");
	?>
	<div class="productsBox">
		<div class="filter"> <!-- 篩選/搜尋列 -->
				<form action="#" method="get">
					<input type="search" name="search" id="search">
					<select name="platform" id="platform">
						<option value="default" selected>平台</option>
						<option value="ps">PS</option>
						<option value="xbox">XBOX</option>
						<option value="pc">PC</option>
						<option value="handheld">掌機</option>
						<option value="mobile">手機</option>
					</select>
					<select name="category" id="category">
						<option value="default" selected>分類</option>
						<option value="advance">冒險</option>
						<option value="action">動作</option>
						<option value="multiplayer">多人</option>
						<option value="race">競速</option>
						<option value="strategy">策略</option>
						<option value="sports">運動</option>
						<option value="shooting">射擊</option>
						<option value="roleplay">角色扮演</option>
					</select>
					<button id="btnSearch"><i class="fa fa-search"></i></button>
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
					<a href="http://www.trionworlds.com/rift/en/" target="_blank"><img src="images/adsBanner.jpg"></a>
				</div>
				<div class="item-advs">
					<a href="http://www.worldoftanks.com" target="_blank"><img src="images/adsBanner2.jpg"></a>
				</div>
			</div>
		
		
			<div class="products"> <!-- 主要商品區 -->
				<div class="prod-popular"> <!-- 熱門新品 -->
					<h3 class="block-title">熱門新品</h3>
					<div class="row">
						<div class="item-box">
							<div class="item">
									<img src="images/witcher3.jpg">
								<h5>巫師3:狂獵</h5>
								<div class="tagName">PS4</div>
								<div class="tag">動作</div>
								<p class="price">NT$878</p>
							</div>
						</div>
						<div class="item-box">
							<div class="item">
								<img src="images/Warframe.jpg">
								<h5>戰甲神兵</h5>
								<div class="tagName">XBOX</div>
								<div class="tag">射擊</div>
								<p class="price">NT$878</p>
							</div>
						</div>
						<div class="item-box">
							<div class="item">
								<img src="images/Mafia3.jpg">
								<h5>四海兄弟3</h5>
								<div class="tagName">PC</div>
								<div class="tag">角色扮演</div>
								<p class="price">NT$878</p>
							</div>
						</div>
					</div>
				</div>
				<div class="prod-latest">  <!-- 最新商品 -->
					<h3 class="block-title">最新商品</h3>
					<div class="row">
		
						<?php
						while($proRow = $searchRec->fetch(PDO::FETCH_ASSOC)){	
						?>
						<div class="item-box">
							<div class="item">
									<img src="<?php echo $proRow["proImg"]; ?>" 
										 style="cursor: pointer;"
										 onclick="location.href='productIntro.php?proId=<?php echo $proRow["proId"]; ?>'">
								<h5><?php echo $proRow["proName"]; ?></h5>
								<div class="tagName"><?php echo $proRow["proSeries"]; ?></div>
								<div class="tag"><?php echo $proRow["proClass"]; ?></div>
								<p class="price">NT$<?php echo $proRow["proPrice"]; ?></p>
							</div>
						</div>
						<?php } ?>
					</div> <!-- row -->
				</div>	<!-- prod-latest -->
			</div> <!-- products -->
		
		</div>	<!-- mainContent -->
	</div>
</body>
</html>
<?php include("function/footer.php");?>