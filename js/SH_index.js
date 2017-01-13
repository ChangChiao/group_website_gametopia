window.addEventListener("load", init);

function init(){


	var notDefault = $("button").not("#default");
	notDefault.hover(
		function(){ /*mouseEnter*/
		$("button#default").removeClass("default");
	}, function(){ /*mouseLeave*/
		$("button#default").addClass("default");
	});

	$("button.megami").mouseenter(function(){
		$(".consoleImg").addClass('opac');
		$(".consoleImg").attr("src","images/SH_indexgive.png");
	});
	$("button.SH_search").mouseenter(function(){
		$(".consoleImg").addClass('opac');
		$(".consoleImg").attr("src","images/SH_searchproduct.png");
	});
	$("button.sold").mouseenter(function(){
		$(".consoleImg").addClass('opac');
		$(".consoleImg").attr("src","images/SH_sell.png");
	});



	$("button.optionBar").mouseleave(function(){
		$(".consoleImg").removeClass('opac');
		$(".consoleImg").addClass('kieru');
		$(".consoleImg").attr("src","images/SH_indexgive.png");
	});



	$("button.optionBar").sparkle();
	$(".container").sparkle();
}
