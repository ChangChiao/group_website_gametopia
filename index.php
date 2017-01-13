<?php
ob_start();
session_start();
error_reporting(E_ALL || ~E_NOTICE);
require("function/connectSQL.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>遊戲烏托邦-GameTopia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="Shortcut Icon" type="image/x-icon" href="images/gametopia.ico"/>
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
	<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.slotmachine.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.slotmachine.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/ScrollMagic.min.js"></script>
    <script src="js/animation.gsap.min.js"></script>
    <script src="js/debug.addIndicators.min.js"></script>
    <script src="js/jquery-canvas-sparkles.js"></script>
    <script src="js/jquery.drawsvg.min.js"></script>
    <script src="js/index.js"></script>
    
    <!-- <script type="text/javascript" src="js/okay.jsss"></script> -->

</head>
<body>



<?php 
	include("function/header.php");
	include("function/memberBarSwitcher.php"); 
?>
	<!-- <script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/jquery.drawsvg.js"></script> -->
<div class="container-all">
	
	<!-- =============阻擋光箱============== -->
	<div class="preventResizeBox">
	<p>為維護最佳觀賞品質 請不要拉動視窗</p>	
		
		<span>確認</span>
	</div>
	<div id="index-container1">

	<!-- ＝＝＝＝＝＝＝導覽列＝＝＝＝＝＝＝＝＝＝ -->
	
<!-- =========================loading畫面=============================== -->
	
	<!-- <script src="js/jquery.drawsvg.js"></script>

	<div class="loading">
		<svg viewBox="0 0 189 189" style="background-color:#fff" xmlns="http://www.w3.org/2000/svg" width="189" height="189" class="index-load">
		 <g stroke="#0aa" stroke-width="1" fill="none">
		<path d="M127 63.496C127 85.306 144.455 103 165.998 103 187.538 103 205 85.306 205 63.496 205 41.682 187.537 24 165.998 24 144.455 24 127 41.682 127 63.496z"/>
		<path d="M195 63.497C195 47.206 182.015 34 166 34"/>
		<path d="M2 63.496C2 85.306 19.455 103 41.002 103 62.542 103 80 85.306 80 63.496 80 41.682 62.54 24 41.002 24 19.455 24 2 41.682 2 63.496z"/>
		<path d="M64.296 22.732C57.656 18.094 47.492 16 41.002 16c-6.49 0-12.675 1.33-18.3 3.732-5.622 2.404-10.686 5.88-14.938 10.178"/>
		<path d="M159.715 63.576c0 3.634 2.902 6.575 6.49 6.575 3.582 0 6.484-2.94 6.484-6.574 0-3.63-2.903-6.575-6.486-6.575-3.587 0-6.49 2.946-6.49 6.576z"/>
		<path d="M34.873 64.032c0 3.63 2.907 6.575 6.494 6.575 3.578 0 6.485-2.945 6.485-6.575 0-3.635-2.907-6.575-6.485-6.575-3.587 0-6.494 2.94-6.494 6.575z"/>
		<path d="M163.25 57.026L141.773 3"/>
		<path d="M98 63.5H48"/>
		<path d="M101.73 57.63L70.5 14.013"/>
		<path d="M70.49 14.5h76.646v-.206"/>
		<path d="M139.134 14.505L108.468 57.95"/>
		<path d="M70.894 15.05L42.834 57.05"/>
		<path d="M70.5 14V3"/>
		<path d="M141.427 3.23s19.83-7.71 19.83 6.344"/>
		<path d="M97.816 62.52c0 3.576 2.86 6.475 6.39 6.475s6.392-2.9 6.392-6.476c0-3.577-2.86-6.476-6.39-6.476s-6.392 2.9-6.392 6.476z"/>
		<path d="M106.642 69.26l2.913 11.044"/>
		<path d="M105 83l10-5"/>
		<path d="M62.5 3.5h18"/>
		</g>
		</svg>

	</div> -->
<!-- ===================ver2=========================== -->
<!-- <div class="circle_loading_box">
	<div class="circle_loading">
	  <div class="outer"></div>
	  <div class="inner"></div>
	</div>
</div>		 -->
<div class="triBox">
	<div class='triContainer'>
		  <div class='tri reverse'></div>
		  <div class='tri reverse'></div>
		  <div class='tri'></div>
		  <div class='tri reverse'></div>
		  <div class='tri reverse'></div>
		  <div class='tri'></div>
		  <div class='tri reverse' id="center"></div>
		  <div class='tri'></div>
		  <div class='tri reverse'></div>
		  <div class="tri"></div> <!-- 下半部 -->
		  <div class="tri reverse"></div>
		  <div class='tri' id="center"></div>
		  <div class='tri reverse'></div>
		  <div class="tri"></div>
		  <div class="tri"></div>
		  <div class='tri reverse'></div>
		  <div class="tri"></div>
		  <div class="tri"></div>
	 <div class="tritxt_box">	
		<div class="tritxt2">GameTopia</div>
		<div class="tritxt">L O A D I N G</div>
	</div>
	</div>
	
</div>
<!-- ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝開頭動畫	 -->
	
	<!-- <div class="cover_all">
	  <div class="cover_a cover">
	    <div class="cover_a_line cover_line"></div>
	    <span>TOPIA </span>
	  </div>
	  <div class="cover_b cover">
	    <span>GAME</span>
	    <div class="cover_b_line cover_line"></div>
	    
	  </div>
	</div> -->
  
	

					
		
		<!-- <div class="index-logo">
			<img src="images/01LOGO.png">
		</div> -->
		
		<hr class="tp1">
		
			<div class="box">
				<div class="camera">
					<div class="space">
					
						<div class="layer" id="lx">
							<div class="layer-img">
								<img src="images/index-3ds.png">
							</div>

						</div>



						

						

						<div class="layer layer-scene" id="l1">
							
							<div class="layer-title">
								<div class="layer-diamond"></div>	
								<h2>豐饒之城</h2>
								
							</div>

							<p>任何你想要的遊戲都可以在這裡找到！</p>
								
							<div id="slider" class="container-x">
								<ul class="slider-wrapper">
									<li class="current-slide">
										<a href="products.php">
											<img src="images/slider/slider01.jpg" title="" alt="">	
										</a>	
									</li>

									<li>
										<a href="products.php">
											<img src="images/slider/slider07.jpg" title="" alt="">
										</a>
									</li>

									<li>
										<a href="products.php">
											<img src="images/slider/slider06.png" title="" alt="">
										</a>
									</li>

									<li>
										<a href="products.php">
											<img src="images/slider/slider04.jpg" title="" alt="">
										</a>
									</li>
								</ul>
								<div class="slider-shadow"></div>
								
								<!-- Controles de Navegacion -->
								<ul id="control-buttons" class="control-buttons"></ul>
							</div>
						</div>

					
						<div class="cloud" id="cloud-1">
							<img src="images/clouds.png">
						</div>
					<!-- ===============section2=============================	 -->
						<div class="layer layer-item" id="l2-c">
							<img src="images/clouds.png">
						</div>

						<div class="layer layer-scene" id="l2">
							

							<div class="layer-title">
								<div class="layer-diamond"></div>	
								<h2>恩澤之谷</h2>
								
							</div>
							

							<p>傳達你的心意給另一個他!快來製作獨一無二的卡片吧!</p>
						
							<div class="l2-content">
								<div class="l2-card card l2a"  onclick="location.href='giftAndCard.php'" >
									
									
									<div id="Machine1" class="randomizeMachine">
										<div class="each_doll">
											<div class="paper-doll-img">
												<img src="images/female_considerate_exciting.png">
											</div>
											<h3>體貼溫柔的她</h3>
										</div>	
											
										<div class="each_doll">	
											<div class="paper-doll-img">
												<img src="images/female_active_adventure.png">
											</div>
											<h3>勇敢冒險的她</h3>
										</div>
										<div class="each_doll">	
											<div class="paper-doll-img">
												<img src="images/female_active_shooting.png">
											</div>
											<h3>動感十足的她</h3>
										</div>
										<div class="each_doll">	
											<div class="paper-doll-img">
												<img src="images/female_passionate_exciting.png">
											</div>
											<h3>古靈精怪的她</h3>
										</div>
										<div class="each_doll">	
											<div class="paper-doll-img">
												<img src="images/female_steady_casual.png">
											</div>
											<h3>隨心所欲的她</h3>
										</div>
										<div class="each_doll">	
											<div class="paper-doll-img">
												<img src="images/female_steady.png">
											</div>
											<h3>遊戲人間的她</h3>
										</div>	
									</div>
							</div>

								
								<div class="l2-card card l2b"  onclick="location.href='giftAndCard.php'">
									<div id="Machine2" class="randomizeMachine">
										<div class="each_doll">	
											<div class="paper-doll-img">
												<img src="images/male_considerate_roleplaying.png">
											</div>
											<h3>幽默風趣的他</h3>
										</div>
										<div class="each_doll">		
											<div class="paper-doll-img">
												<img src="images/male_active_roleplaying.png">
											</div>
											<h3>冒險犯難的他</h3>
										</div>
										<div class="each_doll">		
											<div class="paper-doll-img">
												<img src="images/male_steady_cooperative.png">
											</div>
											<h3>不為所動的他</h3>
										</div>
										<div class="each_doll">		
											<div class="paper-doll-img">		
												<img src="images/male_active_action.png">
											</div>
											<h3>一生懸命的他</h3>	
										</div>
										<div class="each_doll">		
											<div class="paper-doll-img">
												<img src="images/male_active_adventure.png">
											</div>
											<h3>動如脫兔的他</h3>
										</div>
										<div class="each_doll">		
											<div class="paper-doll-img">
												<img src="images/male_steady_strategical.png">
											</div>
											<h3>霸道蠻橫的他</h3>
										</div>
									</div>
								</div>
							

								<div class="l2-card card l2c"  onclick="location.href='giftAndCard.php'">
								<div id="Machine3" class="randomizeMachine">
									
									<div class="each_doll">		
										<div class="paper-doll-img">
											<img src="images/female_steady_casual.png">
										</div>
										<h3>嚮往自由的她</h3>
									</div>
									<div class="each_doll">		
										<div class="paper-doll-img">
											<img src="images/female_considerate_strategical.png">
										</div>
										<h3>熱情如火的她</h3>	
									</div>
									<div class="each_doll">		
										<div class="paper-doll-img">	
											<img src="images/female_passionate_roleplaying.png">
										</div>
										<h3>清純可愛的她</h3>
									</div>
									<div class="each_doll">		
										<div class="paper-doll-img">
											<img src="images/female_passionate_cooperative.png">
										</div>
										<h3>性感火辣的她</h3>
									</div>
									<div class="each_doll">		
										<div class="paper-doll-img">
											<img src="images/female_active_adventure.png">
										</div>
										<h3>天真爛漫的她</h3>
									</div>
									<div class="each_doll">		
										<div class="paper-doll-img">
											<img src="images/female_passionate_roleplaying.png">
										</div>
										<h3>百變天后的她</h3>
									</div>	
								</div>
							</div> <!-- l2card -->
						</div> <!-- l2 content -->
					</div> <!-- l2 -->
						 <script src="js/jQuery_2.1.1.js"></script>
						<script src="js/jquery.slotmachine.min.js"></script>
						<script>

							

							

							// function protect() {
							//     var myVar =$('.randomizeMachine').setInterval(hoverDisabled, 3000);
							// }	

							// $('.randomizeMachine').	

							// function hoverDisabled(){

							// 	$(this).unbind('mouseenter mouseleave');

							// }	
									var depend_1= 0, depend_2= 0, depend_3= 0;
								         $('#Machine1').mouseenter(function(){
								          if (depend_1++ == 0) {

								           console.log("depend_1: "+depend_1);
								           var machine1 = $("#Machine1").slotMachine({
								            active : 1,
								            delay : 800,
								            // auto : 8000,
								            direction: 'down',
								            stopHidden: true
								           });
								           machine1.shuffle(3);

								           var myVar1 = setInterval(function(){
								            clearInterval(myVar1);
								            depend_1= 0;
								           }, 4000);
								          }
								         });




								         $('#Machine2').mouseenter(function(){
								          if (depend_2++ == 0) {
								           var machine2 = $("#Machine2").slotMachine({
								            active : 2,
								            delay : 800,
								            // auto : 8000,
								            direction: 'down',
								            stopHidden: true
								           }); 
								           machine2.shuffle(3);

								           var myVar2 = setInterval(function(){
								            clearInterval(myVar2);
								            depend_2= 0;
								           }, 4000);
								          }
								         });

								         $('#Machine3').mouseenter(function(){
								          if (depend_3++ == 0) {
								           var machine3 = $("#Machine3").slotMachine({
								            active : 3,
								            delay : 800,
								            // auto : 8000,
								            direction: 'down',
								            stopHidden: true
								           });
								           
								           machine3.shuffle(3);

								           var myVar3 = setInterval(function(){
								            clearInterval(myVar3);
								            depend_3= 0;
								           }, 4000);
								          }
								         });


								</script>
						<div class="cloud" id="cloud-2">
							<img src="images/clouds.png">
						</div>

		

				<!-- ================section3===================		 -->

						<div class="layer layer-item" id="l3-c">
							<img src="images/clouds.png">
						</div>


						<div class="layer layer-scene" id="l3">
							
							<div class="layer-title">
								<div class="layer-diamond"></div>	
								<h2>獵寶之森</h2>
								
							</div>
							<?php
								//熱門二手遊戲
								$hotUsedQuery = "SELECT * FROM products WHERE proType = '二手' ORDER BY clickNum DESC LIMIT 0,3";
								$hotUsedRec = $pdo->query($hotUsedQuery);
								$hotUsedInfo = array();
								$counter = 0;
								while($hotUsedRow = $hotUsedRec->fetch(PDO::FETCH_ASSOC)){
									$counter += 1;
									$hotUsedInfo[$counter] = $hotUsedRow;
								}
								// print_r($hotUsedInfo);
							?>
							<p>想要體驗出其不意的驚奇嗎？就到這裡來吧！</p>	
							<div class="l3-content">
								<div class="l3-card card l3ca"  onclick="location.href='SH_index.php'">
									<h3>熱門二手遊戲</h3>
									<div class="l3-pd-pic">
										<img src="<?php echo $hotUsedInfo[1]["proImg"]; ?>">
									</div>
									<p><?php echo $hotUsedInfo[1]["proName"]; ?></p>
									<span>NT$ <?php echo $hotUsedInfo[1]["proPrice"]; ?></span>
								</div>
								<div class="l3-card card l3cb"  onclick="location.href='SH_index.php'">
									<h3>熱門二手遊戲</h3>
									<div class="l3-pd-pic">
										<img src="<?php echo $hotUsedInfo[2]["proImg"]; ?>">
									</div>
									<p><?php echo $hotUsedInfo[2]["proName"]; ?></p>
									<span>NT$ <?php echo $hotUsedInfo[2]["proPrice"]; ?></span>
								</div>
								<div class="l3-card card l3cc"  onclick="location.href='SH_index.php'">
									<h3>熱門二手遊戲</h3>
									<div class="l3-pd-pic">
										<img src="<?php echo $hotUsedInfo[3]["proImg"]; ?>">
									</div>
									<p><?php echo $hotUsedInfo[3]["proName"]; ?></p>
									<span>NT$ <?php echo $hotUsedInfo[3]["proPrice"]; ?></span>
								</div>
							</div>
						</div>

						

						<div class="cloud" id="cloud-3">
							<img src="images/clouds.png">
						</div>
						
               <!-- ===================section4================== -->
						<div class="layer layer-item" id="l4-c">
							<img src="images/clouds.png">
						</div>

           
						<div class="layer layer-scene" id="l4">
							

							<div class="layer-title">
								<div class="layer-diamond"></div>
								<h2>仰望之塔</h2>
									
							</div>
							


							<p>最新最熱門的遊戲新聞都在這</p>
							<div class="l4-content">
								<div class="l4-card card"  onclick="location.href='newsInfo.php?id=11'">
									<h3>《菲莉絲的鍊金工房》繁體中文版將於2017年1月12日發售</h3>
									<div class="l4-card-img">
										<img src="images/news_index_1.jpg">
									</div>	
									<p>臺灣光榮特庫摩宣布「鍊金術士」系列最新作《菲莉絲的鍊金工房 ～不可思議之旅的鍊金術士～》...繼續閱讀</p>
									<span>閱讀全文</span>
								</div>
						
						
								
								<div class="l4-card card"  onclick="location.href='newsInfo.php?id=12'">
									<h3>佩里亞編年史研發團隊解析未來設計藍圖 玩家能夠主動創造的遊戲</h3>
									<div class="l4-card-img">
										<img src="images/news_index_2.jpg">
									</div>	
									<p>《Project NT》以存在著超自然生命體的幻想世界為背景，強調藉由獨特、新鮮的高品質卡通渲染效果...繼續閱讀
									</p>
									<span>閱讀全文</span>
								</div>
							</div>	
						</div>

					
		
						<div class="cloud" id="cloud-4">
							<img src="images/clouds.png">
						</div>

					<!-- ================section5====================	 -->
						<div class="layer layer-item" id="l5-c">
							<img src="images/clouds.png">
						</div>


						<div class="layer layer-scene" id="l5">
							
						<div class="layer-title">
							<div class="layer-diamond"></div>	
							<h2>呢喃之鎮</h2>
							
						</div>


						<p>在這裏可以找到志同道合的夥伴！</p>
						<div class="l5-content">
								<div class="l5-card card"  onclick="location.href='forumIndex.php'">
									<div class="member-info">
										<div class="l5-card-img">
											<img src="images/yidodo10800110002913.jpg">
										</div>	
										<div class="member-nickname">
											致命水蜜桃
										</div>
									</div>	
									<div class="discuss-each">
										<div class="discuss-title">我被GM搭訕拉！>///<</div>
										<div class="discuss-date">2016-12-09</div>
									</div>
								</div>	
								<div class="l5-card card"  onclick="location.href='forumIndex.php'">
									<div class="member-info">
										<div class="l5-card-img">
											<img src="images/snow_white.jpg">
										</div>	
										<div class="member-nickname">
											♥白雪公主♥
										</div>
									</div>	
									<div class="discuss-each">
										<div class="discuss-title">寶可夢讓我重新認識自己</div>
										<div class="discuss-date">2016-12-11</div>
									</div>
								</div>
								<div class="l5-card card"  onclick="location.href='forumIndex.php'">
									<div class="member-info">
										<div class="l5-card-img">
											<img src="images/quite.jpg">
										</div>	
										<div class="member-nickname">
											源靜香
										</div>
									</div>	
									<div class="discuss-each">
										<div class="discuss-title">最喜歡玩極速快感了！</div>
										<div class="discuss-date">2016-12-12</div>
									</div>
								</div>	
				<!-- 				<div class="l5-card card">
									<div class="member-info">
										<div class="l5-card-img"  onclick="location.href='#'">
											<img src="images/yidodo10800110002913.jpg">
										</div>	
										<div class="member-nickname">
											致命水蜜桃
										</div>
									</div>	
									<div class="discuss-each">
										<div class="discuss-title">我遇到GM拉！</div>
										<div class="discuss-date">2016-11-11</div>
									</div>
								</div> -->
							</div>	
							
						</div>

						<div class="cloud" id="cloud-5">
							<img src="images/clouds.png">
						</div>
				<!-- ===================section6===================== -->
						<div class="layer layer-item" id="l6-c">
							<img src="images/clouds.png">
						</div>
						
						<div class="layer layer-scene" id="l6">
							
							<div class="layer-img">
								<img id ="womangod" src="images/anime.gif">
							</div>

							<!-- <div class="womangod-conversation">
								  <div class="w-contentbox">
								  	
								  	<h3>讓我帶你探索遊戲烏托邦</h3> 

									  <div class="w-botton"  onclick="location.href='#'">
									  	  開始冒險
									  </div>
								  </div>
							</div> -->

							<div class="womangod-do" onclick="location.href='products.php'">
								<i class="fa fa-hand-o-right" aria-hidden="true"></i>讓我帶你探索遊戲烏托邦
							</div>
							
						</div>
						
						<div class="cloud" id="cloud-6">
							<img src="images/clouds.png">
						</div>

					
						
						
					</div>
				</div>
			</div>
		<?php include("function/footer.php"); ?>
	</div>
	
<!-- ============================mobile================================	 -->
	<div id="index-container2">
		
	<hr id="m-index-hr">					
	
	<!-- <script src="js/jquery-3.1.0.min.js"></script> -->

<div class="triBox">
	<div class='triContainer'>
		  <div class='tri reverse'></div>
		  <div class='tri reverse'></div>
		  <div class='tri'></div>
		  <div class='tri reverse'></div>
		  <div class='tri reverse'></div>
		  <div class='tri'></div>
		  <div class='tri reverse' id="center"></div>
		  <div class='tri'></div>
		  <div class='tri reverse'></div>
		  <div class="tri"></div> <!-- 下半部 -->
		  <div class="tri reverse"></div>
		  <div class='tri' id="center"></div>
		  <div class='tri reverse'></div>
		  <div class="tri"></div>
		  <div class="tri"></div>
		  <div class='tri reverse'></div>
		  <div class="tri"></div>
		  <div class="tri"></div>
	 <div class="tritxt_box">	
		<div class="tritxt2">GameTopia</div>
		<div class="tritxt">L O A D I N G</div>
	</div>
	</div>
</div>	


	<!-- 		<div class="m-cover_all">
				  <div class="m-cover_a m-cover">
				    <div class="m-cover_a_line m-cover_line"></div>
				    <span>TOPIA </span>
				  </div>
				  <div class="m-cover_b m-cover">
				    <span>GAME</span>
				    <div class="m-cover_b_line m-cover_line"></div>			    
				  </div>
			</div> -->
					<div class="m-layer m-layer-scene" id="scenez">
						<div id="scenex">
			
						</div>	
					</div>	
						



					<div class="m-layer m-layer-scene" id="scene0">
						
							<div class="slogan">
								GAME<span>TOPIA</span>
							</div>
							
							<div class="m-layer-border-box">
								<p>遊戲烏托邦</p>
								<p>G a m e</p>
								<p>T o p i a</p>
								<p>遊戲玩家的理想國度</p>
											
							</div>
							<div class="megami">
								<img src="images/anime.gif">
							</div>
							
					</div>	


						<script src="js/owl.carousel.min.js"></script>
						

						<div class="m-layer m-layer-scene" id="scene1">
							
							<div class="m-layer-title">
								<div class="m-layer-diamond"></div>	
								<h2>豐饒之城</h2>
								
							</div>

							<p>任何你想要的遊戲都可以在這裡找到！</p>
							
								
							<div id="owl-demo" class="owl-carousel owl-theme">
							 
								<div class="item m1c">
									
										<a href="products.php">
											<img src="images/slider/slider01.jpg" alt="The Last of us">
										</a>	
									
								</div>
								<div class="item m1c">
									
										<a href="products.php">
											<img src="images/slider/slider07.jpg" alt="The Last of us">
										</a>
									
								</div>
								<div class="item m1c">
									
										<a href="products.php">
											<img src="images/slider/slider06.png" alt="The Last of us">
										</a>	
									
								</div>

							</div>

							<div class="pre_btn1 pre_btn owl_btn">
								<i class="fa fa-chevron-left" aria-hidden="true"></i>
							</div>
							<div class="next_btn1 next_btn owl_btn">
								<i class="fa fa-chevron-right" aria-hidden="true"></i>
							</div>

						</div>

					
					<!-- ===============section2=============================	 -->
						
						<div class="m-layer m-layer-scene" id="scene2">
							
							<div class="m-layer-title">
								<div class="m-layer-diamond"></div>	
								<h2>恩澤之谷</h2>
								
							</div>

							<p>傳達你的心意給另一個他!快來製作獨一無二的卡片吧!</p>
							<div class="m-l2-content">

									
								<div id="owl-demo-gift" class="owl-carousel owl-theme">
								 
									<div class="item">
										<div class="m-l2-card m-card m-l2ca"  onclick="location.href='giftAndCard.php'">
											<h3>可愛迷人的她</h3>
											<div class="m-paper-doll-img">
												<img src="images/female_considerate_adventure.png">
											</div>
											<!-- <span>製作卡片</span> -->
										</div>
									</div>
									<div class="item">
										<div class="m-l2-card m-card m-l2cb"  onclick="location.href='giftAndCard.php'">
											<h3>文藝氣息的她</h3>
											<div class="m-paper-doll-img">
												<img src="images/male_considerate_roleplaying.png">
											</div>
											<!-- <span>製作卡片</span> -->
										</div>
									</div>
									<div class="item">
										<div class="m-l2-card m-card m-l2cc"  onclick="location.href='giftAndCard.php'">
											<h3>動靜皆宜的她</h3>
											<div class="m-paper-doll-img">
												<img src="images/female_active_adventure.png">
											</div>
											<!-- <span>製作卡片</span> -->
										</div>
									</div>
								</div>


							<div class="pre_btn2 pre_btn owl_btn">
								<i class="fa fa-chevron-left" aria-hidden="true"></i>
							</div>
							<div class="next_btn2 next_btn owl_btn">
								<i class="fa fa-chevron-right" aria-hidden="true"></i>
							</div>

							</div>
						</div>

				<!-- ================section3===================		 -->

					

						<div class="m-layer m-layer-scene" id="scene3">
							<div class="m-layer-title">
								<div class="m-layer-diamond"></div>	
								<h2>獵寶之森</h2>
								
							</div>
							<p>想要體驗出其不意的驚奇嗎？就到這裡來吧！</p>	
							<div class="m-l3-content">
								
										
								<div id="owl-demo-sh" class="owl-carousel owl-theme">
								 
									<div class="item">
										<div class="m-l3-card m-card m-l3cb"  onclick="location.href='SH_index.php'">
											<h3>熱門二手遊戲</h3>
											<div class="m-l3-pd-pic">
												<img src="images/Need for Speed -index.jpg">
											</div>
											<p>Need for Speed</p>
											<p>NT$ 450</p>
											<!-- <span>瞭解更多</span> -->
										</div>
									</div>
									<div class="item">
										<div class="m-l3-card m-card m-l3cc"  onclick="location.href='SH_index.php'">
											<h3>熱門二手遊戲</h3>
											<div class="m-l3-pd-pic">
												<img src="images/The Last of Us-index.jpg">
											</div>
											<p>The Last of Us</p>
											<p>NT$ 500</p>
											<!-- <span>瞭解更多</span> -->
										</div>
									</div>
									<div class="item">
										<div class="m-l3-card m-card m-l3cc"  onclick="location.href='SH_index.php'">
											<h3>熱門二手遊戲</h3>
											<div class="m-l3-pd-pic">
												<img src="images/finafantasy-index.jpg">
											</div>
											<p>Final Fantasy XV</p>
											<p>NT$ 600</p>
											<!-- <span>瞭解更多</span> -->
										</div>
									</div>
								</div>


							<div class="pre_btn3 pre_btn owl_btn">
								<i class="fa fa-chevron-left" aria-hidden="true"></i>
							</div>
							<div class="next_btn3 next_btn owl_btn">
								<i class="fa fa-chevron-right" aria-hidden="true"></i>
							</div>
							
							</div>
						</div>

					
						
               <!-- ===================section4================== -->
						
           
						<div class="m-layer m-layer-scene" id="scene4">
							<div class="m-layer-title">
								<div class="m-layer-diamond"></div>	
								<h2>仰望之塔</h2>
								
							</div>
							<p>最新最熱門的遊戲新聞都在這</p>
							<div class="m-l4-content">
								<div id="owl-demo-news" class="owl-carousel owl-theme">
									<div class="item">
										<div class="m-l4-card m-card"  onclick="location.href='newsInfo.php?id=13'">
											<h3>加速世界 VS 刀劍神域 千年的黃昏》2017 年 3 月 16 日發售</h3>
											<div class="m-l4-card-img">
												<img src="images/news_index_3.png">
											</div>	
											<p>BANDAI NAMCO Entertainment 於昨（8）日公布，動作 RPG 遊戲《加速世界 VS 刀劍神域 千年的黃昏...繼續閱讀
											</p>
											<span>閱讀全文</span>
										</div>
									</div>	
									<div class="item">
										<div class="m-l4-card m-card"  onclick="location.href='newsInfo.php?id=11'">
											<h3>《菲莉絲的鍊金工房》繁體中文版將於 2017 年 1 月 12 日發售</h3>
											<div class="m-l4-card-img">
												<img src="images/news_index_1.jpg">
											</div>	
											<p>臺灣光榮特庫摩宣布「鍊金術士」系列最新作《菲莉絲的鍊金工房 ～不可思議之旅的鍊金術士～》...繼續閱讀</p>
											<span>閱讀全文</span>
										</div>
									</div>
									<div class="item">
										
										<div class="m-l4-card m-card"  onclick="location.href='newsInfo.php?id=12'">
											<h3>佩里亞編年史研發團隊解析未來設計藍圖 玩家能夠主動創造的遊戲</h3>
											<div class="m-l4-card-img">
												<img src="images/news_index_2.jpg">
											</div>	
											<p>《Project NT》以存在著超自然生命體的幻想世界為背景，強調藉由獨特、新鮮的高品質卡通渲染效果，加上個性化的裝備、技能等系統，帶給線上遊戲愛好者別具風格的遊戲樂趣 ...繼續閱讀
											</p>
											<span>閱讀全文</span>
										</div>
									</div>
						
								</div>	
								<div class="pre_btn4 pre_btn owl_btn">
											<i class="fa fa-chevron-left" aria-hidden="true"></i>
										</div>
										<div class="next_btn4 next_btn owl_btn">
											<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</div>
							</div>	
						</div>

					
		
					

					<!-- ================section5====================	 -->
					


						<div class="m-layer m-layer-scene" id="scene5">
							
							<div class="m-layer-title">
									<div class="m-layer-diamond"></div>	
									<h2>呢喃之鎮</h2>
									
							</div>
							<p>在這裏可以找到志同道合的夥伴！</p>
							<div class="m-l5-content">
									<div class="m-l5-card m-card"  onclick="location.href='#'">
										
										<div class="m-member-info">
											<div class="m-l5-card-img">
												<img src="images/yidodo10800110002913.jpg">
											</div>	
											<div class="m-member-nickname">
												致命水蜜桃
											</div>
										</div>	
										<div class="m-discuss-each">
											<div class="m-discuss-title">我被GM搭訕拉！>///<</div>
											<div class="m-discuss-date">2016-12-09</div>
										</div>
										
									</div>	
									<div class="m-l5-card m-card"  onclick="location.href='forumIndex.php'">
										
										<div class="m-member-info">
											<div class="m-l5-card-img">
												<img src="images/quite.jpg">
											</div>	
											<div class="m-member-nickname">
												卍上官列雲卍
											</div>
										</div>
										<div class="m-discuss-each">
											<div class="m-discuss-title">最喜歡玩極速快感了！</div>
											<div class="m-discuss-date">2016-12-10</div>
										</div>	
										
									</div>
									<div class="m-l5-card m-card"  onclick="location.href='forumIndex.php'">
										
										<div class="m-member-info">
											<div class="m-l5-card-img">
												<img src="images/snow_white.jpg">
											</div>	
											<div class="member-nickname">
												♥白雪公主♥
											</div>
										</div>	
										<div class="m-discuss-each">
											<div class="m-discuss-title">寶可夢讓我重新認識自己</div>
											<div class="m-discuss-date">2016-12-12</div>
										</div>
										
									</div>
										
									<div class="m-l5-card m-card"  onclick="location.href='forumIndex.php'">
										
										<div class="m-member-info">
											<div class="m-l5-card-img">
												<img src="images/yidodo10800110002913.jpg">
											</div>	
											<div class="member-nickname">
												致命水蜜桃
											</div>
										</div>
											<div class="m-discuss-title">我遇到GM拉！</div>
											<div class="m-discuss-date">2016-11-11</div>
									</div>				
								</div>

		<!-- ===============================for 手機=================================						 -->
								<div class="m-l5-content-2">
									<div class="m-l5-card m-card"  onclick="location.href='forumIndex.php'">
										
										<div class="m-discuss-each">
											<div class="m-discuss-title">我被GM搭訕拉！>///<</div>
											<div class="m-discuss-date">2016-12-09</div>
										</div>
										<div class="m-member-info">
											<div class="m-l5-card-img">
												<img src="images/yidodo10800110002913.jpg">
											</div>	
											<div class="m-member-nickname">
												致命水蜜桃
											</div>
										</div>	
										
									</div>	
									<div class="m-l5-card m-card"  onclick="location.href='forumIndex.php'">
										
										<div class="m-discuss-each">
											<div class="m-discuss-title">最喜歡玩極速快感了！owo</div>
											<div class="m-discuss-date">2016-11-11</div>
										</div>	
										<div class="m-member-info">
											<div class="m-l5-card-img">
												<img src="images/yidodo10800110002913.jpg">
											</div>	
											<div class="m-member-nickname">
												卍上官列雲卍
											</div>
										</div>
										
									</div>
									<div class="m-l5-card m-card"  onclick="location.href='forumIndex.php'">
										
										<div class="m-discuss-each">
											<div class="m-discuss-title">寶可夢讓我重新認識自己</div>
											<div class="m-discuss-date">2016-11-11</div>
										</div>	
										<div class="m-member-info">
											<div class="m-l5-card-img">
												<img src="images/yidodo10800110002913.jpg">
											</div>	
											<div class="m-member-nickname">
												♥白雪公主♥
											</div>
										</div>
										
									</div>
										
									<div class="m-l5-card m-card"  onclick="location.href='forumIndex.php'">
										
										<div class="m-discuss-each">
											<div class="m-discuss-title">我遇到GM拉！</div>
											<div class="m-discuss-date">2016-11-11</div>
										</div>	
										<div class="m-member-info">
											<div class="m-l5-card-img">
												<img src="images/yidodo10800110002913.jpg">
											</div>	
											<div class="m-member-nickname">
												致命水蜜桃
											</div>
										</div>
										
									</div>			
								</div>
							</div>		
					

						
				<!-- ===================section6===================== -->
					
						
						<div class="m-layer m-layer-scene" id="scene6">
							
							
								<img id ="m-womangod" src="images/anime.gif">
								<div class="m-womangod-do" onclick="location.href='products.php'">
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									讓我帶你進入遊戲烏托邦！
								</div>
							
						</div>
	
						<?php
							include("function/footer.php");
						?>
	

		</div>

		<div id="index-container3">	

			<hr id="m-index-hr">					
	
	<!-- <script src="js/jquery-3.1.0.min.js"></script> -->

			<div class="triBox">
				<div class='triContainer'>
					  <div class='tri reverse'></div>
					  <div class='tri reverse'></div>
					  <div class='tri'></div>
					  <div class='tri reverse'></div>
					  <div class='tri reverse'></div>
					  <div class='tri'></div>
					  <div class='tri reverse' id="center"></div>
					  <div class='tri'></div>
					  <div class='tri reverse'></div>
					  <div class="tri"></div> <!-- 下半部 -->
					  <div class="tri reverse"></div>
					  <div class='tri' id="center"></div>
					  <div class='tri reverse'></div>
					  <div class="tri"></div>
					  <div class="tri"></div>
					  <div class='tri reverse'></div>
					  <div class="tri"></div>
					  <div class="tri"></div>
				 <div class="tritxt_box">	
					<div class="tritxt2">GameTopia</div>
					<div class="tritxt">L O A D I N G</div>
				</div>
				</div>
			</div>	


	<!-- 		<div class="m-cover_all">
				  <div class="m-cover_a m-cover">
				    <div class="m-cover_a_line m-cover_line"></div>
				    <span>TOPIA </span>
				  </div>
				  <div class="m-cover_b m-cover">
				    <span>GAME</span>
				    <div class="m-cover_b_line m-cover_line"></div>			    
				  </div>
			</div> -->
					<div class="m-layer m-layer-scene" id="scenez8">
						<div id="scenex8">
			
						</div>	
					</div>	
						



					<div class="m-layer m-layer-scene" id="scene08">
						
							<div class="slogan">
								GAME<span>TOPIA</span>
							</div>
							
							<div class="m-layer-border-box">
								<p>遊戲烏托邦</p>
								<p>G a m e</p>
								<p>T o p i a</p>
								<p>遊戲玩家的理想國度</p>
											
							</div>
							<div class="megami">
								<img src="images/anime.gif">
							</div>
							
					</div>	


						<script src="js/owl.carousel.min.js"></script>
						

						<div class="m-layer m-layer-scene" id="scene18">
							
							<div class="m-layer-title">
								<div class="m-layer-diamond"></div>	
								<h2>豐饒之城</h2>
								
							</div>

							<p>任何你想要的遊戲都可以在這裡找到！</p>
							
								
							<div id="owl-demo8" class="owl-carousel owl-theme">
							 
								<div class="item m1c">
									
										<a href="products.php">
											<img src="images/slider/slider01.jpg" alt="The Last of us">
										</a>	
									
								</div>
								<div class="item m1c">
									
										<a href="products.php">
											<img src="images/slider/slider07.jpg" alt="The Last of us">
										</a>
									
								</div>
								<div class="item m1c">
									
										<a href="products.php">
											<img src="images/slider/slider06.png" alt="The Last of us">
										</a>	
									
								</div>

							</div>

							<div class="pre_btn8 pre_btn owl_btn">
								<i class="fa fa-chevron-left" aria-hidden="true"></i>
							</div>
							<div class="next_btn8 next_btn owl_btn">
								<i class="fa fa-chevron-right" aria-hidden="true"></i>
							</div>

						</div>

					
					<!-- ===============section2=============================	 -->
						
						<div class="m-layer m-layer-scene" id="scene28">
							
							<div class="m-layer-title">
								<div class="m-layer-diamond"></div>	
								<h2>恩澤之谷</h2>
								
							</div>

							<p>傳達你的心意給另一個他!快來製作獨一無二的卡片吧!</p>
							<div class="m-l2-content">

											
								<div id="owl-demo-gift8" class="owl-carousel owl-theme" onclick="location.href='giftAndCard.php'">
								 	  <div class="item"><img src="images/female_active.png" alt="Owl Image"></div>
									  <div class="item"><img src="images/male_considerate_action.png" alt="Owl Image"></div>
									  <div class="item"><img src="images/female_passionate_adventure.png" alt="Owl Image"></div>
									  <div class="item"><img src="images/male_steady_exciting.png" alt="Owl Image"></div>
									  <div class="item"><img src="images/female_active_cooperative.png" alt="Owl Image"></div>
									  <div class="item"><img src="images/male_considerate_casual.png" alt="Owl Image"></div>
									  <div class="item"><img src="images/female_active_adventure.png" alt="Owl Image"></div>
									  <div class="item"><img src="images/male_original.png" alt="Owl Image"></div>
									  <div class="item"><img src="images/female_steady_cooperative.png" alt="Owl Image"></div>
									  <div class="item"><img src="images/male_passionate_roleplaying.png" alt="Owl Image"></div>
									  <div class="item"><img src="images/female_active_shooting.png" alt="Owl Image"></div>
									  <div class="item"><img src="images/male_considerate_exciting.png" alt="Owl Image"></div>
									 						
								</div>
								<div class="pre_btn28 pre_btn owl_btn">
										<i class="fa fa-chevron-left" aria-hidden="true"></i>
									</div>
									<div class="next_btn28 next_btn owl_btn">
										<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</div>
							</div>
						</div>

				<!-- ================section3===================		 -->

					

						<div class="m-layer m-layer-scene" id="scene38">
							<div class="m-layer-title">
								<div class="m-layer-diamond"></div>	
								<h2>獵寶之森</h2>
								
							</div>
							<p>想要體驗出其不意的驚奇嗎？就到這裡來吧！</p>	
							<div class="m-l3-content">
								
										
								<div id="owl-demo-sh8" class="owl-carousel owl-theme">
								 
									<div class="item">
										<div class="m-l3-card m-card m-l3cb"  onclick="location.href='SH_index.php'">
											<h3>熱門二手遊戲</h3>
											<div class="m-l3-pd-pic">
												<img src="images/pd.png">
											</div>
											<p>真三國無雙</p>
											<p>NT$ 500</p>
											<!-- <span>瞭解更多</span> -->
										</div>
									</div>
									<div class="item">
										<div class="m-l3-card m-card m-l3cc"  onclick="location.href='SH_index.php'">
											<h3>熱門二手遊戲</h3>
											<div class="m-l3-pd-pic">
												<img src="images/ranger-index.jpg">
											</div>
											<p>地城守護者2</p>
											<p>NT$ 500</p>
											<!-- <span>瞭解更多</span> -->
										</div>
									</div>
									<div class="item">
										<div class="m-l3-card m-card m-l3cc"  onclick="location.href='SH_index.php'">
											<h3>熱門二手遊戲</h3>
											<div class="m-l3-pd-pic">
												<img src="images/Need for Speed -index.jpg">
											</div>
											<p>Need for Speed</p>
											<p>NT$ 450</p>
											<!-- <span>瞭解更多</span> -->
										</div>
									</div>
									<div class="item">
										<div class="m-l3-card m-card m-l3cb"  onclick="location.href='SH_index.php'">
											<h3>熱門二手遊戲</h3>
											<div class="m-l3-pd-pic">
												<img src="images/The Last of Us-index.jpg">
											</div>
											<p>The Last of Us</p>
											<p>NT$ 550</p>
											<!-- <span>瞭解更多</span> -->
										</div>
									</div>
									<div class="item">
										<div class="m-l3-card m-card m-l3cc"  onclick="location.href='SH_index.php'">
											<h3>熱門二手遊戲</h3>
											<div class="m-l3-pd-pic">
												<img src="images/finafantasy-index.jpg">
											</div>
											<p>Final Fantasy XV</p>
											<p>NT$ 600</p>
											<!-- <span>瞭解更多</span> -->
										</div>
									</div>
									<div class="item">
										<div class="m-l3-card m-card m-l3cc"  onclick="location.href='SH_index.php'">
											<h3>熱門二手遊戲</h3>
											<div class="m-l3-pd-pic">
												<img src="images/god-warrior.jpg">
											</div>
											<p>女武神</p>
											<p>NT$ 500</p>
											<!-- <span>瞭解更多</span> -->
										</div>
									</div>
								</div>
							</div>
						</div>

					
						
               <!-- ===================section4================== -->
						
           
						<div class="m-layer m-layer-scene" id="scene48">
							<div class="m-layer-title">
								<div class="m-layer-diamond"></div>	
								<h2>仰望之塔</h2>
								
							</div>
							<p>最新最熱門的遊戲新聞都在這</p>
							
							<div class="l4-content">
								
										<div class="l4-card card"  onclick="location.href='newsInfo.php?id=11'">
											<h3>《菲莉絲的鍊金工房繁體中文版將於2017年1月12日發售</h3>
											<div class="l4-card-img">
												<img src="images/news_index_1.jpg">
											</div>	
											<p>臺灣光榮特庫摩宣布「鍊金術士」系列最新作《菲莉絲的鍊金工房 ～不可思議之旅的鍊金術士～》...繼續閱讀</p>
											<span>閱讀全文</span>
										</div>
								
								
										
										<div class="l4-card card"  onclick="location.href='newsInfo.php?id=12'">
											<h3>佩里亞編年史研發團隊解析未來設計藍圖 玩家能夠主動創造的遊戲</h3>
											<div class="l4-card-img">
												<img src="images/news_index_2.jpg">
											</div>	
											<p>《Project NT》以存在著超自然生命體的幻想世界為背景，強調藉由獨特、新鮮的高品質卡通渲染效果...繼續閱讀
											</p>
											<span>閱讀全文</span>
										</div>
									
							</div>		
						</div>

					
		
					

					<!-- ================section5====================	 -->
					


						<div class="m-layer m-layer-scene" id="scene58">
							
							<div class="m-layer-title">
									<div class="m-layer-diamond"></div>	
									<h2>呢喃之鎮</h2>
				
							</div>
							<p>在這裏可以找到志同道合的夥伴！</p>
						<div class="l5-content">
								<div class="l5-card card"  onclick="location.href='forumIndex.php'">
									<div class="member-info">
										<div class="l5-card-img">
											<img src="images/yidodo10800110002913.jpg">
										</div>	
										<div class="member-nickname">
											致命水蜜桃
										</div>
									</div>	
									<div class="discuss-each">
										<div class="discuss-title">我被GM搭訕拉！>///<</div>
										<div class="discuss-date">2016-12-09</div>
									</div>
								</div>	
								<div class="l5-card card"  onclick="location.href='forumIndex.php'">
									<div class="member-info">
										<div class="l5-card-img">
											<img src="images/snow_white.jpg">
										</div>	
										<div class="member-nickname">
											♥白雪公主♥
										</div>
									</div>	
									<div class="discuss-each">
										<div class="discuss-title">寶可夢讓我重新認識自己</div>
										<div class="discuss-date">2016-12-11</div>
									</div>
								</div>
								<div class="l5-card card"  onclick="location.href='forumIndex.php'">
									<div class="member-info">
										<div class="l5-card-img">
											<img src="images/quite.jpg">
										</div>	
										<div class="member-nickname">
											卍上官列雲卍
										</div>
									</div>	
									<div class="discuss-each">
										<div class="discuss-title">最喜歡玩極速快感了！</div>
										<div class="discuss-date">2016-12-12</div>
									</div>
								</div>	
						</div>

						
				<!-- ===================section6===================== -->
					
				<!-- 		
						<div class="m-layer m-layer-scene" id="scene68">
							
							
								<img id ="m-womangod" src="images/anime.gif">
								<div class="m-womangod-do" onclick="location.href='products.php'">
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									讓我帶你進入遊戲烏托邦！
								</div>
							
						</div>

		 -->
		
		</div>	

		<?php
			include("function/footer.php");
		?>
				
	
	</div>				
</body>
</html>
<script type="text/javascript">
  if (document.images) {
 	var bg7= new Image();
	var bg8= new Image();
	var bg9= new Image();
	var bg10= new Image();
	var bg11= new Image();
	var bg12= new Image();

	bg7.src= "images/pageShoppingmall.png";
	bg8.src= "images/bgimg/pageBackground.png";
	bg9.src= "images/pageNews.png";
	bg10.src= "images/pageForum.png";
	bg11.src= "images/pageMember.png"
	bg12.src= "images/pageGift.png";
	}
</script>
