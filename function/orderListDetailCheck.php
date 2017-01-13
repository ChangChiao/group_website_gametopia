<?php

require_once("connectSQL.php");

if(isset($_POST["orderId"]) && ($_POST["orderId"]) != ""){
	$orderId = $_POST["orderId"];
}
$orderDetailQuery = "SELECT * FROM order_list_detail WHERE orderId = '$orderId'";
$orderDetailRec = $pdo->query($orderDetailQuery);
$returnHTML = array();
while($orderDetailRow = $orderDetailRec->fetch(PDO::FETCH_ASSOC)){
	$proId = $orderDetailRow["proId"];
	$proInfoQuery = "SELECT * FROM products WHERE proId = '$proId'";
	$proInfoRec = $pdo->query($proInfoQuery);
	$proInfoRow = $proInfoRec->fetch(PDO::FETCH_ASSOC);
	$proImg = $proInfoRow["proImg"];
	$proName = $proInfoRow["proName"];
	$proPrice = $orderDetailRow["proPrice"];
	$quantity = $orderDetailRow["quantity"];
	$detailInfo = '
					<div class="orderTitle">訂單明細</div>
					<div class="orderInfo">
						<div><img src="'.$proImg.'"></div>
						<div>'.$proName.'</div>
						<div>'.$proPrice.'</div>
						<div>'.$quantity.'</div>
					</div>
					<div class="close_btn">
						
					</div>	
					';
	$returnHTML[] = $detailInfo;
}
$result = implode("", $returnHTML);

echo json_encode($returnHTML);



?>