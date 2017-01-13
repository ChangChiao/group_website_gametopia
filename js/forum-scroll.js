function doc_scroll(){
	$('html, body').animate({scrollTop: $('.uiBtns').offset().top -10},650);
}
window.addEventListener("load",doc_scroll);

