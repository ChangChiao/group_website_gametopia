<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="Shortcut Icon" type="image/x-icon" href="images/gametopia.ico"/>
	<title>新聞詳細/遊戲烏托邦-GameTopia</title>

	<!-- 公版 -->
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/newsInfo.css">
	<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
 	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

	<!-- 公版 -->
	<script src="js/jquery-3.1.1.min.js"></script>
	<!-- <script src="js/header.js"></script> -->
	<script src="js/newsInfo.js"></script>
</head>
<body class="gm">
<?php
error_reporting(E_ALL || ~E_NOTICE);
?>
<?php
	
	include("function/sessionMember.php");
	include("function/header.php");
	include("function/memberBarSwitcher.php");
?>
<div class="bg_container">
	<div class="outBox">
		<div class="banner"> <!-- 中間斜切BANNER -->
				
			<h1 class="pageTitle">遊戲新聞</h1>
			<h1 class="consoleTitle">Game NEWS</h1>
			
		</div>
		
		<div class="sliderBox">
			<div class="topSlider">
				<img src="images/NEWS_Img/b0c1734afbd90be81ec41a6e49682dfc.JPG" id="imageSlider_1">
				<img src="images/NEWS_Img/0001469213.jpg" id="imageSlider_2">
				<img src="images/NEWS_Img/307b2e8aa198afa0d35e200f067fd5ed.JPG" id="imageSlider_3">
				<img src="images/NEWS_Img/de05f9825512d2bdec17a3499a712818.JPG" id="imageSlider_4">
				<img src="images/NEWS_Img/6c85ffbd30a4b36b44725d820ba3406f.JPG" id="imageSlider_5">
			</div>
		</div>

		<div class="mainContainer">
		
			<?php
				try {
					require_once("function/connectSQL.php");
					$str= "select * from news where newsId=".$_REQUEST["id"];
					$news= $pdo->prepare($str);
					$news->execute();
					$oneNews= $news->fetch(PDO::FETCH_ASSOC);
					echo "
			<div class='breadCrumb'>
				<span><a href='index.php'>首頁 </a></span>&raquo<span><a href='news.php'> 新聞 </a></span>&raquo<span>".$oneNews["newsTitle"]."</span>
			</div>		 ";
					?>
			<div class="title">
				<?php echo $oneNews["newsTitle"];?>
			<!--<div class="tags">
					<div class="tag_1">PS4<span id="tag_1"></span></div>
					<div class="tag_2">XBOX<span id="tag_2"></span></div>
					<div class="tag_3"><span id="tag_3"></span></div>
					<div class="tag_4"><span id="tag_4"></span></div>
				</div> -->
			</div>

			<div id="imageOne">
				<img src=<?php echo $oneNews["newsImg"];?> id="i1">
			</div>
			<div id="paragragh_1">
				<?php echo $oneNews["newsInfo_1"];?>
			</div>

			<div id="imageTwo">
				<img id="i2" src=<?php echo $oneNews["newsPic01"];?>>
			</div>
			<div id="paragragh_2">
				<?php echo $oneNews["newsInfo_2"];?>
			</div>

			<div id="imageThree">
				<img id="i3" src=<?php echo $oneNews["newsPic02"];?>>
			</div>
			<div id="paragragh_3">
				<?php echo $oneNews["newsInfo_3"];?>
			</div>
					<?php
					$str= "select * from news order by newsDate desc";
					$news= $pdo->prepare($str);
					$news->execute();
					$i= 0;
					?>

			<div class="latest">
				<div class="title">最新頭條</div>

					<?php
					while($oneNews= $news->fetch(PDO::FETCH_ASSOC)) {
						if (++$i== 5) {
							echo "<div class='clearfix'></div>";
							break;
						}else{
							if ($i== 3)
								echo "<div class='clearfix' id='dependOnWindowWidth'></div>";
							?>
				<div class="col_xs_6 col_sm_3 lastfour">
					<a href=<?php echo "newsInfo.php?id=".$oneNews["newsId"];?>>
						<div class="imgConstrain">
							<img src=<?php echo $oneNews["newsImg"];?>>
						</div>
					</a>
					<div class="title">
						<a href=<?php echo "newsInfo.php?id=".$oneNews["newsId"];?>>
							<?php echo $oneNews["newsTitle"];?>
						</a>
					</div>
				</div>

							<?php
						}
					}
					?>
			</div><!-- latest -->
		</div><!-- outBox -->
					<?php
				} catch (PDOException $ex) {
					echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
					echo "行號：",$ex->getLine(),"<br>";
				}
			?>
			<!-- <div class="latest">
				<div class="title">最新頭條</div>
				<div class="col_xs_6 col_sm_3 lastfour">
					<a href="#">
						<div class="imgConstrain">
							<img src="images/NEWS_Img/0001468937.JPG">
						</div>
					</a>
					<div class="title"><a href="#">《鬥陣特攻》新英雄「駭影」正式加入戰局 第三賽季即將展開</a></div>
				</div>
				<div class="clearfix"></div>
			</div> -->
		</div>
		



<?php
	include("function/footer.php");
?>
</div>
</body>
</html>