<?php
	include("inc/dbconn.php");
	include("init.inc.php");
	date_default_timezone_set('PRC'); //设置中国时区 
	//获取手机信息
	$sql = "select * from goods order by Id limit 0,3";
	$result = $conn->query($sql);

	if ($result->num_rows > 0 ){
		while($row = mysqli_fetch_assoc($result)){
			$phone[] = $row;
		}
	}
	$smarty->assign("aaa",$phone);
	$smarty->display("index.html");
?>