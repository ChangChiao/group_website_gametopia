function doFirst(){
	//=============註冊四張小圖=============
	gradePoint= 0;
	pic= [];
	pic[1]= document.getElementById("pic1");
	pic[2]= document.getElementById("pic2");
	pic[3]= document.getElementById("pic3");
	pic[4]= document.getElementById("pic4");
	document.getElementById("prodBigImg").src= pic[1].src;
	for (var i = 1; i < pic.length; i++) {
		pic[i].addEventListener('click', popOut, false);
	}
	pic[1].style.opacity= "1";
	pic[1].style.width= "120%";
	pic[1].style.height= "120%";
	pic[2].style.opacity= "0.5";
	pic[3].style.opacity= "0.5";
	pic[4].style.opacity= "0.5";
	//=============註冊輸入評論的星星=============
	star= [];
	star= document.getElementsByClassName("starImg");
	for (var i = 0; i < star.length; i++) {
		star[i].addEventListener('mouseover', starlight, false);
		star[i].addEventListener('mouseout', starlock, false);
		star[i].addEventListener('click', starclick, false);
	}
}
function popOut(){
// 點取圖片顯示
	if (this.style.opacity== "0.5") {
		for (var i = 1; i < pic.length; i++) {
			if (this== pic[i]) {
				pic[i].style.opacity= "1";
				pic[i].style.width= "120%";
				pic[i].style.height= "120%";
				document.getElementById("prodBigImg").src= pic[i].src;
			}else{
				pic[i].style.opacity= "0.5";
				pic[i].style.width= "100%";
				pic[i].style.height= "100%";
			}
		}
	}
}
function starlight(){
// 滑鼠滑到哪 星星亮到哪
	var x= this.id.split("r");
	for (var i = 0; i < star.length; i++) {
		var y= star[i].id.split("r");
		if ( parseInt(x[1]) >= parseInt(y[1]) ) {
			star[i].style.backgroundColor= "#fa0";
		}else{
			star[i].style.backgroundColor= "";
		}
	}
}
function starlock(){
// 離開時將將紀錄的評分轉換成星星亮起來
	for (var i = 0; i < star.length; i++) {
		var x= star[i].id.split("r");
		if ( parseInt(x[1]) <= gradePoint ) {
			star[i].style.backgroundColor= "#fa0";
		}else{
			star[i].style.backgroundColor= "";
		}
	}
	document.getElementById("grade").value= gradePoint;
}
function starclick(){
// 點擊時傳入分數到input
	var x= this.id.split("r");
	for (var i = 0; i < star.length; i++) {
		var y= star[i].id.split("r");
		if ( parseInt(x[1]) >= parseInt(y[1]) ) {
			star[i].style.backgroundColor= "#fa0";
		}else{
			star[i].style.backgroundColor= "";
		}
	}
	gradePoint= parseInt(x[1]);
}
window.addEventListener('load', doFirst, false);