<?php
require_once("connectSQL.php");

if(isset($_POST["stars"]) && ($_POST["stars"]) != ""){
	$stars = $_POST["stars"];
}
if(isset($_POST["commentTitle"]) && ($_POST["commentTitle"]) != ""){
	$mesTitle = nl2br($_POST["commentTitle"]);
}
if(isset($_POST["commentContent"]) && ($_POST["commentContent"]) != ""){
	$mesInfo = nl2br($_POST["commentContent"]);
}
if(isset($_POST["proId"]) && ($_POST["proId"]) != ""){
	$proId = $_POST["proId"];
}
if(isset($_POST["memAccount"]) && ($_POST["memAccount"]) != ""){
	$memAccount = $_POST["memAccount"];
}

$mesDate = date("y-m-d");


$mesInputQuery = "INSERT INTO message (proId,memAccount,mesTitle,mesInfo,mesDate,stars) VALUES (:proId,:memAccount,:mesTitle,:mesInfo,:mesDate,:stars)";
$mesInputRec = $pdo->prepare($mesInputQuery);
$mesInputRec->bindValue(":proId",$proId);
$mesInputRec->bindValue(":memAccount",$memAccount);
$mesInputRec->bindValue(":mesTitle",$mesTitle);
$mesInputRec->bindValue(":mesInfo",$mesInfo);
$mesInputRec->bindValue(":mesDate",$mesDate);
$mesInputRec->bindValue(":stars",$stars);
$mesInputRec->execute();

header("location: ../productIntro.php?proId=$proId");

?>