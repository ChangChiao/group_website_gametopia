<?php
session_start();
?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>結帳資訊</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" type="css/footer.css">
		<link rel="stylesheet" href="css/orderDataInput.css">
		<link rel="stylesheet" type="text/css" href="css/nav.css">
		<script src="js/jquery-3.1.0.min.js"></script>
		<script src="js/header.js"></script>


	</head>
	<body>
			
		<?php
		include("function/header.php");
		include("function/memberBarSwitcher.php");
		
		?>
		
		<!-- =================================> -->

		<div class="contener
					col-lg-6 col-lg-offset-3">

			<div class="stepIcon">
				<div class="icon01"></div>
				<div class="icon02"></div>
				<div class="icon03"></div>
			</div>
			
			<div class="clearFix"></div>

			<div class="memberName">
				<p>親愛的<span>OOO</span>會員您好 :</p>
			</div>

			<div class="cutLine">
				<div>收件人資訊</div>
			</div>
			
			<form action="" method="post">
				<div class="addressInfo">
					
						<label for="orderContecter">收件人</label>
						<input type="text" name="orderContecter" id="orderContecter">
						<label for="contecterPhone">聯絡電話</label>
						<input type="text" name="contecterPhone" id="contecterPhone">
						<label for="contecterAddress">收件地址</label>
						<select name="cityCountry" id="cityCountry">
							<option value="台北市">台北市</option>
							<option value="新北市">新北市</option>
							<option value="桃園市">桃園市</option>
							<option value="台中市">台中市</option>
							<option value="台南市">台南市</option>
							<option value="高雄市">高雄市</option>
							<option value="基隆市">基隆市</option>
							<option value="新竹市">新竹市</option>
							<option value="嘉義市">嘉義市</option>
							<option value="新竹縣">新竹縣</option>
							<option value="苗栗縣">苗栗縣</option>
							<option value="彰化縣">彰化縣</option>
							<option value="南投縣">南投縣</option>
							<option value="雲林縣">雲林縣</option>
							<option value="嘉義縣">嘉義縣</option>
							<option value="屏東縣">屏東縣</option>
							<option value="宜蘭縣">宜蘭縣</option>
							<option value="花蓮縣">花蓮縣</option>
							<option value="台東縣">台東縣</option>
							<option value="澎湖縣">澎湖縣</option>
							<option value="金門縣">金門縣</option>
							<option value="連江縣">連江縣</option>
						</select>
						<input type="text" name="address" id="address">
					
				</div>
				
				<div class="payingWay">
					
					<div class="creditCard">
						<input type="checkbox" name="creditCard" value="信用卡">
						<label for="creditCard">信用卡一次付清</label>
					</div>
					<div class="cardInfo">
						<div class="cardNum">
							<label for="cardNumber">信用卡卡號 :</label>
							<input type="text" name="card01To04">
							<span><input type="text" name="card05To08"></span>
							<span><input type="text" name="card09To12"></span>
							<span><input type="text" name="card13To16"></span>
						</div>

						<div class="dayLimit">
							<label for="dateLimit">有效日期 :</label>
							<select name="monthLimit" id="monthLimit">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
							<label for="monthLimit">月</label>
						
						
							<select name="dayLimit" id="dayLimit">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
							<label for="dayLimit">日</label>

							<label for="saftyCode">安全碼 :</label>
							<input type="text" name="saftyCode">
						</div>

					</div>
					

					<div class="warning">
						<p>為了保障您的權益，持卡人需與會員帳戶相同gametopia將進行消費確認並保留出貨權力</p>
					</div>

					<div class="atmWay">
						<label for="atm">ATM轉帳</label>
						<input type="checkbox" name="atm" id="atm">
					</div>
					<div class="atmInfo">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, commodi quos ullam tempore atque laudantium repellendus quas in excepturi, delectus sunt cum obcaecati! Dolores consequuntur consectetur nulla, laudantium amet odio.</p>
					</div>

				</div>

				<div class="invoice">
					<div class="invoiceInfo">
						<div>發票資訊</div>
					</div>
				
					<div>
						<input type="radio" name="invoiceWay" id="donate">
						<label for="donate">捐贈發票</label>
					</div>
					<div>
						<input type="radio" name="invoiceWay" id="two">
						<label for="two">兩聯式發票</label>	
					</div>
					<div>
						<input type="radio" name="invoiceWay" id="three">
						<label for="three">三聯式發票</label>
					</div>
				</div>

				<div class="overAll">
					<span>本次消費總額</span>
					<span>$ 多少多少 元</span>
				</div>
			
				</div>
			</form>
		</div>

		
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<?php 

		include("function/footer.php");

	?>

	</body>
</html>
<script>
	
$("#atm").click(function(){
	$(".atmInfo").css("display","block");
})


</script>