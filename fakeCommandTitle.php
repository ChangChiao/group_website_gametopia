<?php
require_once("function/connectSQL.php");

$comQuery = "SELECT * FROM command_title ORDER BY comId DESC";
$comRec = $pdo->query($comQuery);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.title p{
			float: left;
			margin:0px 15px 0px;
		}
		.title{
			height: 100px;
			margin-top: 10px;
			border:1px solid black;
		}
	</style>
</head>
<body>
	<div class="newCommand">
		<form action="function/insertCommandTitle.php" method="post">
			<select name="comType">
				<option value="XBOX">XBOX</option>
				<option value="PS4">PS4</option>
				<option value="Wii">Wii</option>
				<option value="PC">PC</option>
				<option value="掌機">掌機</option>
			</select>
			<select name="comClass">
				<option value="閒聊">閒聊</option>
				<option value="攻略">攻略</option>
				<option value="情報">情報</option>
				<option value="公告">公告</option>
				<option value="其他">其他</option>
			</select>
			<input type="text" name="comTitle">
			<textarea name="comInfo" cols="30" rows="10"></textarea>
			<button type="submit">Send</button>
		</form>
	</div>
	<div class="list">
		<?php
		while($comRow = $comRec->fetch(PDO::FETCH_ASSOC)){
		?>
		<div class="title" style="cursor:pointer;" 
			 onclick="location.href='fakeCommandInside.php?comId=<?php echo $comRow["comId"]; ?>'">
			<p><?php echo $comRow["comType"]; ?></p>
			<p><?php echo $comRow["comTitle"]; ?></p>
			<p><?php echo $comRow["comDate"]; ?></p>
			<p>memAccount</p>
			<p>LastReply</p>
		</div>
		<?php } ?>
	</div>
</body>
</html>