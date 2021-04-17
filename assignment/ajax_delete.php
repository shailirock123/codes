<?php
include('db.php');
$id = $_POST['id'];
$sql = "DELETE FROM user WHERE id='$id'";
$result = mysqli_query($con,$sql);
if($result){
  echo "success";
}
else{
  echo "error";
}

 ?>