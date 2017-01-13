<?php
ob_start();
session_start();
require_once("connectSQL.php");
include("sessionMember.php");

if(isset($_POST["comTitle"]) && ($_POST["comTitle"]) != ""){
	$comTitle = $_POST["comTitle"];
}
if(isset($_POST["comType"]) && ($_POST["comType"]) != ""){
	$comType = $_POST["comType"];
}
if(isset($_POST["comClass"]) && ($_POST["comClass"]) != ""){
	$comClass = $_POST["comClass"];
}
if(isset($_POST["comInfo"]) && ($_POST["comInfo"]) != ""){
	$comInfo = nl2br($_POST["comInfo"]);
}
$comDate = date("y-m-d");
$memAccount = $_SESSION["GTopiaAccount"];
$latestReply = date("y-m-d");
$clickNum = 0;


$comQuery = "INSERT INTO command_title (comType,comClass,comTitle,memAccount,comInfo,comDate,clickNum,latestReply) VALUES (:comType,:comClass,:comTitle,:memAccount,:comInfo,:comDate,:clickNum,:latestReply)";
$comRec = $pdo->prepare($comQuery);
$comRec->bindValue(":comType",$comType);
$comRec->bindValue(":comClass",$comClass);
$comRec->bindValue(":comTitle", $comTitle);
$comRec->bindValue(":memAccount",$memAccount);
$comRec->bindValue(":comInfo",$comInfo);
$comRec->bindValue(":comDate",$comDate);
$comRec->bindValue(":clickNum",$clickNum);
$comRec->bindValue(":latestReply",$latestReply);
$comRec->execute();

header("location: ../fakeCommandTitle.php");



?>