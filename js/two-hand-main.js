$(document).ready(function(){

	if ($(window).width() > 1750) {

		$(".megami").animate({
  			opacity: "show",
  			left: "-=220px",
  		},1500);


		$(".megamiBg").delay(1500).animate({
  			opacity: "show",
  			top: "-=330px",
  		},2000);

		$(".megamiNextBox").click(function(){
			$(".Qbox").show("fast");
			$(".blackback").show("fast");	
			$(".QgameMom").hide("fast");
			$(".Qtype").show("slow");
	
		});
	
		$(".Qtypes").click(function(){
			$(".Qtype").hide("fast");
			$(".QgameMom").show("slow");
		});
	
		$(".QgameMom").click(function(){
			$(".Qbox").hide("fast");
			$(".blackback").hide("fast");
			$(".productLightbox").animate({
  				opacity:"show" },500,function(){
				$(".megamiNextBox").hide("fast");
				$(".productLightbox").fadeIn(3000);
				$(".megamiMoreagainBox").show("fast");
				$(".megamiContentword").html("不喜歡嗎？可以點選　【再一次】　唷！");
			});
		});
	
		$(".productLightbox").click(function(){
			$(".megamiBg").fadeOut("slow");
			$(".ball").fadeOut("slow");
			$(".blackback").show("fast");
			$(".Qbox").hide("fast");
			$(".productLightbox").hide("fast");
			$(".productLightboxDetal").show("slow");
	
		});
	
		$(".cancelBtn").click(function(){
			$(".megamiMoreagainBox").hide("fast");
			$(".blackback").hide("fast");
			$(".productLightboxDetal").hide("slow");
			$(".megamiNextBox").show("fast");
			$(".Qbox").hide("fast");
			$(".megamiContentword").html("勇者啊，請問您在尋找什麼呢？");
	
			$(".megamiBg").fadeIn("slow");
			$(".bubble").fadeIn("slow");
		});
	
		$(".megamiMoreagainBox").click(function(){
			$(".megamiMoreagainBox").hide("fast");
			$(".productLightbox").hide("slow");
			$(".megamiNextBox").show("fast");
			$(".megamiContentword").html("勇者啊，請問您在尋找什麼呢？");
		
		});
	

	}else if($(window).width() > 1300) {

		$(".megami").animate({
  			opacity: "show",
  			left: "-=220px",
  		},1500);


		$(".megamiBg").delay(1500).animate({
  			opacity: "show",
  			top: "-=33%",
  		},2000);

		$(".megamiNextBox").click(function(){
			$(".Qbox").show("fast");
			$(".blackback").show("fast");	
			$(".QgameMom").hide("fast");
			$(".Qtype").show("slow");
	
		});
	
		$(".Qtypes").click(function(){
			$(".Qtype").hide("fast");
			$(".QgameMom").show("slow");
		});
	
		$(".QgameMom").click(function(){
			$(".Qbox").hide("fast");
			$(".blackback").hide("fast");
			$(".productLightbox").animate({
  				opacity:"show" },500,function(){
				$(".megamiNextBox").hide("fast");
				$(".productLightbox").fadeIn(3000);
				$(".megamiMoreagainBox").show("fast");
				$(".megamiContentword").html("不喜歡嗎？可以點選　【再一次】　唷！");
			});
		});
	
		$(".productLightbox").click(function(){
			$(".megamiBg").fadeOut("slow");
			$(".ball").fadeOut("slow");
			$(".blackback").show("fast");
			$(".Qbox").hide("fast");
			$(".productLightbox").hide("fast");
			$(".productLightboxDetal").show("slow");
	
		});
	
		$(".cancelBtn").click(function(){
			$(".megamiMoreagainBox").hide("fast");
			$(".blackback").hide("fast");
			$(".productLightboxDetal").hide("slow");
			$(".megamiNextBox").show("fast");
			$(".Qbox").hide("fast");
			$(".megamiContentword").html("勇者啊，請問您在尋找什麼呢？");
	
			$(".megamiBg").fadeIn("slow");
			$(".bubble").fadeIn("slow");
		});
	
		$(".megamiMoreagainBox").click(function(){
			$(".megamiMoreagainBox").hide("fast");
			$(".productLightbox").hide("slow");
			$(".megamiNextBox").show("fast");
			$(".megamiContentword").html("勇者啊，請問您在尋找什麼呢？");
		
		});
	
   
	}else if($(window).width() > 1200) {

		$(".megami").animate({
  			opacity: "show",
  			left: "-=220px",
  		},1500);


		$(".megamiBg").delay(1500).animate({
  			opacity: "show",
  			top: "-=35%",
  		},2000);

		$(".megamiNextBox").click(function(){
			$(".Qbox").show("fast");
			$(".blackback").show("fast");	
			$(".QgameMom").hide("fast");
			$(".Qtype").show("slow");
	
		});
	
		$(".Qtypes").click(function(){
			$(".Qtype").hide("fast");
			$(".QgameMom").show("slow");
		});
	
		$(".QgameMom").click(function(){
			$(".Qbox").hide("fast");
			$(".blackback").hide("fast");
			$(".productLightbox").animate({
  				opacity:"show" },500,function(){
				$(".megamiNextBox").hide("fast");
				$(".productLightbox").fadeIn(3000);
				$(".megamiMoreagainBox").show("fast");
				$(".megamiContentword").html("不喜歡嗎？可以點選　【再一次】　唷！");
			});
		});
	
		$(".productLightbox").click(function(){

			$(".productLightbox").hide("fast");
			$(".megamiBg").fadeOut("slow");
			$(".ball").fadeOut("slow");
			$(".blackback").show("fast");
			$(".Qbox").hide("fast");
			$(".productLightboxDetal").show("slow");
	
		});
	
		$(".cancelBtn").click(function(){
			$(".megamiMoreagainBox").hide("fast");
			$(".blackback").hide("fast");
			$(".productLightboxDetal").hide("slow");
			$(".megamiNextBox").show("fast");
			$(".Qbox").hide("fast");
			$(".megamiContentword").html("勇者啊，請問您在尋找什麼呢？");
	
			$(".megamiBg").fadeIn("slow");
			$(".bubble").fadeIn("slow");
		});
	
		$(".megamiMoreagainBox").click(function(){
			$(".megamiMoreagainBox").hide("fast");
			$(".productLightbox").hide("slow");
			$(".megamiNextBox").show("fast");
			$(".megamiContentword").html("勇者啊，請問您在尋找什麼呢？");
		
		});
	
   
	}else{

		$(".megami").animate({
  			opacity: "show",
  		},1500);



		$(".megamiNextBox").click(function(){
			$(".Qbox").show("fast");
			$(".blackback").show("fast");	
			$(".QgameMom").hide("fast");
			$(".Qtype").show("slow");
	
		});
	
		$(".Qtypes").click(function(){
			$(".Qtype").hide("fast");
			$(".QgameMom").show("slow");
		});
	

		$(".QgameMom").click(function(){
			$(".megamiBg").fadeOut("slow");
			$(".blackback").show("fast");
			$(".Qbox").hide("fast");
			$(".productLightboxDetal").show("slow");
	
		});
	
		$(".cancelBtn").click(function(){
			$(".megamiMoreagainBox").hide("fast");
			$(".blackback").hide("fast");
			$(".productLightboxDetal").hide("slow");
			$(".megamiNextBox").show("fast");
			$(".Qbox").hide("fast");
			$(".megamiContentword").html("勇者啊，請問您在尋找什麼呢？");
	
			$(".megamiBg").fadeIn("slow");
		});
	
		$(".megamiMoreagainBox").click(function(){
			$(".megamiMoreagainBox").hide("fast");
			$(".productLightbox").hide("slow");
			$(".megamiNextBox").show("fast");
			$(".megamiContentword").html("勇者啊，請問您在尋找什麼呢？");
		
		});
	}

		function reLoad(){
			
				location.reload();
			
		}
		
		$(window).on('resize', function() {
      		reLoad()
    	});

});