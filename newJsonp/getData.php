<?php 
	include("inc/dbconn.php");
	$callback = $_GET["callback"];
	$sql = "select * from goods order by  Id desc limit 0,6";
	$result = $conn->query($sql);

	if ($result->num_rows > 0){
		$data["success"] = 1;

		while($row = mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		$data["result"] = $list;
	}else{
		$data["success"] = 0;
	}

	echo "$callback('" .json_encode($data) . "')";
?>