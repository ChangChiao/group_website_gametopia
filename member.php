<?php
ob_start();
session_start();
error_reporting(E_ALL || ~E_NOTICE);
require("function/connectSQL.php");

$memAccount = $_SESSION["GTopiaAccount"];

$memInfoQuery = "SELECT * FROM memberdata WHERE memAccount = '$memAccount'";
$memInfoRec = $pdo->query($memInfoQuery);
$memInfoRow = $memInfoRec->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>會員專區/遊戲烏托邦-GameTopia</title>
	<link rel="Shortcut Icon" type="image/x-icon" href="images/gametopia.ico"/>
	<link rel="stylesheet" type="text/css" href="css/member.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/member.js"></script>
</head>
<body>

	

	<!-- ==================封面時報和頭貼======================= -->
<?php

include('function/header.php');
include('function/memberBarSwitcher.php');

?>
	<div class="mz-container">
		<div class="containCover">
			<div class="mz-member-cover" 
				 style="background-image: url(<?php echo $memInfoRow["memImg"]; ?>);">
		 	 </div>
		 </div>	 
		<div class="mz-member-info">
			<div class="mz-title">
				<p>會員專區</p>	
			</div>
			<div id="mz-mem-pic">
				<img src="<?php echo $memInfoRow["memImg"]; ?>">
			</div>
			<div class="mz-mem-textInfo">
				<div id="mz-mem-id">ID : <?php echo $memInfoRow["memAccount"]; ?></div>
				<div id="mz-mem-name">
					<p><?php echo $memInfoRow["memNickName"]; ?></p>
				</div>
			</div>	
		</div>

  <!-- ================== 三個tab連結========================== -->
		<div class="mz-memeber-content">
			<div class="mz-tablist">
				<ul class="mz-tab-all " data-tabgroup="first-tab-group">
					<li><a href="#mz-content1">會員資料</a></li>
					<li><a href="#mz-content2">查詢訂單</a></li>
					<li><a href="#mz-content3">我的二手</a></li>
				</ul>		
			</div>
		</div>


<!-- ========================================================= -->
		<div class="mz-tab-content">
			<div class="mz-content" id="mz-content1">
				<div class="mz-profile-pic">
					<div class="mz-self-pic">
						<img id="previewImg" src="<?php echo $memInfoRow["memImg"]; ?>">
					</div>
					<div class="mz-upload-pic">
					<form action="function/memberInfoUpdate.php" method="post" enctype="multipart/form-data">
						
						<input id="uploadFileMem" placeholder="Choose File" disabled="disabled" />
        					<div class="fileUploadMem btnMem btn-primaryMem">
							    <span>選擇檔案</span>
							    <input type="file" id="mz-self-img" name="memImg">
							</div>	
						<!-- <input type="file" id="mz-self-img" name="memImg"><br> -->
						<input type="hidden" name="memInfoCheck" value="photo">
						<input type="hidden" name="memId" value="<?php echo $memInfoRow["memId"]; ?>">
						<p>請上傳尺寸100*100的圖片</p>
						<button type="submit" id="imgConfirm" value="">修改圖片</button><br>
						
					</form>	
					</div>
				</div>
				<div class="mz-profile">
					<form action="function/memberInfoUpdate.php" method="post">
						<table align="center">
							<tr>
								<td>ID</td>
								<td><?php echo $memInfoRow["memAccount"]; ?></td>
							</tr>
							<tr>
								<td>密碼</td>
								<td><input type="password" id="mz-password" value="<?php echo $memInfoRow["memPassword"]; ?>" disabled="true" name="memPassword"></td>
								<td><div id="mz-p-revise"><img src="images/Pen.png"></div></td>
							</tr>
							<tr>
								<td>暱稱</td>
								<td><input type="text" name="mz-name" id="mz-name" value="<?php echo $memInfoRow["memNickName"]; ?>" disabled="true"></td>
								<td><div id="mz-n-revise"><img src="images/Pen.png"></div></td>
							</tr>
							<tr>
								<td>email</td>
								<td><input type="text" name="mz-email" id="mz-email" value="<?php echo $memInfoRow["memEmail"]; ?>" disabled="true"></td>
								<td><div id="mz-e-revise"><img src="images/Pen.png"></div></td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="submit" name="" value="確認">
									<input type="hidden" name="memInfoCheck" value="information">
									<input type="hidden" name="memId" value="<?php echo $memInfoRow["memId"]; ?>">
									<input type="reset" name="" value="取消">
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
			
			<div class="mz-content" id="mz-content2">
				<form action="">
					<table align="center" border="1" cellspacing="0">
						<?php
							$orderListQuery = "SELECT * FROM order_list_overall WHERE orderAccount = '$memAccount' ORDER BY id DESC";
							$orderListRec = $pdo->query($orderListQuery);
							$rowCount = count($orderListRec->fetch(PDO::FETCH_ASSOC));
							echo $rowCount;

						?>
						<tr>
							<th></th>
							<th>訂單編號</th>
							<th>收件人</th>
							<th>訂單金額</th>
							<th>訂購日期</th>
							<th>商品總數</th>
							<th>處理狀態</th>
						</tr>
						<?php
							$orderListQuery = "SELECT * FROM order_list_overall WHERE orderAccount = '$memAccount' ORDER BY id DESC";
							$orderListRec = $pdo->query($orderListQuery);
							$numCount = 0;
							while($orderListRow = $orderListRec->fetch(PDO::FETCH_ASSOC)){
								$numCount += 1;
						?>
						<tr>
							<td><?php echo $numCount; ?></td>
							<td><a id="orderId" style="cursor:pointer;"><?php echo $orderListRow["orderId"]; ?></a></td>
							<td><?php echo $orderListRow["orderContecter"]; ?></td>
							<td><?php echo $orderListRow["totalPrice"]; ?></td>
							<td><?php echo $orderListRow["orderDate"]; ?></td>
							<td><?php echo $orderListRow["totalQuantity"]; ?></td>
							<td><?php echo $orderListRow["status"]; ?></td>
						</tr>
						<?php } ?>

					</table>
				</form>
			</div>
			
			<div class="mz-content" id="mz-content3">
				<form action="">
					<table align="center" cellspacing="0">
						<tr>
							<th>商品照</th>
							<th>商品</th>
							<th>金額</th>
							<th>上架時間</th>
							<th>商品狀態</th>
						</tr>
						<?php
							$myUsedQuery = "SELECT * FROM products WHERE proType = '二手' AND seller = '$memAccount' ORDER BY id DESC";
							$myUsedRec = $pdo->query($myUsedQuery);
							while($myUsedRow = $myUsedRec->fetch(PDO::FETCH_ASSOC)){
						?>
						<tr>
							<td>
								<span class="mz-content3-pic">
									<img src="<?php echo $myUsedRow["proImg"]; ?>">
								<span>	
							</td>
							<td><?php echo $myUsedRow["proName"]; ?></td>
							<td><?php echo $myUsedRow["proPrice"]; ?></td>
							<td><?php echo $myUsedRow["onBoardDate"]; ?></td>
							<td><?php echo $myUsedRow["status"]; ?></td>
						</tr>
						<?php } ?>

					</table>		
				</form>	
			</div>

		</div>

	</div>
	<div class="showOrderDetail">
		<div class="infoContener">
			 <p>訂單詳細</p>
			 <div class="orderTitle">
			 	<div>商品圖</div>
			 	<div>商品名稱</div>
			 	<div>商品價格</div>
			 	<div>數量</div>
			 </div>
				<div class="orderInfo">
					<div><img src="images/pd5.jpg"></div>
					<div>name</div>
					<div>price</div>
					<div>quantity</div>
				</div>
			<div class="close_btn">
				<img src="images/circle-close.png">
			</div>	
		</div>
	</div>
<?php
	
	include('function/footer.php');

?>
</body>
</html>
<script>



	$("#mz-self-img").change(function(){
		console.log(this.files);

		var preview = new FileReader();

		preview.onload = function(e){
			$("#previewImg").attr("src",e.target.result);
		}

		preview.readAsDataURL(this.files[0]);
	});

	$("#orderId").click(function(){
		//點擊開啟光箱
		$(".showOrderDetail").css("display","block");
		// var orderId = $("#orderId").text();
		// console.log(orderId);
		// //用AJAX方法丟點擊的orderId到PHP處理，並接回結果，更改在DIV裡面
		// $.ajax({
		// 	url:"function/orderListDetailCheck.php",
		// 	type:"POST",
		// 	data:{orderId:orderId},
		// 	dataType:"JSON",
		// 	success:function(data){
		// 		$(".infoContener").html(data);
		// 		}
			
		// });
	});

	$('.close_btn').click(function(){
		$(".showOrderDetail").css("display","none");
		//關閉燈箱
	});
</script>