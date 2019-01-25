<?php 
	$user = $_GET["user"];
	$pw = $_GET["pw"];

	if ($user == "admin" && $pw == "123"){
		$data["success"] = 1;
	}else{
		$data["success"] = 0;
		$data["error_msg"] = '用户名或密码错误!';
	}
	echo json_encode($data);
 ?>