<?php
ob_start();
session_start();

if(isset($_GET["proId"]) && ($_GET["proId"]) != ""){
	$proId = $_GET["proId"];
}
if(isset($_GET["delete"]) && ($_GET["delete"]) == "true"){

		unset($_SESSION["cart"][$proId]);
		
		echo "
			<script>
				location.href='../cartSessionList.php';
			</script>
		";

}


?>