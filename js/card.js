
function resetText(id){
   //恢復文字
   if(id.value == "")
   {
   id.value = id.defaultValue;
   id.className ="textarea";   
   }
}
function clearText(id){ 
  //清除文字
  id.value = "";
  d.className = "";   
}