<script type="text/javascript">
    $(document).ready(function() {
      $.fn.snow({ minSize: 5, maxSize: 50, newOn: 500, flakeColor: 'rgba(70, 130, 180 ,.5)' });
      $('#fullpage').fullpage({
        // sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
        anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage', '5thPage' , 'lastPage'],
        menu: '#menu',

        //equivalent to jQuery `easeOutBack` extracted from http://matthewlein.com/ceaser/
        // easingcss3: 'cubic-bezier(0.175, 0.885, 0.320, 1.275)'
      });

      //====================== menuList ===========================
      var state = [1,0,0,0,0,0];
      var answer_1 = [0,0];
      var answer_2 = [0,0,0,0];
      var answer_3 = [0,0,0,0];
        var next = document.getElementsByClassName('next');
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
          if ( (target== "送禮說明" || target== "對象性別") && state[0] == 1 ) {
            // 一定可以動
          }
          if (target == "對象個性" && state[1] == 0) {
            // 點擊對象年齡的按鈕，且上一題未完成，不跳頁
            e.preventdefault();
          }
          if (target == "遊戲類型" && state[2] == 0) {
            // 點擊對象個性的按鈕，且上一題未完成，不跳頁
            e.preventdefault();
          }
          if (target == "卡片設計" && state[3] == 0) {
            // 點擊卡片設計的按鈕，且上一題未完成，不跳頁
            e.preventdefault();
          }
        }

    });
  </script>
  
  <!--JavaScript_選擇性別start-->  
  <script type="text/javascript">
  var answer = [0 , 0 , 0];
    function changeSex(gender){
      var btnMale = document.getElementById("male");
      var btnFemale =  document.getElementById("female");

      if (gender == 'male') {
        document.getElementById("original").src="images/male_original_1.png";       
        btnMale.style.backgroundColor="#D65476";
        btnFemale.style.backgroundColor="#6B92B1";
        answer[0] = 'male'; 
        // document.getElementById("page_container1").style.backgroundImage = "url('images/01-boy.png')";
        // document.getElementById("page_container2").style.backgroundImage = "url('images/01-boy.png')";
        // document.getElementById("page_container3").style.backgroundImage = "url('images/01-boy.png')";
        // document.getElementById("page_container4").style.backgroundImage = "url('images/01-boy.png')";
        // document.getElementById("page_container5").style.backgroundImage = "url('images/01-boy.png')";
        document.getElementById("personality").src="images/male_original_1.png";
      }else{
        document.getElementById("original").src="images/female_original_1.png";
        btnMale.style.backgroundColor="#6B92B1";
        btnFemale.style.backgroundColor="#D65476";
        answer[0] = 'female';
        // document.getElementById("page_container1").style.backgroundImage = "url('images/02-girl.png')";
        // document.getElementById("page_container2").style.backgroundImage = "url('images/02-girl.png')";
        // document.getElementById("page_container3").style.backgroundImage = "url('images/02-girl.png')";
        // document.getElementById("page_container4").style.backgroundImage = "url('images/02-girl.png')";
        // document.getElementById("page_container5").style.backgroundImage = "url('images/02-girl.png')";
        document.getElementById("personality").src="images/female_original_1.png";
      }
    }
  </script>

    <script type="text/javascript">
    // function changeSexToMale(){
    //   var btnColorChange = document.getElementsByClassName("btn");
    //   var btnMale = document.getElementById("male");
    //   var btnFemale =  document.getElementById("female");       
    //   document.getElementById("original").src="images/male_original_1.png";
    //   if (btnColorChange == btnMale) {
    //    document.getElementById("male").style.backgroundColor="#D65476";
    //   }else{
    //    document.getElementById("female").style.backgroundColor="##6B92B1";
    //   }
    // }
  </script>

  <script type="text/javascript">
    // function changeSexToFemale(){      
    //   document.getElementById("original").src="images/female_original_1.png";
    //   document.getElementById("female").style.backgroundColor="#D65476";
    //   document.getElementById("male").style.backgroundColor="##6B92B1";
    // }
  </script>
  <!--JavaScript_選擇性別finish-->


  <!--JavaScript_選擇個性start-->  
  <script type="text/javascript">
    function changePersonality(personality){
      var btnPersonality_1 = document.getElementById("personality_1");
      var btnPersonality_2 = document.getElementById("personality_2");
      var btnPersonality_3 = document.getElementById("personality_3");
      var btnPersonality_4 = document.getElementById("personality_4");  
      // var btnMale = document.getElementById("male");
      // var btnFemale =  document.getElementById("female");     
      var gender = answer[0];
      if (personality == 'personality_1') {
        document.getElementById("personality").src = "images/"+ gender + "_analysingGamer.png";
        btnPersonality_1.style.backgroundColor = "#D65476";
        btnPersonality_2.style.backgroundColor = "#6B92B1";
        btnPersonality_3.style.backgroundColor = "#6B92B1";
        btnPersonality_4.style.backgroundColor = "#6B92B1";
        answer[1] = 'analysingGamer';
        document.getElementById("category").src = "images/"+ gender + "_analysingGamer.png";
      }else if (personality == 'personality_2'){
        document.getElementById("personality").src="images/"+ gender + "_rescueGamer.png";
        btnPersonality_2.style.backgroundColor = "#D65476";
        btnPersonality_1.style.backgroundColor = "#6B92B1";
        btnPersonality_3.style.backgroundColor = "#6B92B1";
        btnPersonality_4.style.backgroundColor = "#6B92B1";;
        document.getElementById("category").src = "images/"+ gender + "_rescueGamer.png";
      }else if (personality == 'personality_3'){
        document.getElementById("personality").src = "images/"+ gender + "_casualGamer.png";
        btnPersonality_3.style.backgroundColor = "#D65476";
        btnPersonality_1.style.backgroundColor = "#6B92B1";
        btnPersonality_2.style.backgroundColor = "#6B92B1";
        btnPersonality_4.style.backgroundColor = "#6B92B1";
        document.getElementById("category").src = "images/"+ gender + "_casualGamer.png";
      }else if (personality == 'personality_4'){
        document.getElementById("personality").src = "images/"+ gender + "_playingGamer.png";
        btnPersonality_4.style.backgroundColor = "#D65476";
        btnPersonality_1.style.backgroundColor = "#6B92B1";
        btnPersonality_2.style.backgroundColor = "#6B92B1";
        btnPersonality_3.style.backgroundColor = "#6B92B1";
        document.getElementById("category").src = "images/"+ gender + "_playingGamer.png";
      }
    }
  </script>
  <!--JavaScript_選擇個性finish-->

  <!--JavaScript_選擇喜歡的遊戲類型start-->  
  <script type="text/javascript">
    function changeGameType(category){
      var btnCategory_1 = document.getElementById("category_1");
      var btnCategory_2 = document.getElementById("category_2");
      var btnCategory_3 = document.getElementById("category_3");
      var btnCategory_4 = document.getElementById("category_4");
      var btnCategory_5 = document.getElementById("category_5");
      var btnCategory_6 = document.getElementById("category_6");
      var btnCategory_7 = document.getElementById("category_7");
      var btnCategory_8 = document.getElementById("category_8");
      var personality = answer[1];

      if(category == 'category_1'){
        document.getElementById("category").src = "images/oops.png";
        btnCategory_1.style.backgroundColor="#D65476";
        btnCategory_2.style.backgroundColor="#6B92B1";
        btnCategory_3.style.backgroundColor="#6B92B1";
        btnCategory_4.style.backgroundColor="#6B92B1";
        btnCategory_5.style.backgroundColor="#6B92B1";
        btnCategory_6.style.backgroundColor="#6B92B1";
        btnCategory_7.style.backgroundColor="#6B92B1";
        btnCategory_8.style.backgroundColor="#6B92B1";
        document.getElementById("finalRole").src = "images/oops.png";
      }else if (category == 'category_2'){
        document.getElementById("category").src = "images/oops.png";
        btnCategory_2.style.backgroundColor="#D65476";
        btnCategory_1.style.backgroundColor="#6B92B1";
        btnCategory_3.style.backgroundColor="#6B92B1";
        btnCategory_4.style.backgroundColor="#6B92B1";
        btnCategory_5.style.backgroundColor="#6B92B1";
        btnCategory_6.style.backgroundColor="#6B92B1";
        btnCategory_7.style.backgroundColor="#6B92B1";
        btnCategory_8.style.backgroundColor="#6B92B1";
        document.getElementById("finalRole").src = "images/oops.png";
      }else if (category == 'category_3'){
        document.getElementById("category").src = "images/oops.png";
        btnCategory_3.style.backgroundColor="#D65476";
        btnCategory_1.style.backgroundColor="#6B92B1";
        btnCategory_2.style.backgroundColor="#6B92B1";
        btnCategory_4.style.backgroundColor="#6B92B1";
        btnCategory_5.style.backgroundColor="#6B92B1";
        btnCategory_6.style.backgroundColor="#6B92B1";
        btnCategory_7.style.backgroundColor="#6B92B1";
        btnCategory_8.style.backgroundColor="#6B92B1";
        document.getElementById("finalRole").src = "images/oops.png";
      }else if (category == 'category_4'){
        document.getElementById("category").src = "images/oops.png";
        btnCategory_4.style.backgroundColor="#D65476";
        btnCategory_1.style.backgroundColor="#6B92B1";
        btnCategory_2.style.backgroundColor="#6B92B1";
        btnCategory_3.style.backgroundColor="#6B92B1";
        btnCategory_5.style.backgroundColor="#6B92B1";
        btnCategory_6.style.backgroundColor="#6B92B1";
        btnCategory_7.style.backgroundColor="#6B92B1";
        btnCategory_8.style.backgroundColor="#6B92B1";
        document.getElementById("finalRole").src = "images/oops.png";
      }else if (category == 'category_5'){
        document.getElementById("category").src = "images/oops.png";
        btnCategory_5.style.backgroundColor="#D65476";
        btnCategory_1.style.backgroundColor="#6B92B1";
        btnCategory_2.style.backgroundColor="#6B92B1";
        btnCategory_3.style.backgroundColor="#6B92B1";
        btnCategory_4.style.backgroundColor="#6B92B1";
        btnCategory_6.style.backgroundColor="#6B92B1";
        btnCategory_7.style.backgroundColor="#6B92B1";
        btnCategory_8.style.backgroundColor="#6B92B1";
        document.getElementById("finalRole").src = "images/oops.png";
      }else if (category == 'category_6'){
        document.getElementById("category").src = "images/oops.png";
        btnCategory_6.style.backgroundColor="#D65476";
        btnCategory_1.style.backgroundColor="#6B92B1";
        btnCategory_2.style.backgroundColor="#6B92B1";
        btnCategory_3.style.backgroundColor="#6B92B1";
        btnCategory_4.style.backgroundColor="#6B92B1";
        btnCategory_5.style.backgroundColor="#6B92B1";
        btnCategory_7.style.backgroundColor="#6B92B1";
        btnCategory_8.style.backgroundColor="#6B92B1";
        document.getElementById("finalRole").src = "images/oops.png";
      }else if (category == 'category_7'){
        document.getElementById("category").src = "images/oops.png";
        btnCategory_7.style.backgroundColor="#D65476";
        btnCategory_1.style.backgroundColor="#6B92B1";
        btnCategory_2.style.backgroundColor="#6B92B1";
        btnCategory_3.style.backgroundColor="#6B92B1";
        btnCategory_4.style.backgroundColor="#6B92B1";
        btnCategory_5.style.backgroundColor="#6B92B1";
        btnCategory_6.style.backgroundColor="#6B92B1";
        btnCategory_8.style.backgroundColor="#6B92B1";
        document.getElementById("finalRole").src = "images/oops.png";
      }else if (category == 'category_8'){
        document.getElementById("category").src = "images/oops.png";
        btnCategory_8.style.backgroundColor="#D65476";
        btnCategory_1.style.backgroundColor="#6B92B1";
        btnCategory_2.style.backgroundColor="#6B92B1";
        btnCategory_3.style.backgroundColor="#6B92B1";
        btnCategory_4.style.backgroundColor="#6B92B1";
        btnCategory_5.style.backgroundColor="#6B92B1";
        btnCategory_6.style.backgroundColor="#6B92B1";
        btnCategory_7.style.backgroundColor="#6B92B1";
        document.getElementById("finalRole").src = "images/oops.png";
      }
    }
  </script>

  <script type="text/javascript">
    function changeCardStyle(cardStyle){
      var btnStyle1 = document.getElementsByClassName("style1")

      if(cardStyle == 'style1'){
        dragRole.style.backgroundImage = "url('images/card.png')";
      }
    }
  </script>