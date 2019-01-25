<?php
	include("inc/dbconn.php");
	$page = $_GET["page"];
	$page=($page-1)*4;
	$sql = "select * from goods order by Id desc limit $page,4";
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