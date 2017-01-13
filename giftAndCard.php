<?php
ob_start();
session_start();
?>

<?php
  error_reporting(E_ALL || ~E_NOTICE);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>送禮專區｜送禮給好朋友</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="Shortcut Icon" type="image/x-icon" href="images/gametopia.ico"/>
	<meta name="Resource-type" content="Document"/>
	<link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/giftAndCard.css">
  <link rel="stylesheet" type="text/css" href="js/giftAndCard.js">
	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="js/dragRole.js"></script>
  <script type="text/javascript" src="js/roleSelection.js"></script>

	<script type="text/javascript">
  $(document).ready(function() {
   $('#fullpage').fullpage({
    // sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
    anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage', '5thPage' , 'lastPage'],
    menu: '#menu',
    // easingcss3: 'cubic-bezier(0.175, 0.885, 0.320, 1.275)'
   });

   //====================== menuList ===========================
   var state = [1,0,0,0];
   var answer_1 = [0,0];
   var answer_2 = [0,0,0,0];
   var answer_3 = [0,0,0,0];
     var next = document.getElementsByClassName('next');
        console.log(next.length);
     answer_1[0] = document.getElementById('male');
     answer_1[1] = document.getElementById('female');
     answer_2[0] = document.getElementById('personality_1');
     answer_2[1] = document.getElementById('personality_2');
     answer_2[2] = document.getElementById('personality_3');
     answer_2[3] = document.getElementById('personality_4');
     answer_3[0] = document.getElementById('category_1');
     answer_3[1] = document.getElementById('category_2');
     answer_3[2] = document.getElementById('category_3');
     answer_3[3] = document.getElementById('category_4');
     answer_3[4] = document.getElementById('category_5');
     answer_3[5] = document.getElementById('category_6');
     answer_3[6] = document.getElementById('category_7');
     answer_3[7] = document.getElementById('category_8');
     var checkAnswer= document.getElementById('checkAnswer');
     
     for (var i = 0; i < next.length; i++) {
      next[i].addEventListener('click', pageState, false);
          if (i== 2) {
                     next[2].style.color= "#ccc";
                     next[3].style.color= "#ccc";
                     next[4].style.color= "#ccc";
                     next[5].style.color= "#ccc";

                     next[2].style.cursor= "default";
                     next[3].style.cursor= "default";
                     next[4].style.cursor= "default";
                     next[5].style.cursor= "default";

                     // next[0] = document.getElementById('option1Icon').src="images/boy-with-tie-talking-white.png";

          }
     }
     for (var i = 0; i < answer_1.length; i++) {
      answer_1[i].addEventListener('click', pageState, false);
     }
     for (var i = 0; i < answer_2.length; i++) {
      answer_2[i].addEventListener('click', pageState, false);
     }
     for (var i = 0; i < answer_3.length; i++) {
      answer_3[i].addEventListener('click', pageState, false);
     }
     checkAnswer.addEventListener('click', pageState, false);

     function pageState(e){
       var target = this.innerHTML;
          console.log(target);

      if ( (target == "送禮說明" || target == "對象性別") && state[0] == 1 ) {

        // next[0] = document.getElementById('option1Icon').src="images/boy-with-tie-talking-white.png";
        // next[1] = document.getElementById('option2Icon').src="images/gender-symbols-white.png";

      }else if (target == "對象個性" && state[1] == 0) {
       // 點擊對象個性的按鈕，且上一題未完成，不跳頁
                e.preventDefault();

      }else if (target == "遊戲類型" && state[2] == 0) {
       // 點擊對象喜歡遊戲類型的按鈕，且上一題未完成，不跳頁
                e.preventDefault();

      }else if ( (target == "卡片設計" || target == "禮物選擇") && state[3] == 0) {
            // 點擊卡片設計的按鈕，且上一題未完成，不跳頁
                     e.preventDefault();

          }else if (target == "男性" || target == "女性") {
                     next[2].style.color= "#000";
                     next[2].style.cursor= "pointer";
                     state[1]= 1;

          }else if (target == "積極主動" || target == "溫柔體貼" || target == "穩重內斂" || target == "熱情活潑") {            
                     next[3].style.color= "#000";
                     next[3].style.cursor= "pointer";
                     state[2]= 1;

          }else if (target == "冒險犯難" || target == "動作驚險" || target == "多人合作" || target == "競速刺激" || target == "策略多謀" || target == "運動休閒" || target == "即時射擊" || target == "角色扮演") {
                     next[4].style.color= "#000";
                     next[5].style.color= "#000";
                     next[4].style.cursor= "pointer";
                     next[5].style.cursor= "pointer";
                     state[3]= 1;
          }
     }
  });
 </script>

 <script type="text/javascript">
   $(document).ready(function(){

//摸到換圖案
  // $('#option1 a').click(function(){
  //   $('#option1Icon').attr('src','images/boy-with-tie-talking-white.png');
  // },function(){
  //   $('#option1Icon').attr('src','images/boy-with-tie-talking.png');
    
  //   }
  // );
   // $('#option1Icon').hover(function(){
   //   $('.next')
   // });

});
 </script>

</head>
<body>

<?php

  include("function/header.php");
  include("function/memberBarSwitcher.php");

?>
<script src="js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.fullPage.js"></script>

<!--=======================導覽列按鈕=====================-->
<ul id="menu">	
	<li data-menuanchor="firstPage" id="option1">
    <span>
      <a href="#firstPage"><img id="option1Icon" src="images/boy-with-tie-talking.png"></a>
	  </span>
    <a href="#firstPage" class="next">送禮說明</a>
  </li>
	<li data-menuanchor="secondPage" id="option2">
    <span>
       <a href="#secondPage"><img id="option2Icon" src="images/gender-symbols.png"></a>
	  </span>
    <a href="#secondPage" class="next">對象性別</a>
  </li>
	<li data-menuanchor="3rdPage">
    <span>
       <a href="#3rdPage"><img src="images/head.png"></a>
    </span>
    <a href="#3rdPage" class="next">對象個性</a>
  </li>
	<li data-menuanchor="4thPage">
    <span>
       <a href="#4thPage"><img src="images/icon.png"></a>
    </span>
    <a href="#4thPage" class="next">遊戲類型</a></li>
	<li data-menuanchor="5thPage">
    <span>
       <a href="#5thPage"><img src="images/christmas-card.png"></a>
    </span>
    <a href="#5thPage" class="next">卡片設計</a>
  </li>
	<li data-menuanchor="lastPage">
    <span>
       <a href="#lastPage"><img src="images/santa-hat.png"></a>
	  </span>
    <a href="#lastPage" class="next">禮物選擇</a>
  </li>
</ul>

<div id="fullpage">
	<div class="section" id="section0" name="section0"> 

      <div class="page_container">
		    <div class="page1Text">
  	  		<p>還在煩惱要送什麼禮物給朋友嗎？</p>
  	  		<p>烏托邦協助你依量身需求送禮喔！</p>
  	  	</div>
  	  	<div class="explanation">
  	  		<div class="explanationInside">
	  	  		<p id="expTitle">送禮專區說明</p>
	  	  		<p id="expText">透過以下幾個簡單的問題，即可透過您所回答的問題，經由系統提供推薦商品，同時製作專屬的禮物卡片送給親愛的朋友。讓我們為朋友精心挑選一個適合的禮物吧！</p>
	  	  		<div id="expStep" class="expStep1">
	  	  			<div class="stepDescribe">
	  	  				<div class="stepIcon">
	  	  					<img src="images/help-web-button.png">
	  	  				</div>
	  	  				<div class="stepTitle">
	  	  				<p>步驟一</p>
	  	  				<p>回答以下問題</p>
	  	  				</div>
	  	  			</div>
	  	  			<div class="stepDescribe">
	  	  				<div class="stepIcon">
	  	  					<img src="images/xmas-card.png">
	  	  				</div>
	  	  				<div class="stepTitle">
	  	  				 <p>步驟二</p>
	  	  				 <p>選擇卡片樣式</p>
	  	  				</div>
	  	  			</div>
	  	  			<div class="stepDescribe">
	  	  				<div class="stepIcon">
	  	  					<img src="images/column-with-rows-content-layout.png">
	  	  				</div>
	  	  				<div class="stepTitle">
	  	  				 <p>步驟三</p>
	  	  				 <p>撰寫卡片內容</p>
	  	  				</div>
	  	  			</div>
	  	  			<div class="stepDescribe">
	  	  				<div class="stepIcon">
	  	  					<img src="images/gift.png">
	  	  				</div>
	  	  				<div class="stepTitle">
	  	  				 <p>步驟四</p>
	  	  				 <p>挑選贈送禮物</p>
	  	  				</div>
	  	  			</div>
	        	</div>
        	</div>                  
  	  	</div>
  	  	<div class="giveGift">
  	  		<a href="#secondPage"><div class="btn">開始送禮</div></a>
  	  	</div>
  	  </div>
	</div>
	<div class="section" id="section1" name="section1">
		
      <div class="page_container" id="page_container1">
            <div class="leftCol">
            	<div class="floater"></div>
                <div class="role">
                    <div class="roleImgbox">
                    	<img src="images/empty.png" id="original">
                    </div>    
                </div>
            </div>
            
            <div class="rightCol">
            	<div class="floater1"></div>
            	<div class="combine">
            		<img src="images/diamond.png" id="diamond">	                    
	                <div class="question">
	                    <p>Q1：請問送禮對象的性別？</p>
	                </div>
	                <div class="options1">
	                  <a href="#3rdPage"><div class="btn" id="male" onclick="changeSex('male')">男性</div></a>
	                  <a href="#3rdPage"><div class="btn" id="female" onclick="changeSex('female')">女性</div></a>
	                </div>
                </div>                
            </div>
        </div>
	</div>
	<div class="section" id="section2">
		
	    <div class="page_container" id="page_container2">
            <div class="leftCol">
            	<div class="floater"></div>
                <div class="role">
                	<div class="roleImgbox">
                    	<img src="images/empty.png" id="personality" name="3rdPageRole">
                    </div>
                </div>
            </div>
            
            <div class="rightCol">
            	<div class="floater1"></div>
            	<div class="combine">
            		<img src="images/diamond.png" id="diamond">
	                <div class="question">
	                    <p>Q2：請問送禮對象的個性？</p>
	                </div>
	                <div class="options2">
	                    <div class="option">
	                      <a href="#4thPage"><div class="btn" id="personality_1" onclick="changePersonality('personality_1')">積極主動</div></a>
	                      <a href="#4thPage"><div class="btn" id="personality_2" onclick="changePersonality('personality_2')">溫柔體貼</div></a>
	                    </div>
	                    <div class="option">
	                      <a href="#4thPage"><div class="btn" id="personality_3" onclick="changePersonality('personality_3')">穩重內斂</div></a>
	                      <a href="#4thPage"><div class="btn" id="personality_4" onclick="changePersonality('personality_4')">熱情活潑</div></a>
	                    </div>
	                </div>
                </div>
            </div>
	    </div>
	</div>

	<div class="section" id="section3">
		
	    <div class="page_container" id="page_container3">	    	
            <div class="leftCol">
            	<div class="floater"></div>
                <div class="role">
                	<div class="roleImgbox">
                    	<img src="images/empty.png" id="category">
                    </div>
                </div>
            </div>
	            
            <div class="rightCol">
            	<div class="floater1"></div>
            	<div class="combine">
            		<img src="images/diamond.png" id="diamond">
	                <div class="question">
	                    <p>Q3：送禮對象喜歡的遊戲類型？</p>
	                </div>
	                <div class="options2">
	                    <div class="option">
	                      <a href="#5thPage"><div class="btn" id="category_1" onclick="changeGameType('category_1')">冒險犯難</div></a>
	                      <a href="#5thPage"><div class="btn" id="category_2" onclick="changeGameType('category_2')">動作驚險</div></a>
	                      <a href="#5thPage"><div class="btn" id="category_3" onclick="changeGameType('category_3')">多人合作</div></a>
	                      <a href="#5thPage"><div class="btn" id="category_4" onclick="changeGameType('category_4')">競速刺激</div></a>
	                    </div>
	                    <div class="option">
	                      <a href="#5thPage"><div class="btn" id="category_5" onclick="changeGameType('category_5')">策略多謀</div></a>
	                      <a href="#5thPage"><div class="btn" id="category_6" onclick="changeGameType('category_6')">運動休閒</div></a>
	                      <a href="#5thPage"><div class="btn" id="category_7" onclick="changeGameType('category_7')">即時射擊</div></a>
	                      <a href="#5thPage"><div class="btn" id="category_8" onclick="changeGameType('category_8')">角色扮演</div></a>
	                    </div>
	                </div>
	            </div>
            </div>
	    </div>		
	</div>

	<div class="section" id="section4">
		
	    <div class="page_container" id="page_container4">	    	
            <div class="leftCol leftCol2">
            	<!-- <div class="floater3"></div> -->
            	<div class="page5Text">
            		<p>送禮對象形象如下</p>
            	</div>              
              <div class="role">
              	<div class="roleImgbox" id="roleTransId">
              		<img src="images/empty.png" id="finalRole">
              	</div>
              </div>
              <!-- <div class="roleText" id="roleText">
              	<p>帥氣有型的陽光男孩</p>
              </div> -->
            </div>
            
            <div class="rightCol rightCol2">
            	<div class="floater2"></div>
            	<div class="combine1">            
	                <div class="cardPreview">
	                	<div class="preTitle">
	                		<p>卡片製作及預覽</p>
	                	</div>                	
	                	<div class="card" id="dragRole">
	                		<img src="images/blue.png" id="card">
	                		<div class="roleFinal" id="roleFinal">
                        <!-- <p>請拖曳左方形象至此</p> -->
                        <img src="images/roleFinal_empty.png" id="roleFinalPicture">
                      </div> 		
	                	</div>
	                	<div class="cardStyle">
	                		<div class="style1" id="style1" onclick="changeCardStyle('style1')"><img src="images/blue.png"></div>
	                		<div class="style2" id="style2" onclick="changeCardStyle('style2')"><img src="images/green.png"></div>
	                		<div class="style3" id="style3" onclick="changeCardStyle('style3')"><img src="images/orange.png"></div>
	                		<div class="style4" id="style4" onclick="changeCardStyle('style4')"><img src="images/pink.png"></div>
		                    <div class="style5" id="style5" onclick="changeCardStyle('style5')"><img src="images/purple.png"></div>
		                    <div class="style6" id="style6" onclick="changeCardStyle('style6')"><img src="images/white.png"></div>
	                	</div>
	                </div>                
	                <div class="cardDeco">                	
	                	<div class="cardText">
	                		<input type="textarea" name="textarea" id="textarea" placeholder="請在此區域輸入卡片內容…">
	                	</div>
	                </div>                
	                <div class="confirm">
	                  <a href="#lastPage"><div class="btn" id="btnConfirm">確認送出</div></a>
	                </div>
                </div>
            </div>
	    </div>
	</div>

	<div class="section" id="section5">
		
        <div class="page_container" id="page_container5">
	    	<div class="resultTitle">
	    		<p>遊戲烏托邦推薦以下幾個商品送給你的朋友！</p>
	    	</div>
        <div class="proRecommend">
  	    	<div class="proRow1">
  	    		<div class="singlePro">
  	    			<div class="proPic">
  	    				<img src="images/0000083667.PNG">
  	    			</div>
  	    			<div class="proTitle">
  	    				菲莉絲鍊金工房
  	    			</div>
  	    		</div>
  	    		<div class="singlePro">
  	    			<div class="proPic">
  	    				<img src="images/0000083486.PNG">
  	    			</div>
  	    			<div class="proTitle">
  	    				七龍珠2
  	    			</div>
  	    		</div>
  	    		<div class="singlePro">
  	    			<div class="proPic">
  	    				<img src="images/0000084288.JPG">
  	    			</div>
  	    			<div class="proTitle">
  	    				戰國無雙-真田丸
  	    			</div>
  	    		</div>
  	    		<div class="singlePro">
  	    			<div class="proPic">
  	    				<img src="images/0000085118.JPG">
  	    			</div>
  	    			<div class="proTitle">
  	    				刺客教條
  	    			</div>
  	    		</div>

  	    	</div> 

  	    	<div class="proRow2">
  	    		<div class="singlePro">
  	    			<div class="proPic">
  	    				<img src="images/0000079941.PNG">
  	    			</div>
  	    			<div class="proTitle">
  	    				刀劍神域
  	    			</div>
  	    		</div>
  	    		<div class="singlePro">
  	    			<div class="proPic">
  	    				<img src="images/0001401925.JPG">
  	    			</div>
  	    			<div class="proTitle">
  	    				惡靈古堡4
  	    			</div>
  	    		</div>
  	    		<div class="singlePro">
  	    			<div class="proPic">
  	    				<img src="images/0001389679.JPG">
  	    			</div>
  	    			<div class="proTitle">
  	    				死亡復甦4
  	    			</div>
  	    		</div>
  	    		<div class="singlePro">
  	    			<div class="proPic">
  	    				<img src="images/0001411272.JPG">
  	    			</div>
  	    			<div class="proTitle">
  	    				重力異想世界
  	    			</div>
  	    		</div>
  	    	</div>
        </div>
	    	<div class="proMore">
	    		<a href=""><div class="btn">更多商品</div></a>
	    	</div>           
	    </div>
	</div>
</div>

<!-- <div id="snowflakeContainer">
    <p class="snowflake">*</p>
</div> -->
  
</body>  
</html>