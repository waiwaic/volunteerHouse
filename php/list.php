<?php
	$page = $_POST['page'] * 2 + 1;
	$conn = mysqli_connect('localhost','root','','thehomeofvolunteers');
	if(!$conn){
		echo "<div class='text-center'>
								<h3>sorry,connect error .Please contact the developer!</h3>
					</div>";
	}else{
		mysqli_query($conn,"set names utf8");
		$search = "select * from t_volunteer order by id desc limit 0,$page";
		//echo $search;
		$end = mysqli_query($conn,$search);
		if(!$end){
			echo "<div class='text-center'>
								<h3>sorry,connect error .Please contact the developer!</h3>
					</div>";
		}else{
			$sign = 1;
			while($row = mysqli_fetch_array($end)){
				$sign_boolean = true;
				if($sign < $page){
					echo '<div class="panel panel-default cg-to">
								<div class="panel-body">
									<h5>姓名：'.$row['name'].'</h5>
									<p>报名项目：'.$row['type'].'</p>
									<p>联系电话：'.$row['phoneNum'].' </p>
								</div>
								</div>';		
					$sign++;	
					$sign_boolean = false;	
				}				
			}
			if($sign_boolean){
				echo '<div class="text-center">
							<a href="javaScript:void(0)" onclick="getMsg();">更多</a>
						</div>';
			}else{
				echo '<div class="text-center">
							<h5>没有更多了！</h5>
						</div>';
			}
		}
	}

?>