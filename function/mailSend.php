<?php
error_reporting(E_ALL || ~E_NOTICE);
require_once("connectSQL.php");

if(isset($_POST["mailSource"]) && ($_POST["mailSource"]) != ""){
	$mailSource = $_POST["mailSource"];
}

switch ($mailSource) {
	case 'newMail':
		if(isset($_POST["mailTo"]) && ($_POST["mailTo"]) != ""){
			$mailTo = $_POST["mailTo"];
		}
		if(isset($_POST["mailFrom"]) && ($_POST["mailFrom"]) != ""){
			$mailFrom = $_POST["mailFrom"];
		}
		if(isset($_POST["mailInfo"]) && ($_POST["mailInfo"]) != ""){
			$mailInfo = nl2br($_POST["mailInfo"]);
		}
		if(isset($_POST["mailId"]) && ($_POST["mailId"]) != ""){
			$mailId = $_POST["mailId"];
		}

		$mailDate = date("y-m-d");

		$mailInputQuery = "INSERT INTO mail (mailTo,mailFrom,mailInfo,mailDate) VALUES (:mailTo,:mailFrom,:mailInfo,:mailDate)";
		$mailInputRec = $pdo->prepare($mailInputQuery);
		$mailInputRec->bindValue(":mailTo",$mailTo);
		$mailInputRec->bindValue(":mailFrom",$mailFrom);
		$mailInputRec->bindValue(":mailInfo",$mailInfo);
		$mailInputRec->bindValue(":mailDate",$mailDate);
		$mailInputRec->execute();

		$newConverQuery = "SELECT count(*) FROM mail WHERE mailFrom = '$mailTo' AND mailTo = '$mailFrom'";
		$newConverRec = $pdo->prepare($newConverQuery);
		$newConverRec->execute();
		$newConverCount = $newConverRec->fetchColumn();

		

		if($newConverCount == 0){
			$newConverInsertQuery = "INSERT INTO mail (mailTo,MailFrom,mailInfo,mailDate) VALUES ('".$mailFrom."','".$mailTo."','forNewConverIsSettingForHiddenDoNotShowOnTheList','".$mailDate."')";
			$newConverInsertRec = $pdo->query($newConverInsertQuery);
		}

		echo json_encode(array('status'=>'success'));

		break;
	
	case 'reMail':
		
		if(isset($_POST["mailTo"]) && ($_POST["mailTo"]) != ""){
		$mailTo = $_POST["mailTo"];
		}
		if(isset($_POST["mailFrom"]) && ($_POST["mailFrom"]) != ""){
			$mailFrom = $_POST["mailFrom"];
		}
		if(isset($_POST["mailInfo"]) && ($_POST["mailInfo"]) != ""){
			$mailInfo = nl2br($_POST["mailInfo"]);
		}
		if(isset($_POST["mailId"]) && ($_POST["mailId"]) != ""){
			$mailId = $_POST["mailId"];
		}


		$mailDate = date("y-m-d");

		$mailInputQuery = "INSERT INTO mail (mailTo,mailFrom,mailInfo,mailDate) VALUES (:mailTo,:mailFrom,:mailInfo,:mailDate)";
		$mailInputRec = $pdo->prepare($mailInputQuery);
		$mailInputRec->bindValue(":mailTo",$mailTo);
		$mailInputRec->bindValue(":mailFrom",$mailFrom);
		$mailInputRec->bindValue(":mailInfo",$mailInfo);
		$mailInputRec->bindValue(":mailDate",$mailDate);
		$mailInputRec->execute();

		echo json_encode(array('status'=>'success'));

		break;
		
}
	



?>