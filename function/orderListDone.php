<?php
ob_start();
session_start();
error_reporting(E_ALL || ~E_NOTICE);
require_once("connectSQL.php");

$orderAccount = $_SESSION["GTopiaAccount"];

if(isset($_POST["nameSendTo"]) && ($_POST["nameSendTo"]) != ""){
	$orderContecter = $_POST["nameSendTo"];
}
if(isset($_POST["telSendTo"]) && ($_POST["telSendTo"]) != ""){
	$contecterPhone = $_POST["telSendTo"];
}
if(isset($_POST["addrSendTo"]) && ($_POST["addrSendTo"]) != ""){
	$contecterAddress = $_POST["addrSendTo"];
}

$orderIdQuery = "SELECT id FROM order_list_overall ORDER BY id DESC";
$orderIdRec = $pdo->query($orderIdQuery);
$orderIdRow = $orderIdRec->fetch(PDO::FETCH_ASSOC);
$count = $orderIdRow["id"] + 1;
$num = str_pad($count,5,'0',STR_PAD_LEFT);
$orderId = 'OD'.$num;

$orderDate = date('y-m-d');

$totalQuantity = 0;
$totalPrice = 0;

foreach ($_SESSION["cart"] as $proId => $proInfo) {
	$totalQuantity += $proInfo["quantity"];
	$totalPrice += $proInfo["quantity"]*$proInfo["proPrice"];
	//迴圈將每筆商品輸入訂單細節資料庫
	$proPrice = $proInfo["proPrice"];
	$quantity = $proInfo["quantity"];
	$orderDetailInsertQuery = "INSERT INTO order_list_detail (orderId,orderAccount,proId,proPrice,quantity,orderDate) VALUES ('".$orderId."','".$orderAccount."','".$proId."','".$proPrice."','".$quantity."','".$orderDate."')";
	echo $orderDetailInsertQuery,"<br>";
	$orderDetailInsertRec = $pdo->query($orderDetailInsertQuery);
}

$insertOverAllQuery = "INSERT INTO order_list_overall (orderId,orderAccount,orderContecter,contecterPhone,contecterAddress,totalQuantity,totalPrice,orderDate) VALUES ('".$orderId."','".$orderAccount."','".$orderContecter."','".$contecterPhone."','".$contecterAddress."','".$totalQuantity."','".$totalPrice."','".$orderDate."')";
echo $insertOverAllQuery;
$insertOverAllRec = $pdo->query($insertOverAllQuery);


print_r($_SESSION["cart"]);
unset($_SESSION["cart"]);

header("location: ../finalBill.php?orderId=$orderId");


?>