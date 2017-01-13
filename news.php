<?php
error_reporting(E_ALL || ~E_NOTICE);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="Shortcut Icon" type="image/x-icon" href="images/gametopia.ico"/>
	<title>新聞/遊戲烏托邦-GameTopia</title>

	<link rel="stylesheet" type="text/css" href="css/news.css">
	<!-- 公版 -->
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
 	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

	<script src="js/news.js"></script>
	<!-- 公版 -->
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/header.js"></script>

</head>
<body class="gm">
<?php
	
	include("function/sessionMember.php");
	include("function/header.php");
	include("function/memberBarSwitcher.php");
?>

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

			<div class="breadCrumb">
				<span><a href="#">首頁 </a></span>&raquo<span> 新聞</span>
			</div>

			<div class="col_xs_12 col_sm_12 lastNews">
			<!-- 最新新聞會在最上方 -->
				<!-- <div class="col_xs_6 col_sm_6 lastNewsPreview">

					<a href="#">
						<div class="imgConstrain">
							<img src="images/NEWS_Img/0001468681.JPG">
						</div>
					</a>

					<div class="title"><a href="#">《鬥陣特攻》新英雄「駭影」正式加入戰局 第三賽季即將展開</a></div>

					<div class="smallInfo">駭人聽聞的駭客之一「駭影」於今（16）日正式現身《鬥陣特攻》，她是智械危機後遺留的數千名孤兒之一，靠著入...<a href="#">繼續閱讀</a></div>

				</div> -->
				<?php
				try {
					require_once("function/connectSQL.php");
					$str= "select * from news order by newsDate desc";
					$news= $pdo->prepare($str);
					$news->execute();
					$k= 0;
					$date= "";
					while ($oneNews= $news->fetch(PDO::FETCH_ASSOC)) {
						++$k;
						if ($k< 5) {
							// 輸出最新的四則
							if ($k== 3) {
								?>
									<div class="clearfix"></div>
								<?php
							}
						?>

				<div class="col_xs_6 col_sm_6 lastNewsPreview">

					<a href=<?php echo "newsInfo.php?id=".$oneNews["newsId"];?>>
						<div class="imgConstrain">
							<img src=<?php echo $oneNews["newsImg"]; ?>>
						</div>
					</a>

					<div class="title"><a href=
						<?php echo "newsInfo.php?id=".$oneNews["newsId"];?>>
							<?php echo $oneNews["newsTitle"];?>
						</a></div>

					<div class="smallInfo">
						<?php
							$str_1= $oneNews["newsInfo_1"];
							$str_2= mb_substr($str_1, 0, 60, "utf-8")."...";
							echo $str_2;
						?>
						<a href=<?php echo "newsInfo.php?id=".$oneNews["newsId"];?>>繼續閱讀</a>
					</div>

				</div>

						<?php
							if ($k== 4) {
								//前四則輸出結束
								echo "
			</div>
			<div class='clearfix'></div>

			<div class='allNews'>
								";
							}
						}else{
							// 輸出其他新聞
							if ($date!= $oneNews["newsDate"]) {
								$date= $oneNews["newsDate"];
								$dateArray= explode("-", $date);
								$dateArray[2]= explode(" ", $dateArray[2]);
								$strDate= $dateArray[0]."年".$dateArray[1]."月".$dateArray[2][0]."日";
								echo "<div class='date'>".$strDate."</div>";
							}
							?>

				<div class="newsPreview">
					
					<a href=<?php echo "newsInfo.php?id=".$oneNews["newsId"];?>>
						<div class="col_xs_12 col_sm_3 imgConstrain">
							<img src=<?php echo $oneNews["newsImg"];?>>
						</div>
					</a>
					
					<div class="col_xs_11 col_sm_9 info">
						<div class="title">
							<a href=<?php echo "newsInfo.php?id=".$oneNews["newsId"];?>><?php echo $oneNews["newsTitle"];?></a>
						</div>
						<div class="smallInfo">
							<?php
								$str_1= $oneNews["newsInfo_1"];
								$str_2= mb_substr($str_1, 0, 60, "utf-8")."...";
								echo $str_2;
							?>
							<a href=<?php echo "newsInfo.php?id=".$oneNews["newsId"];?>>繼續閱讀</a>
						</div>
					</div>
					<div class="clearfix"></div>

				</div>
							
							<?php
						}
					}
				} catch (PDOException $ex) {
					echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
					echo "行號：",$ex->getLine(),"<br>";
				}

				?>
			</div><!-- allNews -->
		</div><!-- mainContainer -->
		
	</div><!-- outbox -->

<?php
	include("function/footer.php");
?>
</body>
</html>