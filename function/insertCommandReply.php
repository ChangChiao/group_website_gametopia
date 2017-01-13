<?php
ob_start();
session_start();
require_once("connectSQL.php");

$comId = $_GET["comId"];

if(isset($_POST["replyInfo"]) && ($_POST["replyInfo"]) != ""){
	$replyInfo = $_POST["replyInfo"];
}

$memAccount = $_SESSION["GTopiaAccount"];

$replyDate = date("y-m-d");

$latestReply = date("y-m-d");

$updateReplyDate = "UPDATE command_title SET latestReply = '$latestReply'";
$updateReplyRec = $pdo->query($updateReplyDate);

$comReplyQuery = "INSERT INTO commandReply (comId,memAccount,replyInfo,replyDate) VALUES (:comId,:memAccount,:replyInfo,:replyDate)";
$comReplyRec = $pdo->prepare($comReplyQuery);
$comReplyRec->bindValue(":comId",$comId);
$comReplyRec->bindValue(":memAccount",$memAccount);
$comReplyRec->bindValue(":replyInfo",$replyInfo);
$comReplyRec->bindValue(":replyDate",$replyDate);
$comReplyRec->execute();

header("location: ../fakeCommandInside.php?comId=$comId");
?>