<?php
ob_start();
session_start();
require_once("function/connectSQL.php");
error_reporting(E_ALL || ~E_NOTICE);
$memAccount = $_SESSION["GTopiaAccount"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml1">
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta http-equiv="Context-Type" content="text/html"; charset="utf-8" />
	<title>站內信</title>
	<link rel="Shortcut Icon" type="image/x-icon" href="images/gametopia.ico"/>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/mail.css">
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/mail.js"></script>
	<!-- <script src="js/mailGet.js"></script> -->
</head>
<body>
<?php
	include("function/header.php");
	include("function/memberBarSwitcher.php");
?>
<div class="outBoxContainer">	
	<div class="outBox">
		<div class="col_xs_12 col_sm_12 col_md_4 left">
			<input type="radio" name="readIf" id="Read">
			<input type="radio" name="readIf" id="unRead" checked>

			<ul class="top">
				<li>
					<label for="unRead" id="R2">未讀信息<span class="unReadCount"></span></label>
					<img src="images/write.png" id="writeNewMessageOnCellPhone">
				</li>
			</ul>
			<div class="mailList" id="mailList_2">
				<div id="dv_scroll_bar_2" class="dv_scroll_bar">  
				    <div id="dv_scroll_track_2" class="Scrollbar-Track">  
				        <div id="Scrollbar-Handle_2" class="Scrollbar-Handle"></div>  
				    </div>  
				</div>

				<input type="hidden" name="forMemberAccount" value="<?php echo $memAccount; ?>">
				<div id="mailBox_2" class="mailBox">

				</div>
			</div>
			<div class="footer">
				<span>Game Topia 遊戲烏托邦 | 玩家們的理想國度</span>
			</div>
		</div>
		<div class="col_xs_12 col_sm_12 col_md_8 right">
			<input type="radio" name="readOrWrite" id="readMail" checked>
			<input type="radio" name="readOrWrite" id="writeMail">

			<ul class="top">
				<li id="back_btn"><span> < </span></li>
				<li id="a1"><label for="readMail"><span>信件內容</span></label></li>
				<li id="a2"><label for="writeMail">寫信</label></li>
			</ul>
			<!-- =============信件內容============= -->
			<div class="mailInfoList" id="rightMailList">
				<div id="dv_scroll_bar_3" class="dv_scroll_bar" >  
					<div id="dv_scroll_track_3" class="Scrollbar-Track">  
						<div id="Scrollbar-Handle_3" class="Scrollbar-Handle"></div>  
					</div> 
				</div>

				<div class="mailBox2" id="mailBox_3">



				</div>

				<div class="reply">
					<input type="checkbox" id="reply">
					<label for="reply">
						<div class="upper">
							<div class="col_xs_11 col_sm_11 to">
								寫信給<span class="mailTo">
																	
								</span>
							</div>
							<div class="col_xs_1 col_sm_1 icon"><img src="images/arrow-up.png"></div>
							<div class="clearfix"></div>
						</div>
					</label>
					<div class="down">
						<div class="contentBox">
							
							

								<div contenteditable="true" class="contenteditable" id="cont_1"></div>
								<div class="palceholder" id="ph_1">請輸入文字</div>

								<input type="hidden" name="remail_mailInfo" id="mailContent_1" value="">
								<input type="hidden" name="remail_mailTo" value="">
								<input type="hidden" name="remail_mailFrom" value="">
								<input type="hidden" name="remail_mailId" value="">
								<input type="hidden" name="mailSource" value="reMail">

							

						</div>
						<div class="sendBtn">
						<!-- 送出鈕 -->
							<div id="sendNewMail_1" style="cursor: pointer;" onclick='replyMail()'>傳送</div>
						</div>

					</div>
				</div>
			</div>
			
			<!-- =============寫信專區============= -->
			<div class="writeMail">
				
					<div class="aa">

						
							<div class="col_xs_12 col_sm_8 sendTo">
								<input type="text" name="newMail_mailTo" placeholder="收件者帳號">
							</div>
							<div class="col_xs_12 col_sm_8 content">
								<div class="contentBox">

									<div contenteditable="true" class="contenteditable" id="cont_2"></div>
									<div class="palceholder" id="ph_2">請輸入內文</div>
									<input type="hidden" name="newMail_mailInfo" value="" id="mailContent_2">

								</div>
							</div>
							<div class="clearfix"></div>

							<input type="hidden" name="newMail_mailFrom" value="<?php echo $memAccount; ?>">
							<input type="hidden" name="newMail_mailId" value="">
							<input type="hidden" name="mailSource" value="newMail">
						

					</div>
					<div class="sendBtn">
					<!-- 送出鈕 -->
							<div id="sendNewMail_2" style="cursor: pointer;" onclick="newMail()">傳送</div>
					</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>



	<div class="outBox2">
		<div class="twoColBox">


			<div>
				<span>寫新信</span>
				<div class="allMailList">
					<!-- 單一則留言 -->
					<div id="galedr/63" class="oneML">
						<div class="personalImage">
							<!-- 頭像區 -->
							<div class="limitImage">
								<img src="img/11223843_1211961565487995_1558369919535761318_n.jpg">
							</div>
						</div>
						<div class="personalBlock">
							<div class="personalName">
								co co co o c
							</div>
							<div class="personalMessage">
								魯拉拉魯拉拉魯拉魯拉勒嚕拉嚕拉嚕拉嚕啦魯拉勒
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- 單一則留言 -->
					<div class="oneML">
						<div class="personalImage">
							<!-- 頭像區 -->
							<div class="limitImage">
								<img src="img/11223843_1211961565487995_1558369919535761318_n.jpg">
							</div>
						</div>
						<div class="personalBlock">
							<div class="personalName">
								魯拉拉魯拉拉
							</div>
							<div class="personalMessage">
								魯拉拉魯拉拉魯拉魯拉勒嚕拉嚕拉嚕拉嚕啦魯拉勒
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="oneML">
						<div class="personalImage">
							<!-- 頭像區 -->
							<div class="limitImage">
								<img src="img/11223843_1211961565487995_1558369919535761318_n.jpg">
							</div>
						</div>
						<div class="personalBlock">
							<div class="personalName">
								魯拉拉魯拉拉
							</div>
							<div class="personalMessage">
								魯拉拉魯拉拉魯拉魯拉勒嚕拉嚕拉嚕拉嚕啦魯拉勒
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="oneML">
						<div class="personalImage">
							<!-- 頭像區 -->
							<div class="limitImage">
								<img src="img/11223843_1211961565487995_1558369919535761318_n.jpg">
							</div>
						</div>
						<div class="personalBlock">
							<div class="personalName">
								魯拉拉魯拉拉
							</div>
							<div class="personalMessage">
								魯拉拉魯拉拉魯拉魯拉勒嚕拉嚕拉嚕拉嚕啦魯拉勒
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="oneML">
						<div class="personalImage">
							<!-- 頭像區 -->
							<div class="limitImage">
								<img src="img/11223843_1211961565487995_1558369919535761318_n.jpg">
							</div>
						</div>
						<div class="personalBlock">
							<div class="personalName">
								魯拉拉魯拉拉
							</div>
							<div class="personalMessage">
								魯拉拉魯拉拉魯拉魯拉勒嚕拉嚕拉嚕拉嚕啦魯拉勒
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>


			<div class="chat">
				<span id="returnFromChatToAllMailList"><</span>

				<div id="TCMBEO">
					<div class="totalConnectMessagesBetweenEachOther">
						<div class="oneMessageBetweenEachOther">

							<div class="col_xs_2 col_sm_2 imageWhoSendMessage">
								<div class="limitImage">
									<img src="img/11223843_1211961565487995_1558369919535761318_n.jpg">
								</div>
							</div>
							<div class="col_xs_5 col_sm_5 messageWhoSend">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi nam distinctio nisi voluptatibus rem qui, maxime quia vitae. Repellendus, ab in minima officiis facere perspiciatis reiciendis ipsam aliquid quibusdam tenetur.
							</div>
							<div class="clearfix"></div>

						</div>
						<div class="oneMessageBetweenEachOther">

							<div class="col_xs_2 col_sm_2 imageWhoSendMessage">
								<div class="limitImage">
									<img src="img/11223843_1211961565487995_1558369919535761318_n.jpg">
								</div>
							</div>
							<div class="col_xs_5 col_sm_5 messageWhoSend">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi nam distinctio nisi voluptatibus rem qui, maxime quia vitae. Repellendus, ab in minima officiis facere perspiciatis reiciendis ipsam aliquid quibusdam tenetur.
							</div>
							<div class="clearfix"></div>

						</div>
						<div class="oneMessageBetweenEachOther">

							<div class="col_xs_2 col_sm_2 imageWhoSendMessage">
								<div class="limitImage">
									<img src="img/11223843_1211961565487995_1558369919535761318_n.jpg">
								</div>
							</div>
							<div class="col_xs_5 col_sm_5 messageWhoSend">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi nam distinctio nisi voluptatibus rem qui, maxime quia vitae. Repellendus, ab in minima officiis facere perspiciatis reiciendis ipsam aliquid quibusdam tenetur.
							</div>
							<div class="clearfix"></div>

						</div>
						<div class="oneMessageBetweenEachOther">

							<div class="col_xs_2 col_sm_2 imageWhoSendMessage">
								<div class="limitImage">
									<img src="img/11223843_1211961565487995_1558369919535761318_n.jpg">
								</div>
							</div>
							<div class="col_xs_5 col_sm_5 messageWhoSend">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi nam distinctio nisi voluptatibus rem qui, maxime quia vitae. Repellendus, ab in minima officiis facere perspiciatis reiciendis ipsam aliquid quibusdam tenetur.
							</div>
							<div class="clearfix"></div>

						</div>
						<div class="oneMessageBetweenEachOther">

							<div class="col_xs_2 col_sm_2 imageWhoSendMessage">
								<div class="limitImage">
									<img src="img/11223843_1211961565487995_1558369919535761318_n.jpg">
								</div>
							</div>
							<div class="col_xs_5 col_sm_5 messageWhoSend">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi nam distinctio nisi voluptatibus rem qui, maxime quia vitae. Repellendus, ab in minima officiis facere perspiciatis reiciendis ipsam aliquid quibusdam tenetur.
							</div>
							<div class="clearfix"></div>

						</div>
					</div>
				</div>
				<div class="wrightMessage">
					<div>
						<span>
							輸入訊息
						</span>
						<div contenteditable="true"></div>
					</div>
					<div>送出</div>
				</div>
			</div>


			<div class="sendNewMailBlock">
				<form>
					<span id="returnFromSendNewMailBlockToAllMailList"><</span>
					<input type="text" name="mailTo" placeholder="收件者帳號" >
					<input type="hidden" id="inputNewMessage" name="mailInfo" value="">
				</form>
				<div>
					<div id="aaa" contenteditable="true"></div>
					<span>我在這裡輸入~~~</span>
				</div>
				<div class="sendNewMailButton">
					傳送
				</div>

			</div>

		</div>
	</div>
</div>		
</body>
</html>
<script type="text/javascript">
	$('.icon').click(function(){

		if ( $('.icon img').attr('src')== 'images/arrow-up.png')
			$('.icon img').attr('src', 'images/arrow-down.png');
		else
			$('.icon img').attr('src', 'images/arrow-up.png');

	});
</script>