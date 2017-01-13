<?php
ob_start();
session_start();

if(isset($_SESSION["GTopiaAccount"]) && ($_SESSION['GTopiaAccount']) != ""){
	$memAccount = $_SESSION["GTopiaAccount"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">		
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="Shortcut Icon" type="image/x-icon" href="images/gametopia.ico"/>
	<link rel="stylesheet" type="text/css" href="css/SH_index.css">
	<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/jquery-canvas-sparkles.js"></script>
	<script src="js/SH_index.js"></script>
 	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>二手買賣/遊戲烏托邦-GameTopia</title>
</head>
<body class="sh">
	<?php 
		error_reporting(E_ALL || ~E_NOTICE);
		include('function/header.php');
		include('function/memberBarSwitcher.php')
	?>
		
	<div class="formsSct">
		<form action="megami.php" id="megami">
			<input type="hidden" name="SH" value="megami">
		</form>
		<form action="SH_search.php" id="SH_search">
			<input type="hidden" name="SH" value="SH_search">
		</form>
		<form action="usedProdPost.php" id="usedProdPost">
			<input type="hidden" name="SH" value="usedProdPost">
		</form>
	</div>
	
	<div class="titlebox">
		<span class="SH_titleword">二手買賣<span class="titleEnword">Second Hand</span></span>
		<div class="SH_title"></div>
	</div>
	<div class="container">

		<div class="SH_indexImg">
			<img class="consoleImg" src="images/SH_indexbg.png">
			<div class="iconAExp">
				<img class="iconImages" src="images/SH_indexgive.png" alt="">
				<p class="iconPro">只要向女神許願，即可隨機撈出一項寶物唷！</p>

			</div>
		</div>
		<div class="btnsBox">
			<button class="optionBar megami default" id="default" form="megami"><img class="btnicons" src="images/give-luck.png" alt="">湖中女神的恩賜</button>
			<p class="iconM iconMPro">只要向女神許願，即可隨機撈出一項寶物唷！</p>

			<button class="optionBar SH_search" form="SH_search"><img class="btnicons" src="images/finding-love-concept.png" alt="">獵寶森林的探索</button>
			<p class="iconM iconMproTwo">在這裡可以直接搜尋到您心目中的商品！</p>

			<button id="toUsedPost" class="optionBar sell" form="usedProdPost"><img class="btnicons" src="images/sold.png" alt="">獵寶森林的反饋</button>
			<p class="iconM iconMproThr">您可以在這裡賣出您的寶物哦！</p>
		</div>
	</div>
<?php 

	include("function/footer.php");

?>	
</body>

</html>