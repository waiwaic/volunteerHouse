function comments(){
var xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function(){
  if (xmlhttp.readyState==4 && xmlhttp.status==200){
    document.getElementById("comments").innerHTML=xmlhttp.responseText;
  }
}
xmlhttp.open("POST","/php/comment.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send(name=document.getElementById("name").innerHTML&comment=document.getElementById("comments").innerHTML);
}
