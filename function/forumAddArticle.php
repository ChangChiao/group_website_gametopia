<?php 
	ob_start();
	session_start();
	try{
		require_once("connectSQL.php");
		$sql = 'INSERT INTO comments (memAccount, comPlatform, comCategory, comTitle, comContent, comDate, lastReply) VALUES (:memberAcc, :platform, :category, :artTitle, :artContent, :comDate, :lastReply)';

		$comDate = date("y-m-d");

		$stmt = $pdo->prepare( $sql );
		 //  (memAccount, comPlatform, comCategory, comTitle, comContent, comDate, lastReply)
		$stmt->bindValue(":memberAcc", $_SESSION["GTopiaAccount"]);
		$stmt->bindValue(":platform", $_REQUEST['platform']);
		$stmt->bindValue(":category", $_REQUEST['category']);
		$stmt->bindValue(":artTitle", $_REQUEST['artTitle']);
		$stmt->bindValue(":artContent", $_REQUEST['artContent']);
		$stmt->bindValue(":comDate", $comDate);
		$stmt->bindValue(":lastReply", $comDate);

		$stmt->execute();
		echo "<script>alert('發表成功');</script>";
		header("Refresh:0;url=../forum.php?platform={$_REQUEST["platform"]}");
	}catch(PDOException $e){
		echo "資料庫操作錯誤: ", $e.getMessage(), "<br>";
		echo "行號: ", $e.getLine(), "<br>";
	}
?>