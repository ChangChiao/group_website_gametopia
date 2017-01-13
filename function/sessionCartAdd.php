<?php
ob_start();
session_start();
// error_reporting(E_ALL || ~E_NOTICE);

if(isset($_POST["proId"]) && ($_POST["proId"]) != ""){
	$proId = $_POST["proId"];
}
//預防使用者沒有設定數量，增加最小值1
$quantity = 1;
if(isset($_POST["quantity"]) && ($_POST["quantity"]) != ""){
	$quantity = $_POST["quantity"];
}



try {
	require_once("connectSQL.php");
	$sql_1= "SELECT * FROM products WHERE proId = ?";
	$findProd= $pdo->prepare($sql_1);
	$findProd->bindValue("1", $proId);
	$findProd->execute();
	$prodInfo= $findProd->fetch(PDO::FETCH_ASSOC);

	if(count($_SESSION["cart"][$proId]) == 0){
		$_SESSION["cart"][$proId]["proName"]= $prodInfo["proName"];
		$_SESSION["cart"][$proId]["proPrice"]= $prodInfo["proPrice"];
		$_SESSION["cart"][$proId]["proImg"]= $prodInfo["proImg"];
		$_SESSION["cart"][$proId]["quantity"]= $quantity;

		echo "
			<script>
				history.go(-1);
			</script>
		";		
	}else{
		$_SESSION["cart"][$proId]["quantity"]= $_SESSION["cart"][$proId]["quantity"] + $quantity;
		echo "
			<script>
				history.go(-1);
			</script>
		";	
	}



} catch (PDOException $ex) {
	echo "資料庫操作失敗，原因: ", $ex->getMessage(), "<br>";
	echo "行號: ", $ex->getLine(), "<br>";
}
?>