<?php

require_once("connectSQL.php");

if(isset($_POST["proName"]) && ($_POST["proName"]) != ""){
	$proName = $_POST["proName"];
}
if(isset($_POST["proSeries"]) && ($_POST["proSeries"]) != ""){
	$proSeries = $_POST["proSeries"];
}
if(isset($_POST["proClass"]) && ($_POST["proClass"]) != ""){
	$proClass = $_POST["proClass"];
}
if(isset($_FILES["proImg"]["name"]) && ($_FILES["proImg"]["name"]) != ""){

	$proImg_error = $_FILES["proImg"]["error"];
	$proImg_type = $_FILES["proImg"]["type"];
	$proImg_size = $_FILES["proImg"]["size"];
	$proImg_name = $_FILES["proImg"]["name"];
	$proImg_tmp = $_FILES["proImg"]["tmp_name"];

	move_uploaded_file($proImg_tmp, '../img/'.$proImg_name);
	$proImg = "img/$proImg_name";

}
if(isset($_FILES["proPic01"]["name"]) && ($_FILES["proPic01"]["name"]) != ""){

	$proPic01_error = $_FILES["proPic01"]["error"];
	$proPic01_type = $_FILES["proPic01"]["type"];
	$proPic01_size = $_FILES["proPic01"]["size"];
	$proPic01_name = $_FILES["proPic01"]["name"];
	$proPic01_tmp = $_FILES["proPic01"]["tmp_name"];

	move_uploaded_file($proPic01_tmp, '../img/'.$proPic01_name);
	$proPic01 = "img/$proPic01_name";

}
if(isset($_FILES["proPic02"]["name"]) && ($_FILES["proPic02"]["name"]) != ""){

	$proPic02_error = $_FILES["proPic02"]["error"];
	$proPic02_type = $_FILES["proPic02"]["type"];
	$proPic02_size = $_FILES["proPic02"]["size"];
	$proPic02_name = $_FILES["proPic02"]["name"];
	$proPic02_tmp = $_FILES["proPic02"]["tmp_name"];

	move_uploaded_file($proPic02_tmp, '../img/'.$proPic02_name);
	$proPic02 = "img/$proPic01_name";
	
}
if(isset($_FILES["proPic03"]["name"]) && ($_FILES["proPic03"]["name"]) != ""){

	$proPic03_error = $_FILES["proPic03"]["error"];
	$proPic03_type = $_FILES["proPic03"]["type"];
	$proPic03_size = $_FILES["proPic03"]["size"];
	$proPic03_name = $_FILES["proPic03"]["name"];
	$proPic03_tmp = $_FILES["proPic03"]["tmp_name"];

	move_uploaded_file($proPic03_tmp, '../img/'.$proPic03_name);
	$proPic03 = "img/$proPic01_name";
	
}
if(isset($_POST["proPrice"]) && ($_POST["proPrice"]) != ""){
	$proPrice = $_POST["proPrice"];
}
if(isset($_POST["proInfo"]) && ($_POST["proInfo"]) != ""){
	$proInfo = nl2br($_POST["proInfo"]);
}

$proQuery = "SELECT id FROM products ORDER BY id DESC LIMIT 0,1";
$proRec = $pdo->query($proQuery);
$proRow = $proRec->fetch(PDO::FETCH_ASSOC);
$x = proRow["id"] + 1;
$num = str_pad($x,5,'0',STR_PAD_LEFT);
$proId = 'PD'.$num;

$proInputQuery = "INSERT INTO products (proId,proName,proSeries,proClass,proImg,proPic01,proPic02,proPic03,proPrice,proInfo) VALUES (:proId,:proName,:proSeries,:proClass,:proImg,:proPic01,:proPic02,:proPic03,:proPrice,:proInfo)";
$proInputRec = $pdo->prepare($proInputQuery);
$proInputRec->bindValue(":proId",$proId);
$proInputRec->bindValue(":proName",$proName);
$proInputRec->bindValue(":proSeries",$proSeries);
$proInputRec->bindValue(":proClass",$proClass);
$proInputRec->bindValue(":proImg",$proImg);
$proInputRec->bindValue(":proPic01",$proPic01);
$proInputRec->bindValue(":proPic02",$proPic02);
$proInputRec->bindValue(":proPic03",$proPic03);
$proInputRec->bindValue(":proPrice",$proPrice);
$proInputRec->bindValue(":proInfo",$proInfo);
$proInputRec->execute();


echo "
	<script>
		history.go(-1);
	</script>
";

?>