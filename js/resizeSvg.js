window.addEventListener("load", resizeSvg);


function resizeSvg(){
	var ScrWidth = $(window).width();
	var n;
	// console.log(ScrWidth);
	
	if ( ScrWidth >= 1200) {
		n=1170;
	}else if( ScrWidth >=992 ){
		n=970;
	}else if( ScrWidth >=768 ){
		n=850;
	}else{
		n = $(window).width();
	}

	$("#psSvg").attr("width", (n*1*0.8) + "px");
	$("#psSvg").attr("height", (n*.5625*0.8) + "px");
}

window.addEventListener("resize", resizeSvg);