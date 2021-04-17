<?php
include("db.php");
	$sql = "SELECT * FROM user";
	$data = mysqli_query($con,$sql);
	while($row = mysqli_fetch_assoc($data)) {
		$data1[]=$row;
	}
	echo json_encode($data1);

 ?>