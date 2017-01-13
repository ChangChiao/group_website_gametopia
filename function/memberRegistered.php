<?php
require_once("connectSQL.php");

if(isset($_POST["memAccount"]) && ($_POST["memAccount"]) != ""){
	$memAccount = $_POST["memAccount"];
}
if(isset($_POST["memPassword"]) && ($_POST["memPassword"]) != ""){
	$memPassword = $_POST["memPassword"];
}
if(isset($_FILES["memImg"]["name"]) && ($_FILES["memImg"]["name"]) != ""){

	$memImg_error = $_FILES["memImg"]["error"];
	$memImg_type = $_FILES["memImg"]["type"];
	$memImg_size = $_FILES["memImg"]["size"];
	$memImg_name = $_FILES["memImg"]["name"];
	$memImg_tmp = $_FILES["memImg"]["tmp_name"];

	move_uploaded_file($memImg_tmp, '../memImg/'.$memImg_name);
	$memImg = "memImg/$memImg_name";

}
if(isset($_POST["memEmail"]) && ($_POST["memEmail"]) != ""){
	$memEmail = $_POST["memEmail"];
}
if(isset($_POST["memNickName"]) && ($_POST["memNickName"]) != ""){
	$memNickName = $_POST["memNickName"];
}
$date = date("y-m-d");



$regMemQuery = "INSERT INTO memberdata (memAccount,memPassword,memImg,memEmail,memNickName,memResDate) VALUES (:memAccount,:memPassword,:memImg,:memEmail,:memNickName,:date)";
$regMemRec = $pdo->prepare($regMemQuery);
$regMemRec->bindValue(":memAccount",$memAccount);
$regMemRec->bindValue(":memPassword",$memPassword);
$regMemRec->bindValue(":memImg",$memImg);
$regMemRec->bindValue(":memEmail",$memEmail);
$regMemRec->bindValue(":memNickName",$memNickName);
$regMemRec->bindValue(":date",$date);
$regMemRec->execute();


echo "
	<script>
		history.go(-1);
	</script>
";

?>