function doFirst(){
	// 標籤設定
	var color= ['#0072BC', '#7CC576', '#C05459', '#A865A8'];
	for (var i = 1; i <= 4; i++) {
		var tag= "tag_"+i;
		k=$('.'+ tag).text();

		if( k== "")
			$('.'+ tag).css('display', 'none');
		else{
			var borderColor= "transparent "+ color[i-1]+ " transparent "+ color[i-1];
			$('#'+ tag).css('borderColor', borderColor);
			$('.'+ tag).css('backgroundColor', color[i-1]);
		}
	}

	// 確認資料是否有內容
	if ($("#i1").attr('src')== "") { $("#i1").parent().remove(); }
	if ($("#i2").attr('src')== "") { $("#i2").parent().remove(); }
	if ($("#i3").attr('src')== "") { $("#i3").parent().remove(); }
	if ($("#paragragh_1").text()== "") { $("#paragragh_1").remove() }
	if ($("#paragragh_2").text()== "") { $("#paragragh_2").remove() }
	if ($("#paragragh_3").text()== "") { $("#paragragh_3").remove() }

	
}
window.addEventListener('load', doFirst, false);