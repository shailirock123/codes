<?php
include("db.php");
$userid = $_POST['userid'];
	$sql = "SELECT * FROM qualification where user_id='$userid'";
	$data = mysqli_query($con,$sql);
	while($row = mysqli_fetch_assoc($data)) {
		$data1[]=$row;
	}
	echo json_encode($data1);

 ?>