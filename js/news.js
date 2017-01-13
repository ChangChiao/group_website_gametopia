function doFirst(){
	var tabs= document.getElementsByClassName('tab');
	// 頁籤增加事件
	for (var i = 0; i < tabs.length; i++) {
		tabs[i].addEventListener('click', chooseTabs, false);
	}
}
function chooseTabs() {
	// 更換頁面
	var radioBtn= document.getElementsByName('tabs');
	if(this.id== 'tab_1')
		radioBtn[0].checked= true;
	else if(this.id== 'tab_2')
		radioBtn[1].checked= true;
	else if(this.id== 'tab_3')
		radioBtn[2].checked= true;
}
window.addEventListener('load', doFirst, false);