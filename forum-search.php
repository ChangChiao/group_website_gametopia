<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/forum.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/forum.js"></script>
	<script src="js/header.js"></script>
	<title>討論區 - 搜尋結果</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><!-- 補上meta方便看RWD成果 -->
</head>
<body>
	<?php
	include("function/header.php");
	include("function/memberBarSwitcher.php");
	// include("header.html");
	?>
	<div class="uiBtns"> <!-- 中間麵包屑+搜尋+發文 -->
		<div class="breadcrumbs">
			<a href="index.php">HOME</a> &gt; <a href="forumIndex.php">討論區</a> &gt; PS系列
		</div>
		<div class="post">
			<form action="forum-search.php" method="post">
				<input type="search" name="search" id="search" placeholder="搜尋">
				<select name="category">
					<option value="default">分類</option>
					<option value="notice">公告</option>
					<option value="chat">閒聊</option>
					<option value="review">心得</option>
					<option value="guide">攻略</option>
				</select>
				<button class="btnSearch"><i class="fa fa-search"></i></button>
			</form>
			<a href="#" class="btnPost" id="btnPost">發文</a>	
		</div>
	</div>
	
	<div class="giantBox">
		<div class="postArticle" id="postArticle"> <!-- 發表新文章的光箱 -->
			<h2 class="title">發表新文章</h2>
		
			<form action="function/forumAddArticle.php" method="post" id="form_Post">
				<div class="platNcat">
					<select name="platform" id="platform">
						<option value="default" selected>平台</option>
						<option value="ps">PS</option>
						<option value="xbox">XBOX</option>
						<option value="pc">PC</option>
						<option value="handheld">掌機</option>
						<option value="mobile">手機</option>
					</select>
					<select name="category" id="postCategory">
						<option value="default">分類</option>
						<option value="notice">公告</option> <!-- 要偵測是否為管理員 -->
						<option value="chat">閒聊</option>
						<option value="review">心得</option>
						<option value="guide">攻略</option>
					</select>
				</div>
						
				<input type="text" name="artTitle" class="artTitle" placeholder="文章標題">
				<div class="artImg">
					<i id="btnUpload" class="fa fa-picture-o"></i>
					<input type="file" name="artImg" id="upImg" style="display: none;">
				</div>
				<textarea name="artContent" rows="20" cols="40"></textarea>
				<div class="botUi">
					<label>發文驗證碼:<span id="randomCode"></span><input type="text" name="examCode" id="examCode"></label>
					<button type="button" id="btnSend">發表</button>
					<!-- <button id="btnPreview">預覽</button> -->
				</div>
			</form>
			<a class="btnClose" id="btnClose">&times;</a>
		</div>
	</div>


	<div class="pagination"> <!-- 中間分頁 -->
		<a href="#">&lt;</a>
		<a href="#">1</a>
		<a href="#">2</a>
		<a href="#">3</a>
		<a href="#">4</a>
		<a href="#">5</a>
		<a href="#">6</a>
		<a href="#">&gt;</a>
		<a href="#">》</a>
	</div>

	<div class="mainContent"> <!-- 主要內容區 -->
		<div class="headRow"> <!-- 上方標題列 -->
			<div class="category">發文類型</div>
			<div class="postTitle">文章標題</div>
			<div class="heat">回覆/人氣</div>
			<div class="postTime">發表時間</div>
			<div class="finalPost">最後發表</div>
		</div>
		<?php
			try{
				require_once("function/connectSQL.php");	
				$sql = 'SELECT * FROM comments WHERE comTitle LIKE :search ORDER BY comId DESC';
				switch ($_REQUEST["category"]) {
					case 'notice':
						$sql = 'SELECT * FROM comments WHERE comTitle LIKE :search AND comCategory = "notice"';
						break;
					case 'chat':
						$sql = 'SELECT * FROM comments WHERE comTitle LIKE :search AND comCategory = "chat"';
						break;
					case 'guide':
						$sql = 'SELECT * FROM comments WHERE comTitle LIKE :search AND comCategory = "guide"';
						break;
					case 'review':
						$sql = 'SELECT * FROM comments WHERE comTitle LIKE :search AND comCategory = "review"';
						break;	
					default:
						$sql = 'SELECT * FROM comments WHERE comTitle LIKE :search';
						break;
				}
				$articles = $pdo->prepare( $sql );
				// $articles->bindValue(":platform", $_REQUEST['platform']);
				$articles->bindValue(":search", "%{$_REQUEST["search"]}%");
				$articles->execute();
				if($articles->rowCount() == 0){ //判斷PDO物件裡面有撈到幾筆資料
							echo "<p style='text-align:center; order:2;'>本討論區無相關討論串</p>";
						}
				while ($artRow = $articles->fetch( PDO::FETCH_ASSOC) ) {
					if( $artRow["comCategory"] == 'notice' ){
						//公告ROW
					?>
					<div class="row noticeRow">
						<input type="hidden" name="comId"> <!-- 隱藏的文章ID，傳值給下頁用 -->
						<div class="category"><a href="#">【公告】</a></div>
						<div class="postTitle"><a href="forum-article.php?comId=<?php echo $artRow["comId"]; ?>"><?php echo $artRow["comTitle"]; ?></a></div>
						<div class="heat"><?php echo $artRow["comHeat"]; ?></div>
						<div class="postTime"><?php echo $artRow["comDate"]; ?></div>
						<div class="finalPost"><p><a href="#"><?php echo "member";?></a></p><p><?php echo $artRow["lastReply"]; ?></p></div>
					</div>
				<?php
					}else{
						//通用ROW
					?>
						<div class="row">
						<input type="hidden" name="comId"> <!-- 隱藏的文章ID，傳值給下頁用 -->
						<div class="category">
							<a href="#">
								<?php 
								switch ( $artRow["comCategory"] ){ /*判斷文章類型*/
									case 'review':
										echo "【心得】";
										break;
									case 'chat':
										echo "【閒聊】";
										break;
									case 'guide':
										echo "【攻略】";
										break;
									}
								?>
							</a>
						</div>
						<div class="postTitle"><a href="forum-article.php?comId=<?php echo $artRow["comId"]; ?>"><?php echo $artRow["comTitle"]; ?></a></div>
						<div class="heat"><?php echo $artRow["comHeat"]; ?></div>
						<div class="postTime"><?php echo $artRow["comDate"]; ?></div>
						<div class="finalPost"><p><a href="#"><?php echo "member";?></a></p><p><?php echo $artRow["lastReply"]; ?></p></div>
					</div>
		<?php			
					}//else結尾	
				}
			}catch(PDOExeption $e){
				echo "資料庫操作錯誤: ", $e.getMessage(), "<br>";
				echo "行號: ", $e.getLine(), "<br>";
			}
		?>
	</div>


	<div class="hotPost"> <!-- 右方熱門文章 -->
		<h3 class="title">熱門文章</h3>
		<div class="postItem">
			<p class="title">
				<span class="cat">【閒聊】</span>
				<span class="hotTitle"><a href="#">關於PS4《天命:合輯》英文版</a></span>
			</p>
		</div>
		<div class="postItem">
			<p class="title">
				<span class="cat">【心得】</span>
				<span class="hotTitle"><a href="#">內戰... 我準備好啦!</a></span>
			</p>
		</div>

		<div class="postItem">
			<p class="title">
				<span class="cat">【心得】</span>
				<span class="hotTitle"><a href="#">轉蛋機率與保底機制淺談</a></span>
			</p>
		</div>

		<div class="postItem">
			<p class="title">
				<span class="cat">【閒聊】</span>
				<span class="hotTitle"><a href="#">版上還有活人嗎?</a></span>
			</p>
		</div>
	</div>
	<div class="clearfix"></div>


	<div class="hotProducts"> <!-- 下方熱門商品 -->
		<h3 class="title">熱門商品</h3>
		<div class="itemBox">
			<div class="prodItem">
				<img src="images/ResidentEvil7.jpg">
				<p class="title">
					<span class="cat">【PS4】</span>
					<span class="prodTitle">惡靈古堡7</span>
				</p>
				<p class="price">NTD$1,259</p>
			</div>
			<div class="prodItem">
				<img src="images/Warframe.jpg">
				<p class="title">
					<span class="cat">【PS4】</span>
					<span class="prodTitle">戰甲神兵</span>
				</p>
				<p class="price">NTD$1,259</p>
			</div>
			<div class="prodItem">
				<img src="images/witcher3.jpg">
				<p class="title">
					<span class="cat">【PS4】</span>
					<span class="prodTitle">巫師3:狂獵</span>
				</p>
				<p class="price">NTD$1,259</p>
			</div>
			<div class="prodItem">
				<img src="images/Mafia3.jpg">
				<p class="title">
					<span class="cat">【PS4】</span>
					<span class="prodTitle">四海兄弟3</span>
				</p>
				<p class="price">NTD$1,259</p>
			</div>
		</div>
	</div>
	<?php 
		include("function/footer.php");
	?>
</body>
</html>
