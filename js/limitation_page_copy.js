
		$(document).ready(function() {
			$.fn.snow({ minSize: 10, maxSize: 30, newOn: 800, flakeColor: 'rgba(129, 190, 237 ,0.8)' });
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