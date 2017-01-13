<?php
ob_start();
session_start();
require_once("function/connectSQL.php");
error_reporting(E_ALL || ~E_NOTICE);
$memAccount = $_SESSION["GTopiaAccount"];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="Shortcut Icon" type="image/x-icon" href="images/gametopia.ico"/>
	<title>結帳單據/遊戲烏托邦-GameTopia</title>
	<!-- 公版 -->
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="fontAwesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
 	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/finalBill.css">

	<!-- 公版js -->
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/finalBill.js"></script>
	
</head>
<body class="sm">
	<?php
	include("function/header.php");
	include("function/memberBarSwitcher.php");
	?>

	<div class="outBox">
		<div class="mainContainer">
			<div class="step">
				<table class="col_xs_10 col_sm_10 col_md_8" cellspacing="0">
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
						<td><i class="fa fa-flag fa-2x" style="color:white"></i></td>
					</tr>
				</table>
			</div>
			<div class="dearMem">
				<p>親愛的 <span id="memName"><?php echo $memAccount; ?></span> 會員您好</p>
			</div>
			<div class="bill">

				<!-- 購買明細 -->
				<div class="col_xs_5 col_sm_3 col_md_2 col_lg_2 title">購買明細</div>
				<div class="clearfix"></div>

				<table cellspacing="0">
					<tr>
						<th>商品名稱</th>
						<th>單價</th>
						<th>購買數量</th>
						<th>小計</th>
					</tr>
					<?php
						if(isset($_GET["orderId"]) && ($_GET["orderId"]) != ""){
							$orderId = $_GET["orderId"];
						}
						$numCount = 0;
						$orderQuery = "SELECT * FROM order_list_detail WHERE orderId = '$orderId'";
						$orderRec = $pdo->query($orderQuery);
						$rowCount = $orderRec->rowCount();
						$numCount = 0;
						while($orderRow = $orderRec->fetch(PDO::FETCH_ASSOC)){
							$proId = $orderRow["proId"];
							$proQuery = "SELECT * FROM products WHERE proId = '$proId'";
							$proRec = $pdo->query($proQuery);
							$proRow = $proRec->fetch(PDO::FETCH_ASSOC);
							$numCount += 1;
							if($rowCount == $numCount){
								$cssId = "id='last'";
							}
							
					?>
					<tr>
						<td <?php echo $cssId; ?>><?php echo $proRow["proName"]; ?></td>
						<td>NT$ <?php echo $orderRow["proPrice"]; ?></td>
						<td><?php echo $orderRow["quantity"]; ?></td>
						<td>NT$ <?php echo $orderRow["quantity"]*$orderRow["proPrice"]; ?></td>
					</tr>
					<?php  } ?>
				<!--
					<tr>
						<td>Shadow Warrior2</td>
						<td>NT$890</td>
						<td>1</td>
						<td>NT$890</td>
					</tr>
					<tr>
						<td>Shadow Warrior2</td>
						<td>NT$890</td>
						<td>1</td>
						<td>NT$890</td>
					</tr>
					<tr id="last">
						<td>Shadow Warrior2</td>
						<td>NT$890</td>
						<td>1</td>
						<td>NT$890</td>
					</tr>
				-->
					<tr id="total">
						<?php
							$overallQuery = "SELECT * FROM order_list_overall WHERE orderId = '$orderId'";
							$overallRec = $pdo->query($overallQuery);
							$overallRow = $overallRec->fetch(PDO::FETCH_ASSOC);
						?>
						<td colspan="3">合計金額: </td>
						<td>NT$ <?php echo $overallRow["totalPrice"]; ?></td>
					</tr>
				</table>
				<div class="clearfix"></div>
			</div>

			<div class="col_xs_12 col_sm_10 mention">
				<span>重要提醒</span>
				<div>
					<p>選擇「郵寄」，單次實際付款金額未滿 350元 ，加收 20元 處理費。</p>
					<p>選擇「宅配到府」，單次實際付款金額未滿 490元 ，加收 20元 處理費。</p>
				</div>
				<p>無庫存商品調貨時間請參考「商品平均調貨時間」</p>
			</div>
			<div class="clearfix"></div>
		</div>
		
	</div>

	<?php
		include('function/footer.php');
	?>

</body>
</html>