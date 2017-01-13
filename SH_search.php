<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>遊戲烏托邦-二手尋寶</title>
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" href="css/SH_search.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	 
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="js/SH_search.js"></script>
	<script type="text/javascript" src="js/header.js"></script>
</head>
<body>
<?php 
	error_reporting(E_ALL || ~E_NOTICE);
	include('function/header.php');
	include('function/memberBarSwitcher.php')
?>
	<div class="SHSearch_container">
		<div class="gameSearchBar">
			<div class="selectbox">
				<div class="gameP">
					<div class="gamePIcon">
						<img src="images/game-console.png" alt="">
					</div>
					<select>
						<option value ="gamePselect">請選擇遊戲平台</option>
					  	<option value ="gamePS" id="gamePS">PS系列</option>
					  	<option value="gameXBOX" id="gameXBOX">XBOX</option>
					  	<option value="gameHH" id="gameHH">掌機</option>
					  	<option value="gamePC" id="gamePC">PC</option>
					</select>
				</div>
				<div class="gameType">
					<div class="gameTypeIcon">
						<img src="images/ancient-sword.png" alt="">
					</div>
					<select>
						<option value ="gamePselect">請選擇遊戲類型</option>
					  	<option value ="AVG">冒險</option>
					  	<option value="ACT">動作</option>
					  	<option value="MMO">多人</option>
					  	<option value ="RAC">競速</option>
					  	<option value="SLG">策略</option>
					  	<option value="SPT">運動</option>
					  	<option value="STG">射擊</option>
					  	<option value="RPG">角色扮演</option>
					</select>
				</div>
			</div>
			<div class="SH_searchboxarea">
				<div class="SH_searchbox">
					<div class="SH_searchmain">
						<input id="search" type="text" placeholder="Search...">
					</div>
					<div class="SH_searchIcon">
						<label for="search"><i class="fa fa-search" aria-hidden="true"></i></label>
					</div>
				</div>
			</div>
		</div>
		<div class="SH_products" onclick="location.href='SH_productEx.php'">
			<div class="SH_productbox">
				<div class="SH_productImg"><img src="images/witcher3.jpg" alt=""></div>
				<div class="productInfoarea">
					<div class="SH_productContent">
						<h2 id="SH_productName">SH_productName</h2>
						<div class="tags">
			                <span class="gameMom" id="gameMomPS">PS</span>
			                <span class="gameMom" id="gameMom3DS">3DS</span>
			                <span class="gameMom" id="gameMomXBOX">XBOX</span>
			                <span class="gameMom" id="gameMomPC">PC</span>
						</div>
						<div class="pricebox"><span id="price">300</span>元</div>
						<div class="memobox">
							<p id="memo">九成新，外殼有些許刮痕，但內部光碟完好。</p>
						</div>
					</div>
					<div class="paybar">
						<div class="paybox">
							<span class="count">
								<select name="" id="count">
									<option value="count_1">1</option>
								</select>
							</span>
							<span class="add_Cart">加入購物車</span>
						</div>
						<div class="clearBoth"></div>
					</div>
				</div>
			</div>
			<div class="SH_productbox">
				<div class="SH_productImg"><img src="images/witcher3.jpg" alt=""></div>
				<div class="productInfoarea">
					<div class="SH_productContent">
						<h2 id="SH_productName">SH_productName</h2>
						<div class="tags">
			                <span class="gameMom" id="gameMomPS">PS</span>
			                <span class="gameMom" id="gameMom3DS">3DS</span>
			                <span class="gameMom" id="gameMomXBOX">XBOX</span>
			                <span class="gameMom" id="gameMomPC">PC</span>
						</div>
						<div class="pricebox"><span id="price">300</span>元</div>
						<div class="memobox">
							<p id="memo">九成新，外殼有些許刮痕，但內部光碟完好。</p>
						</div>
					</div>
					<div class="paybar">
						<div class="paybox">
							<span class="count">
								<select name="" id="count">
									<option value="count_1">1</option>
								</select>
							</span>
							<span class="add_Cart">加入購物車</span>
						</div>
						<div class="clearBoth"></div>
					</div>
				</div>
			</div>
			<div class="SH_productbox">
				<div class="SH_productImg"><img src="images/witcher3.jpg" alt=""></div>
				<div class="productInfoarea">
					<div class="SH_productContent">
						<h2 id="SH_productName">SH_productName</h2>
						<div class="tags">
			                <span class="gameMom" id="gameMomPS">PS</span>
			                <span class="gameMom" id="gameMom3DS">3DS</span>
			                <span class="gameMom" id="gameMomXBOX">XBOX</span>
			                <span class="gameMom" id="gameMomPC">PC</span>
						</div>
						<div class="pricebox"><span id="price">300</span>元</div>
						<div class="memobox">
							<p id="memo">九成新，外殼有些許刮痕，但內部光碟完好。</p>
						</div>
					</div>
					<div class="paybar">
						<div class="paybox">
							<span class="count">
								<select name="" id="count">
									<option value="count_1">1</option>
								</select>
							</span>
							<span class="add_Cart">加入購物車</span>
						</div>
						<div class="clearBoth"></div>
					</div>
				</div>
			</div>
			<div class="SH_productbox">
				<div class="SH_productImg"><img src="images/witcher3.jpg" alt=""></div>
				<div class="productInfoarea">
					<div class="SH_productContent">
						<h2 id="SH_productName">SH_productName</h2>
						<div class="tags">
			                <span class="gameMom" id="gameMomPS">PS</span>
			                <span class="gameMom" id="gameMom3DS">3DS</span>
			                <span class="gameMom" id="gameMomXBOX">XBOX</span>
			                <span class="gameMom" id="gameMomPC">PC</span>
						</div>
						<div class="pricebox"><span id="price">300</span>元</div>
						<div class="memobox">
							<p id="memo">九成新，外殼有些許刮痕，但內部光碟完好。</p>
						</div>
					</div>
					<div class="paybar">
						<div class="paybox">
							<span class="count">
								<select name="" id="count">
									<option value="count_1">1</option>
								</select>
							</span>
							<span class="add_Cart">加入購物車</span>
						</div>
						<div class="clearBoth"></div>
					</div>
				</div>
			</div>
			<div class="SH_productbox">
				<div class="SH_productImg"><img src="images/witcher3.jpg" alt=""></div>
				<div class="productInfoarea">
					<div class="SH_productContent">
						<h2 id="SH_productName">SH_productName</h2>
						<div class="tags">
			                <span class="gameMom" id="gameMomPS">PS</span>
			                <span class="gameMom" id="gameMom3DS">3DS</span>
			                <span class="gameMom" id="gameMomXBOX">XBOX</span>
			                <span class="gameMom" id="gameMomPC">PC</span>
						</div>
						<div class="pricebox"><span id="price">300</span>元</div>
						<div class="memobox">
							<p id="memo">九成新，外殼有些許刮痕，但內部光碟完好。</p>
						</div>
					</div>
					<div class="paybar">
						<div class="paybox">
							<span class="count">
								<select name="" id="count">
									<option value="count_1">1</option>
								</select>
							</span>
							<span class="add_Cart">加入購物車</span>
						</div>
						<div class="clearBoth"></div>
					</div>
				</div>
			</div>
			<div class="SH_productbox">
				<div class="SH_productImg"><img src="images/witcher3.jpg" alt=""></div>
				<div class="productInfoarea">
					<div class="SH_productContent">
						<h2 id="SH_productName">SH_productName</h2>
						<div class="tags">
			                <span class="gameMom" id="gameMomPS">PS</span>
			                <span class="gameMom" id="gameMom3DS">3DS</span>
			                <span class="gameMom" id="gameMomXBOX">XBOX</span>
			                <span class="gameMom" id="gameMomPC">PC</span>
						</div>
						<div class="pricebox"><span id="price">300</span>元</div>
						<div class="memobox">
							<p id="memo">九成新，外殼有些許刮痕，但內部光碟完好。</p>
						</div>
					</div>
					<div class="paybar">
						<div class="paybox">
							<span class="count">
								<select name="" id="count">
									<option value="count_1">1</option>
								</select>
							</span>
							<span class="add_Cart">加入購物車</span>
						</div>
						<div class="clearBoth"></div>
					</div>
				</div>
			</div>
			<div class="SH_productbox">
				<div class="SH_productImg"><img src="images/witcher3.jpg" alt=""></div>
				<div class="productInfoarea">
					<div class="SH_productContent">
						<h2 id="SH_productName">SH_productName</h2>
						<div class="tags">
			                <span class="gameMom" id="gameMomPS">PS</span>
			                <span class="gameMom" id="gameMom3DS">3DS</span>
			                <span class="gameMom" id="gameMomXBOX">XBOX</span>
			                <span class="gameMom" id="gameMomPC">PC</span>
						</div>
						<div class="pricebox"><span id="price">300</span>元</div>
						<div class="memobox">
							<p id="memo">九成新，外殼有些許刮痕，但內部光碟完好。</p>
						</div>
					</div>
					<div class="paybar">
						<div class="paybox">
							<span class="count">
								<select name="" id="count">
									<option value="count_1">1</option>
								</select>
							</span>
							<span class="add_Cart">加入購物車</span>
						</div>
						<div class="clearBoth"></div>
					</div>
				</div>
			</div>
			<div class="SH_productbox">
				<div class="SH_productImg"><img src="images/witcher3.jpg" alt=""></div>
				<div class="productInfoarea">
					<div class="SH_productContent">
						<h2 id="SH_productName">SH_productName</h2>
						<div class="tags">
			                <span class="gameMom" id="gameMomPS">PS</span>
			                <span class="gameMom" id="gameMom3DS">3DS</span>
			                <span class="gameMom" id="gameMomXBOX">XBOX</span>
			                <span class="gameMom" id="gameMomPC">PC</span>
						</div>
						<div class="pricebox"><span id="price">300</span>元</div>
						<div class="memobox">
							<p id="memo">九成新，外殼有些許刮痕，但內部光碟完好。</p>
						</div>
					</div>
					<div class="paybar">
						<div class="paybox">
							<span class="count">
								<select name="" id="count">
									<option value="count_1">1</option>
								</select>
							</span>
							<span class="add_Cart">加入購物車</span>
						</div>
						<div class="clearBoth"></div>
					</div>
				</div>
			</div>
			<div class="SH_productbox">
				<div class="SH_productImg"><img src="images/witcher3.jpg" alt=""></div>
				<div class="productInfoarea">
					<div class="SH_productContent">
						<h2 id="SH_productName">SH_productName</h2>
						<div class="tags">
			                <span class="gameMom" id="gameMomPS">PS</span>
			                <span class="gameMom" id="gameMom3DS">3DS</span>
			                <span class="gameMom" id="gameMomXBOX">XBOX</span>
			                <span class="gameMom" id="gameMomPC">PC</span>
						</div>
						<div class="pricebox"><span id="price">300</span>元</div>
						<div class="memobox">
							<p id="memo">九成新，外殼有些許刮痕，但內部光碟完好。</p>
						</div>
					</div>
					<div class="paybar">
						<div class="paybox">
							<span class="count">
								<select name="" id="count">
									<option value="count_1">1</option>
								</select>
							</span>
							<span class="add_Cart">加入購物車</span>
						</div>
						<div class="clearBoth"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>