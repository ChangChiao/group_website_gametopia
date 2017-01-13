<?php
require_once("connectSQL.php");

//判別用初始值
$mesTitle = 1;
$mesInfo = 1;

if(isset($_POST["commentTitle"]) && ($_POST["commentTitle"]) != ""){
	$mesTitle = $_POST["commentTitle"];
}
if(isset($_POST["commentContent"]) && ($_POST["commentContent"]) != ""){
	$mesInfo = $_POST["commentContent"];
}
if(isset($_POST["memAccount"]) && ($_POST["memAccount"]) != ""){
	$memAccount = $_POST["memAccount"];
}
if(isset($_POST["proId"]) && ($_POST["proId"]) != ""){
	$proId = $_POST["proId"];
}
$mesDate = date("y-m-d");

//判別是否評分跟留言標題都有輸入
if($mesTitle != 1 && $mesInfo != 1){



}


?>