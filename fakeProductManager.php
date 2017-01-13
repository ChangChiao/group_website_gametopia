<?php
require_once("function/connectSQL.php");
?>
<?php
$proQuery = "SELECT * FROM products ORDER BY id DESC";
$proRec = $pdo->query($proQuery);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.productInput{
			width: 100%;
		}
		.holder img,.holder p{
			float: left;
			margin: 0px 5px 0px;
		}
		.holder img{
			width: 100%;
			height: 100%;
			max-height: 150px;
			max-width: 150px;
		}
		.holder{
			width: 95%;
			border:1px solid black;
		}
	</style>
</head>
<body>
	

	<div class="productInput">
		<form action="function/productInput.php" method="post" enctype="multipart/form-data">
			<input type="text" name="proName"> 商品名稱
			<select name="proSeries" id="proSeries"> 商品主機
				<option value="PS4">PS4</option>
				<option value="XBOX">XBOX</option>
				<option value="Wii">Wii</option>
				<option value="掌機">掌機</option>
				<option value="PC">PC</option>
			</select>
			<select name="proClass" id="proClass"> 商品類別
				<option value="角色扮演">角色扮演</option>
				<option value="動作">動作</option>
				<option value="射擊">射擊</option>
				<option value="冒險">冒險</option>
				<option value="策略模擬">策略模擬</option>
				<option value="其他">其他</option>
			</select>
			<input type="file" name="proImg"> 商品主圖
			<input type="file" name="proPic01"> 商品附圖 01
			<input type="file" name="proPic02"> 商品附圖 02
			<input type="file" name="proPic03"> 商品附圖 03
			<input type="text" name="proPrice"> 商品售價
			<textarea name="proInfo" cols="30" rows="10"></textarea> 商品介紹
			<button type="submit">確認送出</button> 
		</form>
	</div>
	
	<?php  
	while($proRow = $proRec->fetch(PDO::FETCH_ASSOC)){
	?>
		<div class="holder">
			<img src="<?php echo $proRow["proImg"]; ?>">
			<p><?php echo $proRow["proName"]; ?></p>
			<p><?php echo $proRow["proInfo"]; ?></p>
			<p>$ <?php echo $proRow["proPrice"]; ?></p>
		</div>
	<?php } ?>

</body>
</html>