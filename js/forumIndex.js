window.addEventListener("load", init);

function init(){


	var notDefault = $("button").not("#default");
	notDefault.hover(
		function(){ /*mouseEnter*/
		$("button#default").removeClass("default");
	}, function(){ /*mouseLeave*/
		$("button#default").addClass("default");
	});

	$("button.ps").mouseenter(function(){
		$(".consoleImg").addClass('opac');
		$(".consoleImg").attr("src","images/ps4.png");
	});
	$("button.xbox").mouseenter(function(){
		$(".consoleImg").addClass('opac');
		$(".consoleImg").attr("src","images/xbox360v.png");
	});
	$("button.wii").mouseenter(function(){
		$(".consoleImg").addClass('opac');
		$(".consoleImg").attr("src","images/wii_console.png");
	});
	$("button.pc").mouseenter(function(){
		$(".consoleImg").addClass('opac');
		$(".consoleImg").attr("src","images/pc.png");
	});
	$("button.handheld").mouseenter(function(){
		$(".consoleImg").addClass('opac');
		$(".consoleImg").attr("src","images/n3ds.png");
	});
	$("button.mobile").mouseenter(function(){
		$(".consoleImg").addClass('opac');
		$(".consoleImg").attr("src","images/iphonese.png");
	});



	$("button.optionBar").mouseleave(function(){
		$(".consoleImg").removeClass('opac');
		$(".consoleImg").attr("src","images/ps4.png");
	});



	$("button.optionBar").sparkle();
	$(".container").sparkle();
}
