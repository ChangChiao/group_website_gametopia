<?php
ob_start();
session_start();
require_once("connectSQL.php");
?>
<?php
if(isset($_GET["logout"]) && ($_GET["logout"]) == 'true'){
	unset($_SESSION["GTopiaAccount"]);
	unset($_SESSION["GTPotiaMemLevel"]);
	echo "
		<script>
			location.href='index.php';
		</script>
	";
}
?>
<?php
if(!isset($_SESSION["GTopiaAccount"]) || !isset($_SESSION["GTopiaMemLevel"])){
	$memAccount = "";
?>	
	
	<script type="text/javascript">
	$(document).ready(function(){
		
		$('.mask').hide();
		$('.m-mask').hide();

		$('#login').click(function(){
			
			$('#login').unbind('click', false);
			$('#bs-lightbox1').css('height','400px').css('padding-top','70px').css('z-index',999);
			$('.mask').show();
			$('#signup').bind('click', false);

		});


		$('#signup').click(function(){
			
			$('#signup').unbind('click', false);
			$('#bs-lightbox2').css('height','700px').css('padding-top','20px').css('z-index',999);
			$('.mask').show();
			$('#login').bind('click', false);

		});

		$('.close').click(function(){
			$('.bs-lightbox').css('height','0px').css('padding-top','0px');
			$('#m-all-lightbox1').css('height',0).css('padding-top','0px');
			$('#m-all-lightbox2').css('height',0).css('padding-top','0px');
			$('#uploadFile').val('');
			$('.preview').attr('src','images/1472926249_user.png');
			$('input[type="file"]').val('');
			$('input[type="text"]').val('');
			$('input[type="email"]').val('');
			$('input[type="password"]').val('');
			$('input[type="submit"]').prop('disabled',false);
			$('.mask').hide();
			$('.m-mask').hide();
		});


		$('#m-un-member').click(function(){
			 $('#m-all-lightbox1').css('height','180px').css('padding-top','30px').css('z-index',999);
			 $('.m-mask').show();
		});

		$('.login-btn').click(function(){
			$('#m-all-lightbox1').css('height',0).css('padding-top','0px');
			$('#bs-lightbox1').css('height','450px').css('padding-top','70px').css('z-index',999).show();
			$('.mask').show();
		});

		$('#trans-to-signup').click(function(){
			$('#bs-lightbox1').hide();
			$('#bs-lightbox2').css('height','700px').css('padding-top','20px').css('z-index',999).show();
			$('.mask').show();
		});

		
		// $('.login-btn').click(function(){
		// 	$(this).css('background-color','#f00');
		// });

// ==========================圖片預覽=========================
		function preview(input) {
 
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('.preview').attr('src', e.target.result);
               
            }
 
            reader.readAsDataURL(input.files[0]);
        	}
    	}
 
    	$("body").on("change", ".myFile", function (){
        	preview(this);
    	})

 

    	// ＝＝＝＝＝＝＝＝＝＝＝＝改變fileinput樣式＝＝＝＝＝＝＝＝＝＝＝＝＝＝
  //   	document.getElementById("uploadBtn").onchange = function () {
		//     document.getElementById("uploadFile").value = this.value;
		// };	

// ======================= 表單驗證====================================
		//登入驗證
		// function checkLogInfo(){
		// 		var memid = $('#log-memId').val();
		// 		var mempsw = $('#log-memPsw').val();

		// 		if(!memid || !mempsw){
		// 			window.alert('您必須填寫所有的欄位');
		// 		}else{
		// 			$('form').submit();
		// 		}
		// }
		
		//註冊驗證
		function checkInfo(){
				var input_text = $('input[type="text"]').val();
				var input_psw = $('input[type="password"]').val();
				var input_email = $('input[type="email"]').val();


				var sign_id = $('#signUp-memId').val()
				var sign_name = $('#nickname').val();
				var sign_psw = $('#sign-memPsw').val()
				var sign_spsw = $('#memPsw-confirm').val()
				var sign_email =  $('#email').val();

				// var emailCheck = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				// $('input[type="submit"]').prop('disabled', false);

				if(!sign_id || !sign_name  || !sign_psw || !sign_spsw || !sign_email ){
					// $('input[type="submit"]').prop('disabled', true);
					window.alert('您有欄位尚未填寫');
					return;

				}else if($('#signUp-memId').val().length < 6){

					window.alert('帳號不得少於6個字');
					return;	
				
				}else if($('#signUp-memId').val().length > 10){

					window.alert('帳號不得超過10個字');
					return;	
				}else if($('#nickname').val().length > 10){

					window.alert('暱稱不得超過10個字');
					return;	
				}else if($('#sign-memPsw').val().length < 6 ){

					window.alert('密碼不得少於6個字');
					return;	
				}else if($('#sign-memPsw').val().length > 12 ){

					window.alert('密碼不得大於12個字');
					return;	
				
				}else if($('#sign-memPsw').val()!= $('#memPsw-confirm').val()){

					window.alert('您的確認密碼不一致');
					return;	
				}else if(sign_email.search(/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/) ==-1 ){

					window.alert('您的信箱有誤');
					return;	
				}else{

					// $('input[type="submit"]').prop('disabled', false);
					$('form').submit();	
				}


		

		}


		$('.sign-btn').on('click', function(event) {
      		// $('input[type="submit"]').prop('disabled', false);
      		event.preventDefault();
      		checkInfo();
      		console.log('ok2');
    	});


		

	}); //ready






	
	</script>	



<div class="desk-bs">
	<div class="bs-member-zone">
		
		<div class="bs-member">
		    <img src="images/1472926249_user.png">
			<a id="login" href="#">登入 /</a>  

			<a id="signup" href="#">註冊</a>
		</div>
		<?php $cartNum = count($_SESSION['cart']); ?>
		<div class="bs-member" id="cart">
			<img src="images/1477771908_shopping-cart.png" id="cart_desk_img" onclick="location.href='cartSessionList.php'">
			<a id="cart" href="cartSessionList.php">(<?php echo $cartNum; ?>)</a>	
		</div>

		
	</div>
</div>

<div class="mobile-bs">

			
		<a id="m-un-member" href="#">
			<img src="images/1472926249_user.png">
		</a>	

		
		<div class="m-mask"></div>
		<div class="m-all-lightbox" id="m-all-lightbox1">
			<div class="m-bs-btn-all">	
				<div class="login-btn m-bs-btn">
					會員登入
				</div>
				<div class="shoppingCart-btn m-bs-btn" onclick="location.href='cartSessionList.php'">
					購物清單
				</div>
			</div>
			<div class="close">
				<img src="images/circle-close.png">
			</div>	
		</div>	

</div>



	<div class="mask"></div>
	<div class="bs-lightbox" id="bs-lightbox1">
		
		<div class="bs-content bs-content1">
			<h3>會員登入</h3>
			<form action="function/sessionMember.php" method="post">
				<table>
					<tr>
						<td class="adjust">
							<label for="memId">帳號</label>
							<input type="text" id="log-memId" placeholder="請輸入帳號" name="memAccount">

						</td>
					</tr>
					<tr class="adjust">
						<td class="adjust">
							<label for="log-memPsw">密碼</label>
							<input type="password" id="log-memPsw" placeholder="請輸入密碼" name="memPassword">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" value="登入" class="log_submit">
						</td>
						
					</tr>
					<tr>
						<td colspan="2">
							<a href="#">忘記密碼</a>
							<a id="trans-to-signup" href="#">註冊帳號</a>
						</td>
						
					</tr>

					
						
							
						
						
					
				</table>
			</form>
		</div>

		<div class="close">
			<img src="images/circle-close.png">
		</div>
	</div>

	<div class="bs-lightbox" id="bs-lightbox2">
		
		<div class="bs-content bs-content2">
			<h3>註冊會員</h3>
			<form action="function/memberRegistered.php" method="post" enctype="multipart/form-data">
				<table>
					<tr>
						<td class="adjust">
							<!--<label for="myFile">上傳大頭照</label>-->
							<h4>上傳大頭照</h4>
							<div class="img_preview">
        						<img class="preview" src="images/1472926249_user.png">
        					</div>	

        					<!--<input id="uploadFile" placeholder="Choose File" disabled="disabled" />--> 
        					<div class="fileUpload btn btn-primary">
							    <span>選擇檔案</span>
							    <input id="uploadBtn" type="file" class="myFile" name="memImg">
							</div>	

							
							
						</td>
					</tr>
					<tr>
						<td class="adjust">
							<label for="signUp-memId">帳號</label>
							<input type="text" id="signUp-memId" placeholder="請輸入帳號" name="memAccount" required>

						</td>
					</tr>
					<tr>
						<td class="adjust">
							<label for="nickname">暱稱</label>
							<input type="text" id="nickname" placeholder="請輸入暱稱" name="memNickName" required>

						</td>
					</tr>
					<tr>
						<td class="adjust">
							<label for="sign-memPsw">密碼</label>
							<input type="password" id="sign-memPsw" placeholder="請輸入密碼" name="memPassword" required>
						</td>
					</tr>
					<tr>
						<td class="adjust">
							<label for="memPsw-confirm">密碼確認</label>
							<input type="password" id="memPsw-confirm" placeholder="請再次輸入密碼" required>
						</td>
					</tr>
					<tr>
						<td class="adjust">
							<label for="email">信箱</label>
							<input type="email" id="email" placeholder="請輸入信箱" name="memEmail" required>
						</td>
					</tr>

					<tr>
						<td colspan="2">
							<input type="submit" name="" value="註冊" class="sign-btn">
						</td>
						
					</tr>
		
				</table>
			</form>
		</div>

		<div class="close">
			<img src="images/circle-close.png">
		</div>
	</div>










<?php } ?>
<?php
if(isset($_SESSION["GTopiaAccount"]) && ($_SESSION["GTopiaMemLevel"]) == "member"){
	$memAccount = $_SESSION["GTopiaAccount"];
	$memQuery = "SELECT * FROM memberdata WHERE memAccount = '$memAccount'";
	$memRec = $pdo->query($memQuery);
	$memRow = $memRec->fetch(PDO::FETCH_ASSOC);
?>

	
	<script>
		$(document).ready(function(){
			
			$('.mask').hide();

			$('#m-lo-member').click(function(){
				$('#m-all-lightbox2').css('height','250px').css('padding-top','18px').css('z-index',999);
			 	$('.mask').show();
			});
	 		

			$('.logout-btn').click(function(){
				$('#m-all-lightbox2').css('height','0').css('padding-top','0px');
				$('.mask').hide();
			});

			$('.close').click(function(){
				$('#m-all-lightbox2').css('height','0').css('padding-top','0px');
				$('.mask').hide();
			});

		});
	</script>	
	
	<?php
		//購物車數量
		$cartNum = count($_SESSION['cart']);

		//未讀信件數量
		$unreadNumQuery = "SELECT * FROM mail WHERE mailTo = '$memAccount' AND status = '未讀'";
		$unreadNumRec = $pdo->query($unreadNumQuery);
		$unreadNum = $unreadNumRec->rowCount();
	?>

	<div class="bs-lo-member-zone">
		<div class="bs-lo-member" id="mem">
		    <img src="images/1472926249_user.png">
			<a href="member.php">Hi, <?php echo $memRow["memNickName"]; ?></a>
			<a href="<?php echo $_SERVER["PHP_SELF"]; ?>?logout=true	">登出</a>
		</div>
		<div class="bs-lo-member" id="cart">
			<img src="images/1477771908_shopping-cart.png" id="cart_login_btn" onclick="location.href='cartSessionList.php'">
			<a href="cartSessionList.php">(<?php echo $cartNum; ?>)結帳</a>	
		</div>
		<div class="bs-lo-member" id="letter">
			<img src="images/1477771936_Mail.png" id="mail_login_btn" onclick="location.href='mail_1.php'">
			<a href="mail_1.php">(<?php echo $unreadNum; ?>)</a>	
		</div>
	</div>


	<div class="m-bs-lo-member-zone">


		<a id="m-lo-member" href="#">
			<img  src="images/1472926249_user.png">
		</a>	

		
		<div class="mask"></div>
		<div class="m-all-lightbox" id="m-all-lightbox2" >
			
			<div class="m-bs-btn-all">	
				<div class="shoppingCart-btn m-bs-btn" onclick="location.href='member.php'">
					會員專區
				</div>
				<div class="shoppingCart-btn m-bs-btn" onclick="location.href='cartSessionList.php'">
					購物清單
				</div>
				<div class="m-lo-letter m-bs-btn" onclick="location.href='mail_1.php'">
					站內信
				</div>
				<div class="logout-btn m-bs-btn">
					<a href="<?php echo $_SERVER["PHP_SELF"]; ?>?logout=true	">登出</a>
				</div>
			</div>
			<div class="close" >
				<img src="images/circle-close.png">
			</div>	
		</div>	
		
	</div>
<?php } ?>