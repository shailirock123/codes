<?php 
include ("db.php");
$name = $_POST['name']; 
$email = $_POST['email']; 
$gender = $_POST['gender']; 
$qualification = $_POST['qualification'];
$insertSql = "INSERT INTO user (name,email,gender) VALUES('$name','$email','$gender')";
if (mysqli_query($con, $insertSql))
{
  	$user_id = mysqli_insert_id($con);
  	foreach ($qualification as $q) 
  	{
  		$qSql = "INSERT INTO qualification (user_id,qualification) VALUES('$user_id','$q')";
  		mysqli_query($con, $qSql);
  	}
}
   else
{
  	echo "Error: " . $insertSql . "<br>" . mysqli_error($conn);
}
?> 
