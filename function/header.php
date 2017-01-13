	<!-- <script src="js/jquery-3.1.0.min.js"></script> -->
	<script>
		$(document).ready(function(){

//控制漢寶寶
			
		$('.header2-control').click(function(){
			$(this).toggleClass('open');
			$('.header2-meun-all-2').toggleClass('go');
		});


//摸到換圖案
		$('#sm-li a').hover(function(){
			$('#sm-icon').attr('src','images/supermarket-bag-2.png');
		},function(){
			$('#sm-icon').attr('src','images/supermarket-bag.png');
			
			}
		);

		$('#gb-li a').hover(function(){
			$('#gb-icon').attr('src','images/giftbox-2.png');
		},function(){
			$('#gb-icon').attr('src','images/giftbox.png');
			
			}
		);


		$('#sh-li a').hover(function(){
			$('#sh-icon').attr('src','images/bag-2.png');
		},function(){
			$('#sh-icon').attr('src','images/bag.png');
			
			}
		);

		$('#gm-li a').hover(function(){
			$('#gm-icon').attr('src','images/newspaper-report-2.png');
		},function(){
			$('#gm-icon').attr('src','images/newspaper-report.png');
			
			}
		);

		$('#fo-li a').hover(function(){
			$('#fo-icon').attr('src','images/chat-2.png');
		},function(){
			$('#fo-icon').attr('src','images/chat.png');
			
			}
		);

		$('.sh-pin').hover(function(){
			$('#sh-icon').attr('src','images/bag-2.png');
		},function(){
			$('#sh-icon').attr('src','images/bag.png');
			
			}
		);
		$('.fo-pin').hover(function(){
			$('#fo-icon').attr('src','images/chat-2.png');
		},function(){
			$('#fo-icon').attr('src','images/chat.png');
			
			}
		);
	
	});
	</script>	
	<div class="header">
			
			<div class="header-bg">
				
			</div>
		
		<div class="header-bottom">
			<div class="header-logo" onclick="location.href='index.php'">
				<img src="images/01LOGO.png">
			</div>
			
			<div class="header-meun">
				<ul class="header-meun-all">
					<li id="sm-li">
						<span>
							<img id="sm-icon" src="images/supermarket-bag.png">
						</span>
						<a href="products.php">遊戲商城</a>
						<span class="zone-pin sm-pin"></span>
					</li>
					<li id="gb-li">
						<span>
							<img id="gb-icon" src="images/giftbox.png">
						</span>
						<a href="giftAndCard.php">送禮專區</a>
						<span class="zone-pin gb-pin"></span>
					</li>
					<li id="sh-li">
						<span>
							<img id="sh-icon" src="images/bag.png">
						</span>
						<a href="SH_index.php">二手買賣</a>
						<span class="zone-pin sh-pin"></span>
						<ul>
							<li><a href="megami.php">二手撈寶</a></li>
							<li><a href="SH_search.php">二手搜尋</a></li>
							<li><a href="usedProdPost.php">二手上架</a></li>
						</ul>
					</li>
					<li id="gm-li">
						<span>
							<img id="gm-icon" src="images/newspaper-report.png">
						</span>
						<a href="news.php">遊戲新聞</a>
						<span class="zone-pin gm-pin" ></span>
					</li>
					<li id="fo-li">
						<span>
							<img id="fo-icon" src="images/chat.png">
						</span>
						<a href="forumIndex.php">討論區</a>
						<span class="zone-pin fo-pin"></span>
						<ul>
							<li><a href="forum.php?platform=PS4">PS</a></li>
							<li><a href="forum.php?platform=XBOX">XBOX</a></li>
							<li><a href="forum.php?platform=3DS">3DS</a></li>
							<li><a href="forum.php?platform=Wii">Wii</a></li>
							<li><a href="forum.php?platform=PC">PC</a></li>
						</ul>
					</li>
				</ul>
			</div>	
			
		</div>
	</div>


	
	<div class="header2">
		<div class="header2-logo" onclick="location.href='index.php'">
				<img src="images/01LOGO.png">
		</div>
		
		<div class="header2-control">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="header2-meun2">
				<ul class="header2-meun-all-2">
					<li><span><img id="sm-icon" src="images/supermarket-bag-2.png"></span><a href="products.php">遊戲商城</a></li>
					<li><span><img id="gb-icon" src="images/giftbox-2.png"></span><a href="giftAndCard.php">送禮專區</a></li>
					<li><span><img id="sh-icon" src="images/bag-2.png"></span><a href="SH_index.php">二手買賣</a></li>
					<li><span><img id="gm-icon" src="images/newspaper-report-2.png"></span><a href="news.php">遊戲新聞</a></li>
					<li><span><img id="fo-icon" src="images/chat-2.png"></span><a href="forumIndex.php">討論區</a></li>
				</ul>
		</div>	
			
	</div>


