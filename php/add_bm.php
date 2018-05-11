<?php
ini_set("display_errors","off");
$name = $_POST['name'];
$phoneNum = $_POST['phoneNum'];
$type = $_POST['type'];

$conn = mysqli_connect('localhost','root','','thehomeofvolunteers');
if(!$conn){
	echo "<script>
		alert('sorry,connect error .Please contact the developer!');
		window.history.back();
		</script>
		";
}else{
	mysqli_query($conn,"set names utf8");
	$add = "insert into t_volunteer(name,phoneNum,type) values('$name','$phoneNum','$type')";
	$end = mysqli_query($conn,$add);
	if(!$end){
		echo "<script>
		alert('sorry,submit error:data error,please submit again');
		window.history.back();
		</script>
		";
	}else{
		echo "<script>
		alert('Add success');
		window.location.href='../bm.html';
		</script>
		";
	}
}

?>