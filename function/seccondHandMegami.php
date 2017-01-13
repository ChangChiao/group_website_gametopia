<?php
header("Content-Type: text/html; charset=utf-8");
error_reporting(E_ALL || ~E_NOTICE);
require_once("connectSQL.php");

if(isset($_POST["gameType"]) && ($_POST["gameType"]) != ""){
	$gameType = $_POST["gameType"];
}
if(isset($_POST["consoleResult"]) && ($_POST["consoleResult"]) != ""){
	$consoleResult = $_POST["consoleResult"];
}


$megamiQuery = "SELECT * FROM products WHERE proSeries LIKE '%$consoleResult%' AND proClass LIKE '%$gameType%' AND proType = '二手' ORDER BY RAND() LIMIT 1";
$megamiRec = $pdo->query($megamiQuery);
$megamiRow = $megamiRec->fetch(PDO::FETCH_ASSOC);

$itemInfo = array(proId=>$megamiRow["proId"],
				  proImg=>$megamiRow["proImg"],
				  proPic01=>$megamiRow["proPic01"],
				  proPic02=>$megamiRow["proPic02"],
				  proPic03=>$megamiRow["proPic03"],
				  proPrice=>$megamiRow["proPrice"],
				  proInfo=>$megamiRow["proInfo"],
				  proSeries=>$megamiRow["proSeries"],
				  proClass=>$megamiRow["proClass"],
				  seller=>$megamiRow["seller"],
				  proName=>$megamiRow["proName"]);


echo json_encode(array('status'=>'success','result'=>$itemInfo,'SQL'=>$megamiQuery));


?>