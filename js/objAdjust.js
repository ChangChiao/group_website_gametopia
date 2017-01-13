window.addEventListener("load", adjustPos);

function adjustPos(){
	var consoleTitle = $("h1.consoleTitle");
	var consoleImg = $(".banner > img");
	switch($.trim(consoleTitle.text())){
		case "WII":
			consoleTitle.css("right", "-22px");
			consoleImg.css("top", "57px");
			break;
		case "XBOX":
			consoleTitle.css("right", "0px");
			consoleImg.css("top", "77px");
			break;
		case "MOBILE":
			consoleTitle.css("right", "18px");
			consoleImg.css("top", "53px");
			break;
	}
}