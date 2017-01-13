  //JavaScript_選擇性別start
  var answer = [0 , 0 , 0];
    function changeSex(gender){
      var btnMale = document.getElementById("male");
      var btnFemale =  document.getElementById("female");

      if (gender == 'male') {
      	document.getElementById("original").src="images/male_original.png";      	
      	btnMale.style.backgroundColor="#D65476";
      	btnFemale.style.backgroundColor="#6B92B1";
      	answer[0] = 'male';
      	document.getElementById("personality").src="images/male_original.png";
      }else{
      	document.getElementById("original").src="images/female_original.png";
      	btnMale.style.backgroundColor="#6B92B1";
      	btnFemale.style.backgroundColor="#D65476";
      	answer[0] = 'female';
      	document.getElementById("personality").src="images/female_original.png";
      }
    }
  //JavaScript_選擇性別finish


  //JavaScript_選擇個性start
    function changePersonality(personality){
      var btnPersonality_1 = document.getElementById("personality_1");
      var btnPersonality_2 = document.getElementById("personality_2");
      var btnPersonality_3 = document.getElementById("personality_3");
      var btnPersonality_4 = document.getElementById("personality_4");
      var gender = answer[0];
      if (personality == 'personality_1') {
        document.getElementById("personality").src = "images/"+ gender + "_active.png";
        btnPersonality_1.style.backgroundColor = "#D65476";
        btnPersonality_2.style.backgroundColor = "#6B92B1";
        btnPersonality_3.style.backgroundColor = "#6B92B1";
        btnPersonality_4.style.backgroundColor = "#6B92B1";
        answer[1] = '_active';
        document.getElementById("category").src = "images/"+ gender + "_active.png";
      }else if (personality == 'personality_2'){
        document.getElementById("personality").src="images/"+ gender + "_considerate.png";
        btnPersonality_2.style.backgroundColor = "#D65476";
        btnPersonality_1.style.backgroundColor = "#6B92B1";
        btnPersonality_3.style.backgroundColor = "#6B92B1";
        btnPersonality_4.style.backgroundColor = "#6B92B1";;
        answer[1] = '_considerate';
        document.getElementById("category").src = "images/"+ gender + "_considerate.png";
      }else if (personality == 'personality_3'){
        document.getElementById("personality").src = "images/"+ gender + "_steady.png";
        btnPersonality_3.style.backgroundColor = "#D65476";
        btnPersonality_1.style.backgroundColor = "#6B92B1";
        btnPersonality_2.style.backgroundColor = "#6B92B1";
        btnPersonality_4.style.backgroundColor = "#6B92B1";
        answer[1] = '_steady';
        document.getElementById("category").src = "images/"+ gender + "_steady.png";
      }else if (personality == 'personality_4'){
        document.getElementById("personality").src = "images/"+ gender + "_passionate.png";
        btnPersonality_4.style.backgroundColor = "#D65476";
        btnPersonality_1.style.backgroundColor = "#6B92B1";
        btnPersonality_2.style.backgroundColor = "#6B92B1";
        btnPersonality_3.style.backgroundColor = "#6B92B1";
        answer[1] = '_passionate';
        document.getElementById("category").src = "images/"+ gender + "_passionate.png";
      }
    }
  //JavaScript_選擇個性finish

  //JavaScript_選擇喜歡的遊戲類型start
    function changeGameType(category){
      var btnCategory_1 = document.getElementById("category_1");
      var btnCategory_2 = document.getElementById("category_2");
      var btnCategory_3 = document.getElementById("category_3");
      var btnCategory_4 = document.getElementById("category_4");
      var btnCategory_5 = document.getElementById("category_5");
      var btnCategory_6 = document.getElementById("category_6");
      var btnCategory_7 = document.getElementById("category_7");
      var btnCategory_8 = document.getElementById("category_8");
      var gender = answer[0];
      var personality = answer[1];

      if(category == 'category_1'){
        document.getElementById("category").src = "images/"+ gender + personality + "_adventure.png";
        btnCategory_1.style.backgroundColor="#D65476";
        btnCategory_2.style.backgroundColor="#6B92B1";
        btnCategory_3.style.backgroundColor="#6B92B1";
        btnCategory_4.style.backgroundColor="#6B92B1";
        btnCategory_5.style.backgroundColor="#6B92B1";
        btnCategory_6.style.backgroundColor="#6B92B1";
        btnCategory_7.style.backgroundColor="#6B92B1";
        btnCategory_8.style.backgroundColor="#6B92B1";
        document.getElementById("finalRole").src = "images/"+ gender + personality + "_adventure.png";
      }else if (category == 'category_2'){
        document.getElementById("category").src = "images/"+ gender + personality + "_action.png";
        btnCategory_2.style.backgroundColor="#D65476";
        btnCategory_1.style.backgroundColor="#6B92B1";
        btnCategory_3.style.backgroundColor="#6B92B1";
        btnCategory_4.style.backgroundColor="#6B92B1";
        btnCategory_5.style.backgroundColor="#6B92B1";
        btnCategory_6.style.backgroundColor="#6B92B1";
        btnCategory_7.style.backgroundColor="#6B92B1";
        btnCategory_8.style.backgroundColor="#6B92B1";
        document.getElementById("finalRole").src = "images/"+ gender + personality + "_action.png";
      }else if (category == 'category_3'){
        document.getElementById("category").src = "images/"+ gender + personality + "_cooperative.png";
        btnCategory_3.style.backgroundColor="#D65476";
        btnCategory_1.style.backgroundColor="#6B92B1";
        btnCategory_2.style.backgroundColor="#6B92B1";
        btnCategory_4.style.backgroundColor="#6B92B1";
        btnCategory_5.style.backgroundColor="#6B92B1";
        btnCategory_6.style.backgroundColor="#6B92B1";
        btnCategory_7.style.backgroundColor="#6B92B1";
        btnCategory_8.style.backgroundColor="#6B92B1";
        document.getElementById("finalRole").src = "images/"+ gender + personality + "_cooperative.png";
      }else if (category == 'category_4'){
        document.getElementById("category").src = "images/"+ gender + personality + "_exciting.png";
        btnCategory_4.style.backgroundColor="#D65476";
        btnCategory_1.style.backgroundColor="#6B92B1";
        btnCategory_2.style.backgroundColor="#6B92B1";
        btnCategory_3.style.backgroundColor="#6B92B1";
        btnCategory_5.style.backgroundColor="#6B92B1";
        btnCategory_6.style.backgroundColor="#6B92B1";
        btnCategory_7.style.backgroundColor="#6B92B1";
        btnCategory_8.style.backgroundColor="#6B92B1";
        document.getElementById("finalRole").src = "images/"+ gender + personality + "_exciting.png";
      }else if (category == 'category_5'){
        document.getElementById("category").src = "images/"+ gender + personality + "_strategical.png";
        btnCategory_5.style.backgroundColor="#D65476";
        btnCategory_1.style.backgroundColor="#6B92B1";
        btnCategory_2.style.backgroundColor="#6B92B1";
        btnCategory_3.style.backgroundColor="#6B92B1";
        btnCategory_4.style.backgroundColor="#6B92B1";
        btnCategory_6.style.backgroundColor="#6B92B1";
        btnCategory_7.style.backgroundColor="#6B92B1";
        btnCategory_8.style.backgroundColor="#6B92B1";
        document.getElementById("finalRole").src = "images/"+ gender + personality + "_strategical.png";
      }else if (category == 'category_6'){
        document.getElementById("category").src = "images/"+ gender + personality + "_casual.png";
        btnCategory_6.style.backgroundColor="#D65476";
        btnCategory_1.style.backgroundColor="#6B92B1";
        btnCategory_2.style.backgroundColor="#6B92B1";
        btnCategory_3.style.backgroundColor="#6B92B1";
        btnCategory_4.style.backgroundColor="#6B92B1";
        btnCategory_5.style.backgroundColor="#6B92B1";
        btnCategory_7.style.backgroundColor="#6B92B1";
        btnCategory_8.style.backgroundColor="#6B92B1";
        document.getElementById("finalRole").src = "images/"+ gender + personality + "_casual.png";
      }else if (category == 'category_7'){
        document.getElementById("category").src = "images/"+ gender + personality + "_shooting.png";
        btnCategory_7.style.backgroundColor="#D65476";
        btnCategory_1.style.backgroundColor="#6B92B1";
        btnCategory_2.style.backgroundColor="#6B92B1";
        btnCategory_3.style.backgroundColor="#6B92B1";
        btnCategory_4.style.backgroundColor="#6B92B1";
        btnCategory_5.style.backgroundColor="#6B92B1";
        btnCategory_6.style.backgroundColor="#6B92B1";
        btnCategory_8.style.backgroundColor="#6B92B1";
        document.getElementById("finalRole").src = "images/"+ gender + personality + "_shooting.png";
      }else if (category == 'category_8'){
        document.getElementById("category").src = "images/"+ gender + personality + "_roleplaying.png";
        btnCategory_8.style.backgroundColor="#D65476";
        btnCategory_1.style.backgroundColor="#6B92B1";
        btnCategory_2.style.backgroundColor="#6B92B1";
        btnCategory_3.style.backgroundColor="#6B92B1";
        btnCategory_4.style.backgroundColor="#6B92B1";
        btnCategory_5.style.backgroundColor="#6B92B1";
        btnCategory_6.style.backgroundColor="#6B92B1";
        btnCategory_7.style.backgroundColor="#6B92B1";
        document.getElementById("finalRole").src = "images/"+ gender + personality + "_roleplaying.png";
      }
    }
    //JavaScript_選擇喜歡的遊戲類型finish

    //JavaScript_選擇卡片樣式start
    function changeCardStyle(cardStyle){      
      if(cardStyle == 'style1'){
        document.getElementById("card").src = "images/blue.png";
      }else if(cardStyle == 'style2'){
        document.getElementById("card").src = "images/green.png";
      }else if(cardStyle == 'style3'){
        document.getElementById("card").src = "images/orange.png";
      }else if(cardStyle == 'style4'){
        document.getElementById("card").src = "images/pink.png";
      }else if(cardStyle == 'style5'){
        document.getElementById("card").src = "images/purple.png";
      }else if(cardStyle == 'style6'){
        document.getElementById("card").src = "images/white.png";
      }
    }
    //JavaScript_選擇卡片樣式finish