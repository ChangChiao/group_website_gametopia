<?php
ob_start();
session_start();
error_reporting(E_ALL || ~E_NOTICE);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>購物車列表</title>
	<link rel="stylesheet" type="text/css" href="css/cartSessionList.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/footer.css">
	<script src="script/cartList.js"></script>
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
</head>
<body>
	<?php
	include("function/header.php");
	include("function/memberBarSwitcher.php");
	?>
	<div class="outBox">
		<div class="step">
			<table class="col_xs_10 col_sm_10 col_md_8">
				<tr>
					<td></td>
					<td>購物明細</td>
					<td></td>
					<td>付款確認</td>
					<td></td>
					<td>最後確認</td>
					<td></td>
				</tr>
				<tr>
					<td>1</td>
					<td><span></span></td>
					<td>2</td>
					<td><span></span></td>
					<td>3</td>
					<td><span></span></td>
					<td><img src="../date1113/images/cartFlag.png"></td>
				</tr>
			</table>
		</div>
		<?php
			//會員暱稱
			if(isset($_SESSION["GTopiaAccount"]) && ($_SESSION['GTopiaAccount']) != ""){
				$memAccount = $_SESSION["GTopiaAccount"];
				$memNickQuery = "SELECT memNickName FROM memberdata WHERE memAccount = '$memAccount'";
				$memNickRec = $pdo->query($memNickQuery);
				$memNickRow = $memNickRec->fetch(PDO::FETCH_ASSOC);
				$memberName = $memNickRow["memNickName"];
			}else{
				$memberName = "流浪者";
			}
			
		?>
		<p>親愛的 <span id="memName"><?php echo $memberName; ?></span>您好</p>
		<form>
			<div class="cartList">
				<div class="col_xs_5 col_sm_3 col_md_2 col_lg_2 title">購物明細</div>
				<div class="clearfix"></div>

				<?php
					$alreadyBuy = array();
					$recomSeries = array();
					$cartCheck = count($_SESSION["cart"]);

					if ($cartCheck == 0) {
				?>
				<div class="noProductChoose">
					<span>並沒有選擇任何商品</span>
				</div>
				<?php
				}else{
				foreach ($_SESSION["cart"] as $proId => $key) {
					//推薦商品要用的參數陣列
					$alreadyBuy[] = $proId;

					$proQuery = "SELECT * FROM products WHERE proId = '$proId'";
					$proRec = $pdo->query($proQuery);
					$proRow = $proRec->fetch(PDO::FETCH_ASSOC);

					$totalQuantity += $key["quantity"];
					$totalPrice += $key["quantity"]*$proRow["proPrice"];
					//推薦商品要用的參數陣列
					$recomSeries[] = $proRow["proSeries"];

				?>
				<div class="listItem">
					
						<div class="col_xs_3 col_sm_3 col_md_3  prodImage " id="cardImage">
							
							<img src="images/ss4.jpg"> <!--我是背景圖-->
						
							<div id="card_role">		
								<img src="images/male_active.png"> <!--我是角色-->
						
							</div>	
			
						</div>

						<div class="col_xs_6 col_sm_6 col_md_6 card_content">
							ejdwoeijweoifjweeeeeewefiweofiwejfoiwejfoifjwijeiofj
						</div>	

						<div class="col_xs_2 col_sm_2 col_md_2 checkBlock">
							<div class="remove">
								<a href="function/sessionCartRemove.php?proId=<?php echo $proRow["proId"]; ?>&delete=true">
									<span>&times</span><span>移除</span>
								</a>
							</div>
						</div>	
				</div>

				<div class="clearfix"></div>

				<div class="listItem">
						<div class="col_xs_3 col_sm_3 col_md_3 prodImage">
							<img src="<?php echo $proRow["proImg"]; ?>" class="col_xs_12 col_sm_12">
						</div>
						<div class="col_xs_6 col_sm_6 col_md_6 prodInfo">
							<table>
								<tr>
									<td colspan="2"><?php echo $proRow["proName"]; ?></td>
								</tr>
								<tr>
									<td>
										單價: <span class="price">NT$ <?php echo $proRow["proPrice"]; ?></span>
									</td>
								</tr>
								<tr>
									<td>
										購買數量: <input type="text" size="3" value="<?php echo $key["quantity"]; ?>">
									</td>
								</tr>
							</table>
						</div>
						<div class="col_xs_3 col_sm_3 col_md_3 checkBlock">
							<div class="remove">
								<a href="function/sessionCartRemove.php?proId=<?php echo $proRow["proId"]; ?>&delete=true">
									<span>&times</span><span>移除</span>
								</a>
							</div>
							<div class="smallPrice">
								小計 <span class="price">NT$ <?php echo $key["quantity"]*$proRow["proPrice"]; ?></span>
							</div>
						</div>
						<div class="clearfix"></div>
				</div>
				<?php }} ?>
			</div>

			<div class="total">
				<p>
					共<span><?php if($totalQuantity!= null){echo $totalQuantity;} else echo 0; ?></span>項商品,總金額NT$<span><?php if($totalQuantity!= null){echo $totalPrice;} else echo 0; ?></span>
				</p>
			</div>
			<div class="decisionBtn">
				<div class="col_xs_12 col_sm_6 importantMention">
					<p><span>重要提醒</span></p>
					<p>選擇『郵寄』，單次實際付款金額未滿350元加收20元處理費。</p>
					<p>選擇『宅配到府』，單次實際付款金額未滿490元加收65元處理費。</p>
					<p>無庫存商品調貨時間請參考『商品平均調貨時間』。</p>
				</div>

				<div class="col_xs_12 col_sm_6 Btn">
					<a href="products.php" class="prodChoosses">繼續選購</a>
					<!-- <a href="#" class="cardMake">製作卡片</a> -->
					<?php 
						if(!isset($_SESSION['GTopiaAccount'])){			
					 ?>
							<a href="#" class="payBill" onclick="alert('請先登入會員')">結帳</a>
					 <?php }else{ ?>
							<a href="payBillWays.php" class="payBill">結帳</a>
					<?php } ?>
				</div>

				<div class="clearfix"></div>
			</div>
		</form>
		<div class="prodSuggest">
			<div class="col_xs_5 col_sm_3 col_md_2 col_lg_1 title">推薦商品</div>

			<div class="clearfix"></div>

			<!-- 推薦商品 -->
			<?php
			$i = 0;
			$j = 0;
			$a = array();
			$b = array();

			
			
			if($cartCheck == 0){

				$allProQuery = "SELECT * FROM products ORDER BY id DESC LIMIT 0,8";
				$allProRec = $pdo->query($allProQuery);
				while($allProRow = $allProRec->fetch(PDO::FETCH_ASSOC)){

				?>	
				
					<div class="col_xs_6 col_sm_4 col_md_3 prodSuggestItem">
						<img src="<?php echo $allProRow["proImg"]; ?>" class="col_xs_12 col_sm_12">
						<div class="price">
							<div class="original">
								<span id="original"><?php echo $allProRow["proName"]; ?></span>
							</div>
							<div class="special">
								NT$<span id="special"><?php echo $allProRow["proPrice"]; ?></span>
							</div>
						</div>
						<form action="function/sessionCartAdd.php" method="post">
							<div class="qty">
								<input type="hidden" name="quantity" value="1">
								<input type="hidden" name="proId" value="<?php echo $allProRow["proId"]; ?>">
							</div>
							<div class="addCart">
								<button type="submit">加入購物車</button>
							</div>
						</form>
					</div>


				<?php }

			}else{	

				//將不能重複的商品ID組成SQL字串
				foreach ($alreadyBuy as $noReapt => $keyProId) {
					if($i == 0){			
						$a[] = " AND proId != "."'$keyProId'";
					}elseif($i > 0 && $i < count($alreadyBuy)){
							$a[] = " AND proId != "."'$keyProId'";
					}
						
						$i++;	
				}

				//將必須一樣的商品類別組成SQL字串
				foreach ($recomSeries as $commandSeries => $keySeries) {
					if($j == 0){
						$b[] = "proSeries = "."'$keySeries'";
					}
						
					if($j > 0 && $j <= count($recomSeries)){
						$b[] = " OR proSeries ="."'$keySeries'";
						
					}
						$j++;
				}

						$a = implode(" ", $a);
						$b = implode(" ", $b);
						
						$recomQueryHead = "SELECT * FROM products WHERE ";
						$recomQueryLast = " ORDER BY clickNum DESC LIMIT 0,8";
						$recomQuery = $recomQueryHead."(".$b.")".$a.$recomQueryLast;
						
						// echo $recomQuery;
						// echo $recomQuery;
						$recomRec = $pdo->query($recomQuery);
						while($recomRow = $recomRec->fetch(PDO::FETCH_ASSOC)){
				
			?>
					<div class="col_xs_6 col_sm_4 col_md_3 prodSuggestItem">
						<img src="<?php echo $recomRow["proImg"]; ?>" class="col_xs_12 col_sm_12">
						<div class="price">
							<div class="original">
								<span id="original"><?php echo $recomRow["proName"]; ?></span>
							</div>
							<div class="special">
								NT$<span id="special"><?php echo $recomRow["proPrice"]; ?></span>
							</div>
						</div>
						<form action="function/sessionCartAdd.php" method="post">
							<div class="qty">
								<input type="hidden" name="quantity" value="1">
								<input type="hidden" name="proId" value="<?php echo $recomRow["proId"]; ?>">
							</div>
							<div class="addCart">
								<button type="submit">加入購物車</button>
							</div>
						</form>
					</div>
				<?php } ?>
			<?php } ?>

			<div class="clearfix"></div>
		</div>
	</div>
<?php 
	include("function/footer.php");
 ?>
</body>
</html>