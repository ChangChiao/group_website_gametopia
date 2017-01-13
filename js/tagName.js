window.addEventListener("load", tagClass);

function tagClass(){
	var tags = document.getElementsByClassName("tagName");
	for(var i=0;i<tags.length;i++){
		switch(tags[i].innerText){
			case "PS4":
				tags[i].style.backgroundColor = "#0072BC";
				break;
			case "Wii":
				tags[i].style.backgroundColor = "#C05459";
				break;
			case "PC":
				tags[i].style.backgroundColor = "#A865A8";
				break;
			case "XBOX":
				tags[i].style.backgroundColor = "#7CC576";
				break;
		}
	}
	
		
}