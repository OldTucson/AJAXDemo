<?php 
	include("inc/dbconn.php");

	$user = $_GET["user"];
	$sql = "select * from admin where usr = '$user'";
	$result = $conn->query($sql);
	if($result->num_rows>0){
		$status = 1;
	}else{
		$status = 0;
	}
	echo $status;
?>