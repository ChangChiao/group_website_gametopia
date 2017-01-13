<?php 
ob_start();
session_start();

$memAccount= $_SESSION["GTopiaAccount"];
$k= 1;
$STR= "";

if ($_GET['action']== 'plus') {
	if ( $_REQUEST['usedProdName'] != "" ) {
		$k= count($_SESSION['usedProd'])+1;
		$j= $k+1;
		while ($k>= 1) {
			if ($j-$k== 1) {
				$_SESSION['usedProd'][($k)]['name']= $_REQUEST['usedProdName'];
				$_SESSION['usedProd'][($k)]['series']= $_REQUEST['usedProdSeries'];
				$_SESSION['usedProd'][($k)]['class']= $_REQUEST['usedProdClass'];
				$_SESSION['usedProd'][($k)]['price']= $_REQUEST['usedProdPrice'];
				$_SESSION['usedProd'][($k)]['images']= $_REQUEST['usedProdImages'];
				$_SESSION['usedProd'][($k)]['info']= $_REQUEST['prodInfo'];
			}
			$img= explode('//', $_SESSION['usedProd'][($j-$k)]['images']);
			

			$STR.= '!__!usedprod'.($j-$k);
			$STR.= '!__!UP'.($j-$k);
			$STR.= '!__!'.($j-$k);
			$STR.= '!__!images/'.$img[0];
			$STR.= '!__!'.$_SESSION['usedProd'][($j-$k)]['name'];
			$STR.= '!__!'.$_SESSION['usedProd'][($j-$k)]['series'];
			$STR.= '!__!'.$_SESSION['usedProd'][($j-$k)]['class'];
			$STR.= '!__!NT$<span>'.$_SESSION['usedProd'][($j-$k)]['class'].'</span>';
			$STR.= '!__!'.$_SESSION['usedProd'][($j-$k)]['info'];
			$k--;
		}
	}else{
		
		if (isset($_SESSION['usedProd'])=== false) {
			$k= count($_SESSION['usedProd'])+1;
			$j= $k+1;
			while ( $k>= 1 ) {
				if (isset( $_SESSION['usedProd'][($j-$k)]['name'] )) {
					$img= explode('//', $_SESSION['usedProd'][($j-$k)]['images']);

					$STR.= '!__!usedprod'.($j-$k);
					$STR.= '!__!UP'.($j-$k);
					$STR.= '!__!'.($j-$k);
					$STR.= '!__!images/'.$img[0];
					$STR.= '!__!'.$_SESSION['usedProd'][($j-$k)]['name'];
					$STR.= '!__!'.$_SESSION['usedProd'][($j-$k)]['series'];
					$STR.= '!__!'.$_SESSION['usedProd'][($j-$k)]['class'];
					$STR.= '!__!NT$<span>'.$_SESSION['usedProd'][($j-$k)]['class'].'</span>';
					$STR.= '!__!'.$_SESSION['usedProd'][($j-$k)]['info'];
				}
				$k--;
			}
			if (isset( $_SESSION['usedProd'][($j-$k)]['name'] )=== false) {
				$STR= "false";
			}
		}else{
			$STR= "false";
		}
	}
		
}else if ($_REQUEST['action']== 'remove') {

		$k= $_REQUEST['deProd'];
		$removeObj= explode('a1a1a1', $k);var_dump($removeObj);
		$num= is_array($_SESSION['usedProd']) ? count($_SESSION['usedProd']) : 0;
		echo $num;
		$j= 0;
		foreach ($removeObj as $key => $value) {

			$_SESSION['usedProd'][$value-$j]= str_repeat('1',256);
			unset($_SESSION['usedProd'][$value-$j]);

			for ($i=$value-$j; $i < $num-$j-1; $i++) { 
				$_SESSION['usedProd'][$i]= $_SESSION['usedProd'][$i+1];
			}

			$_SESSION['usedProd'][$num-$j-1]= str_repeat('1',256);
			unset($_SESSION['usedProd'][$num-$j-1]);

			$j++;
		}
		if ( ( is_array($_SESSION['usedProd']) ? count($_SESSION['usedProd']) : 0 ) == 0) {
			$STR= "dropTable";
			unset($_SESSION['usedProd']);
		}
		$STR= "";

}else {
	if (isset($_SESSION['usedProd'])) {
		require_once("function/connectSQL.php");
		for ($i=1; $i <= count($_SESSION['usedProd']); $i++) {

			// sql 產生
			$sql= "INSERT INTO products VALUES (null"; 
			$sql.= ", UP". $memAccount. $i;
			$sql.= ", '二手'";
			$sql.= ", ". $memAccount. $_SESSION['usedProd'][$i]['name'];
			$sql.= ", ". $memAccount. $_SESSION['usedProd'][$i]['series'];
			$sql.= ", ". $memAccount. $_SESSION['usedProd'][$i]['class'];
			$images= explode('//', $_SESSION['usedProd'][$k]['images']);
			for ($j=0; $j < count($images) ; $j++) { 
				if ($j== 4) {
					// 只能放四張圖 Img, 01, 02, 03
					break;
				}
				$sql.= ", images/". $images[$j];
			}
			$sql.= ", ". $_SESSION['usedProd'][$k]['price'];
			$sql.= ", ". $_SESSION['usedProd'][$k]['info'];
			$sql.= ", ". $memAccount;
			$sql.= ", 0";
			$sql.= ", '上架')";

			// PDO statement
			$pdo->query($sql);
		}
		unset($_SESSION['usedProd']);
		$STR= "";
	}
		header("Location:usedProdPost.php");
}
		echo $STR;


 ?>