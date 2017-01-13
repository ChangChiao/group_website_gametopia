<?php
	$dsn = "mysql:host=localhost;port=3306;dbname=gametopia;charset=utf8";
	$user = "root";
	$password = "root";

	$pdo = new PDO($dsn,$user,$password);

	// $sql = "SELECT * FROM memberdata";
	// $memRec = $pdo->query($sql);
	// $memRow = $memRec->fetch(PDO::FETCH_ASSOC);

	// echo $memRow["memAccount"];
?>