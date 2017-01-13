<?php

error_reporting(E_ALL || ~E_NOTICE);
require_once("connectSQL.php");

if(isset($_POST["mailType"]) && ($_POST["mailType"]) != ""){
	$mailType = $_POST["mailType"];
}
if(isset($_POST["memAccount"]) && ($_POST["memAccount"]) != ""){
	$memAccount = $_POST["memAccount"];
}

$strArr = array();

$mailClass = '';

switch ($mailType) {
	case 'beginning':
		//未讀計數
		$unReadQuery = "SELECT status FROM mail WHERE mailTo = '$memAccount' AND status = '未讀'";
		$unReadRec = $pdo->query($unReadQuery);
		$unReadRow = $unReadRec->fetch(PDO::FETCH_ASSOC);
		$unReadNum = $unReadRec->rowCount();

		//ROW出信件列表		
		$mailQuery = "SELECT * FROM (SELECT * FROM mail WHERE mailTo = '$memAccount' ORDER BY mailId DESC LIMIT 0,10000) aa GROUP BY mailFrom";
		
		$mailRec = $pdo->query($mailQuery);
		//寄件人訊息
		$mailFromQuery = "SELECT * FROM memberdata WHERE memAccount = :mailFrom";
		$mailFromRec = $pdo->prepare($mailFromQuery);

		
		while($mailRow = $mailRec->fetch(PDO::FETCH_ASSOC)){

				$mailFromRec->bindValue(":mailFrom",$mailRow["mailFrom"]);
				$mailFromRec->execute();
				$mailFromRow = $mailFromRec->fetch(PDO::FETCH_ASSOC);

				//判斷信件是否未讀
				$mailStatus = $mailRow["status"];
				$mailClass = 0;
				if($mailStatus == '未讀'){
					$mailClass = 'unReadMail';
				}else{
					$mailClass = 'checkingClass';
				}
				
				$newCheck = $mailRow["mailInfo"];
				$checKMem = $mailRow["mailFrom"];
				if($newCheck == 'forNewConverIsSettingForHiddenDoNotShowOnTheList'){

					$newConverQuery = "SELECT * FROM mail WHERE mailFrom = '$memAccount' AND mailTo = '$checKMem'";
					$newConverRec = $pdo->query($newConverQuery);
					$newConverRow = $newConverRec->fetch(PDO::FETCH_ASSOC);
					
					$strArr[] = '
								<div class="mail '.$mailClass.'" style="cursor: pointer;" onClick="javascript:getMesFromMemberTriger('.$mailRow["mailId"].');" id="'.$mailRow["mailId"].'" mailFrom="'.$mailRow["mailFrom"].'">
									
									<div class="col_xs_3 col_sm_3 headImg">
										<img src="'.$mailFromRow["memImg"].'">
									</div>
									<div class="col_xs_9 col_sm_9 message">
										<div class="col_xs_6 col_sm_6 name">'.$mailRow["mailFrom"].'</div>
										<div class="col_xs_6 col_sm_6 time">'.$mailRow["mailDate"].'</div>
										<div class="col_xs_12 col_sm_12 title">'.$newConverRow["mailInfo"].'</div>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
								';

				}else{


					$strArr[] = '
							
								<div class="mail '.$mailClass.'" style="cursor: pointer;" onClick="javascript:getMesFromMemberTriger('.$mailRow["mailId"].');" id="'.$mailRow["mailId"].'" mailFrom="'.$mailRow["mailFrom"].'">
									
									<div class="col_xs_3 col_sm_3 headImg">
										<img src="'.$mailFromRow["memImg"].'">
									</div>
									<div class="col_xs_9 col_sm_9 message">
										<div class="col_xs_6 col_sm_6 name">'.$mailRow["mailFrom"].'</div>
										<div class="col_xs_6 col_sm_6 time">'.$mailRow["mailDate"].'</div>
										<div class="col_xs_12 col_sm_12 title">'.$mailRow["mailInfo"].'</div>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>	

								';

				}			
			}
			$finalStr = implode("", $strArr);
			echo json_encode(array('status'=>'success','data'=>$finalStr,'unReadCount'=>$unReadNum));
			
		break;
	
	case 'memberOnClick':
			
			//信件訊息第一封
			if(isset($_POST["mailId"]) && ($_POST["mailId"]) != ""){
				$mailId = $_POST["mailId"];
			}
			if(isset($_POST["mailFrom"]) && ($_POST["mailFrom"] != "")){
				$mailFrom = $_POST["mailFrom"];
			}
			//更改被點擊信件為已讀
			$readedQuery = "UPDATE mail SET status = '已讀' WHERE mailTo = '$memAccount' AND mailFrom = '$mailFrom'";
			
			$readedRec = $pdo->query($readedQuery);

			//選出收件與寄件人分別是目前登入會員與對象
			$mailInfoQuery = "SELECT * FROM mail WHERE (mailFrom = '$mailFrom' AND mailTo = '$memAccount') OR (mailFrom = '$memAccount' AND mailTo = '$mailFrom') ORDER BY mailId";
			
			$mailInfoRec = $pdo->query($mailInfoQuery);
			while($mailInfoRow = $mailInfoRec->fetch(PDO::FETCH_ASSOC)){

				//SQL寄件人資料
				$mailFromMem = $mailInfoRow["mailFrom"];
				$mailFromMemQuery = "SELECT * FROM memberdata WHERE memAccount = '$mailFromMem'";
				$mailFromMemRec = $pdo->query($mailFromMemQuery);
				$mailFromMemRow = $mailFromMemRec->fetch(PDO::FETCH_ASSOC);

				$converCheck = $mailInfoRow["mailInfo"];
				//回傳與被點擊會員的聊天紀錄
				
				if($converCheck == "forNewConverIsSettingForHiddenDoNotShowOnTheList"){

				}else{

					$strArr[] = '
					
								<div class="mailInfo">
									<div class="col_xs_2 col_sm_2 headImg">
										<img src="'.$mailFromMemRow["memImg"].'">
									</div>
									<div class="col_xs_7 col_sm_7 info">
										<div class="col_xs_12 col_sm_12 sender">'.$mailInfoRow["mailFrom"].'</div>
										
										<div class="col_xs_12 col_sm_12 content">
											<p>
												'.$mailInfoRow["mailInfo"].'
											</p>
										</div>
									</div>
									<div class="col_xs_3 col_sm_3 time">
										'.$mailInfoRow["mailDate"].'
									</div>
									<div class="clearfix"></div>
								</div>	

								 ';

				}	

				

			}
			$finalStr = implode("", $strArr);
			echo json_encode(array('status'=>'success','data'=>$finalStr,'mailFrom'=>$mailFrom));

		break;


}


// echo json_encode(array('status'=>'success','data'=>$finalStr));

?>