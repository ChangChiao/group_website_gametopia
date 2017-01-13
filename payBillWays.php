<?php
ob_start();
session_start();
error_reporting(E_ALL || ~E_NOTICE);
require_once("function/connectSQL.php");

$memAccount = $_SESSION["GTopiaAccount"];

$totalPrice = 0;
foreach ($_SESSION["cart"] as $proId => $proInfo) {
	$totalPrice += $proInfo["quantity"]*$proInfo["proPrice"];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="Shortcut Icon" type="image/x-icon" href="images/gametopia.ico"/>
	<title>付款確認/遊戲烏托邦-GameTopia</title>
	<!-- 公版 -->
	
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="fontAwesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/payBillWays.css">
	<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
 	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

	<!-- 公版js -->
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/payBillWays.js"></script>
	
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
			<?php
				$memQuery = "SELECT * FROM memberdata WHERE memAccount = '$memAccount'";
				$memRec = $pdo->query($memQuery);
				$memRow = $memRec->fetch(PDO::FETCH_ASSOC);
			?>
			<p>親愛的 <span id="memName"><?php echo $memRow["memNickName"]; ?></span> 會員您好</p>

			<div class="recipientInfo">

					<!-- 收件人資訊 -->
					<div class="col_xs_5 col_sm_3 col_md_2 col_lg_2 title">收件人資訊</div>

					<div class="clearfix"></div>
					
					<div class="col_xs_12 col_sm_2 fieldName">姓名</div>
					<div class="col_xs_12 col_sm_8 inputForm_1" contenteditable="true" id="forName"></div>
					<div class="clearfix"></div>

					<div class="col_xs_12 col_sm_2 fieldName">聯絡電話</div>
					<div class="col_xs_12 col_sm_8 inputForm_1" contenteditable="true" id="forTel"></div>
					<div class="clearfix"></div>

					<div class="col_xs_12 col_sm_2 fieldName">地址</div>
					<div class="col_xs_3 col_sm_2 addrTitle">
						<!-- 台灣各縣市(越打越無言) -->
						<ul>
								<li>台北市</li>
								<li>新北市</li>
								<!-- 預設值 桃園 -->
								<li style="background-color: #fa0;color: #fff;" id="AT">桃園市</li>
								<li>台中市</li>
								<li>台南市</li>
								<li>高雄市</li>
								<li>基隆市</li>
								<li>新竹市</li>
								<li>嘉義市</li>
								<li>新竹縣</li>
								<li>苗栗縣</li>
								<li>彰化縣</li>
								<li>南投縣</li>
								<li>雲林縣</li>
								<li>嘉義縣</li>
								<li>屏東縣</li>
								<li>宜蘭縣</li>
								<li>花蓮縣</li>
								<li>台東縣</li>
								<input type="hidden" name="country" value="">
						</ul>

						<span id="addrTitle">選擇縣市</span>

						<!-- 上下選擇 -->
						<span id="addrTitleSelector">
							<i class="fa fa-caret-down" aria-hidden="true"></i>
						</span>
					</div>
					<div class="col_xs_9 col_sm_6 inputForm_1" contenteditable="true" id="forAddr"></div>
					<div class="clearfix"></div>

					<div id="hint">您選購的商品無法寄送到離島，請勿填寫離島地址</div>
			</div>

			<div class="sendMethod">

					<!-- 寄送方式 -->
					<div class="col_xs_5 col_sm_3 col_md_2 col_lg_2 title">寄送方式</div>
					<div class="clearfix"></div>

					<div class="col_xs_12 col_sm_11 checkMethodBtn" id="mailTo">
						<!-- 預設值為 郵寄 -->
						<div><span style="background-color: #555;"></span>郵寄</div>
					</div>
					<div class="col_xs_12 col_sm_11 checkMethodBtn" id="packageTo">
						<div><span></span>宅配到府</div>
					</div>
					<div class="clearfix"></div>

			</div>

			<div class="payMethod">

					<!-- 付款方式 -->
					<div class="col_xs_5 col_sm_3 col_md_2 col_lg_2 title">付款方式</div>
					<div class="clearfix"></div>

					<div class="col_xs_12 col_sm_11 checkMethodBtn" id="cardPay">
						<!-- 預設值為 信用卡 -->
						<div><span style="background-color: #333;"></span>信用卡</div>
					</div>
					<div class="col_xs_12 col_sm_11 cardInfo">
						<div class="col_xs_12 col_sm_12" id="cardNum">
							<span>信用卡卡號</span>
							<div contenteditable="true" class="cardNum">xxxx</div>
							<span></span>
							<div contenteditable="true" class="cardNum">xxxx</div>
							<span></span>
							<div contenteditable="true" class="cardNum">xxxx</div>
							<span></span>
							<div contenteditable="true" class="cardNum">xxxx</div>
						</div>
						<div class="col_xs_12 col_sm_12" id="date">
							<div class="col_xs_3 col_sm_3">有效日期</div>
							<div class="col_xs_3 col_sm_2">
								<div class="dateSelector" id="year" contenteditable="true">
									xxxx
								</div>
								年
							</div>
							<div class="col_xs_3 col_sm_2">
								<div class="dateSelector" id="month" contenteditable="true">
									xx
								</div>
								月
							</div>
							<span></span>
							<div class="clearfix"></div>
						</div>
						<div class="col_xs_12 col_sm_12" id="safe">
							<span>安全碼</span>
							<div contenteditable="true">xxx</div>
							<span></span>
						</div>
						<div class="clearfix"></div>
					</div>


					<div class="col_xs_12 col_sm_11 checkMethodBtn" id="remittance">
						<div><span></span>ATM 轉帳</div>
					</div>
					<div class="clearfix"></div>

			</div>

			<div class="reciptType">

					<!-- 發票資訊 -->
					<div class="col_xs_5 col_sm_3 col_md_2 col_lg_2 title">發票資訊</div>
					<div class="clearfix"></div>

					<div class="col_xs_12 col_sm_11 checkMethodBtn" id="donate">
						<!-- 預設值為 捐贈發票 -->
						<div><span style="background-color: #333;"></span>捐贈發票</div>
					</div>
					<div class="col_xs_12 col_sm_11 checkMethodBtn" id="twoCol">
						<div><span></span>二聯式電子發票</div>
					</div>
					<div class="col_xs_12 col_sm_11 checkMethodBtn" id="threeCol">
						<div><span></span>三聯式紙本發票</div>
					</div>
					<div class="clearfix"></div>

			</div>

			<div class="tt">
				<div class="total">
					本次消費總額
					<div id="money">NT$ <?php echo $totalPrice; ?></div>
				</div>
			</div>
			

			<form id="form" action="function/orderListDone.php" method="post">
				<input type="hidden" name="nameSendTo" value="" id="nameSendTo">
				<input type="hidden" name="telSendTo" value="" id="telSendTo">
				<input type="hidden" name="addrSendTo" value="" id="addrSendTo">

				<input type="hidden" name="sendMethod" value="郵寄" id="sendMethod">

				<input type="hidden" name="payMethod" value="信用卡" id="payMethod">
				<input type="hidden" name="cardNumber" value="" id="cardNumber">
				<input type="hidden" name="validityPeriod" value="" id="validityPeriod">
				<input type="hidden" name="safeCode" value="" id="safeCode">

				<input type="hidden" name="reciptType" value="捐贈發票" id="reciptType">
			</form>
			
			<div class="btns">
				<a href="cartSessionList.php"><div id="previous">上一步</div></a>
				<div id="next">確認結帳</div>
				<span></span>
			</div>
		</div>
		
	</div>

<?php

	include("function/footer.php");

?>

</body>
</html>
<!-- <script>
	$('#next').click(function(){
		var country = $('input[name="country"]').val();
		var name = $('#forName').text();
		var phone = $('#forTel').text();
		var address = $('#forAddr').text();
		var contecterAddress = country+address;

		
		$.ajax({
			url:"function/orderListDone.php",
			type:"POST",
			data:{orderContecter:name,contecterPhone:phone,contecterAddress:contecterAddress},
			dataType:"JSON",
			success: function(data){
				if(data["status"] == 'success'){
					location.href='finalBill.php';
				}
			}
		})

	})
</script> -->
