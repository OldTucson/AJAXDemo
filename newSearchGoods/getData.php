<?php
	include("inc/dbconn.php");
	$key = $_GET["key"];
	$sql = "select Id,goodsName from goods where goodsName like '$key%' order by Id desc limit 0,6";
	$result = $conn->query($sql);
	if($result->num_rows>0){
		while ($row = mysqli_fetch_assoc($result)) {
			$list[] = $row;
		}
		$data["success"] = 1;
		$data["list"] = $list;
	}else{
		$data["success"] = 0;
	}

	echo json_encode($data);
?>