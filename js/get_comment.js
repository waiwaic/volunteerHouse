var xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function(){
  if (xmlhttp.readyState==4 && xmlhttp.status==200){
    document.getElementById("comments").innerHTML=xmlhttp.responseText;
  }
}
xmlhttp.open("GET","/php/comment.php",true);
xmlhttp.send();
