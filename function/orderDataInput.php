<?php
ob_start();
session_start();
error_reporting(E_ALL || ~E_NOTICE);
require_once("connectSQL.php");



$orderAccount = $_SESSION["GTopiaAccount"];
echo $orderAccount;

//收件人資料
if(isset($_POST["orderContecter"]) && ($_POST["orderContecter"]) != ""){
	$orderContecter = $_POST["orderContecter"];
}
if(isset($_POST["contecterPhone"]) && ($_POST["contecterPhone"]) != ""){
	$contecterPhone = $_POST["contecterPhone"];
}
if(isset($_POST["cityCountry"]) && ($_POST["cityCountry"]) != ""){
	$cityCountry = $_POST["cityCountry"];
}
if(isset($_POST["address"]) && ($_POST["address"]) != ""){
	$address = $_POST["address"];
}
$contecterAddress = $cityCountry.$address;



// orderId 
$orderQuery = "SELECT id FROM order_list_overall ORDER BY id DESC";
$orderRec = $pdo->query($orderQuery);
$orderRow = $orderRec->fetch(PDO::FETCH_ASSOC);
$x = $orderRow["id"]+1;
$num = str_pad($x,6,'0',STR_PAD_LEFT);
$orderId = "OL".$num;

$orderDate = date("y-m-d");

$totalQuantity = 0;
$totalPrice = 0;
foreach($_SESSION["cart"] as $proId => $cartInfo){
	
	$proPrice = $cartInfo["proPrice"];
	$quantity = $cartInfo["quantity"];
	$totalQuantity += $quantity;
	$totalPrice += $quantity*$proPrice;

	// insert into order_list_detail
	$insertQuery = "INSERT INTO order_list_detail (orderId,orderAccount,proId,proPrice,quantity,orderDate) VALUES ('".$orderId."','".$orderAccount."','".$proId."','".$proPrice."','".$quantity."','".$orderDate."')";
	$insertRec = $pdo->query($insertQuery);

}

$overAllQuery = "INSERT INTO order_list_overall (orderId,orderAccount,orderContecter,contecterPhone,contecterAddress,totalQuantity,totalPrice,orderDate) VALUES ('".$orderId."','".$orderAccount."','".$orderContecter."','".$contecterPhone."','".$contecterAddress."','".$totalQuantity."','".$totalPrice."','".$orderDate."')";
$overAllRec = $pdo->query($overAllQuery);

header("location : ");

?>