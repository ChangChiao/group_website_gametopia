function doFirst(){
 //先跟HTML畫面產生關聯，再建事件聆聽的功能
 image=document.getElementById('finalRole');
 image.addEventListener('dragstart',startDrag,false);
 image.addEventListener('dragend',endDrag,false);

 leftbox=document.getElementById('roleFinal');
 leftbox.addEventListener('dragenter',function(e){e.preventDefault()},false);
 leftbox.addEventListener('dragover',function(e){e.preventDefault()},false);
 leftbox.addEventListener('drop',dropped,false);
 
}
function startDrag(e){
 var data = document.getElementById('roleTransId').innerHTML.replace('id="finalRole"' , 'id="dragRolePosition"');
 // var data = document.getElementById('finalRole');
 // var data = document.getElementById('roleFinal');
 
 console.log('okok');
 // var data = document.getElementById('roleFinalPicture').src = "images/female_passionate_action.png";
 e.dataTransfer.setData('image/png',data);
}


function endDrag(){
 // image.style.visibility='hidden';
}


function dropped(e){
 e.preventDefault();
 dragRole.innerHTML+=e.dataTransfer.getData('image/png');

}
window.addEventListener('load',doFirst,false);