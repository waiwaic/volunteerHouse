function comments(){
var xmlhttp;
if (window.XMLHttpRequest){
    //  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
    xmlhttp=new XMLHttpRequest();
}
else{
    // IE6, IE5 浏览器执行代码
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("comments").innerHTML=xmlhttp.responseText;
    }
  }
var name=document.getElementById("name").innerHTML;
var comment=document.getElementById("comment").innerHTML;
xmlhttp.open("POST","/php/comment.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send(name=document.getElementById("name").innerHTML&comment=document.getElementById("comments").innerHTML);
}
