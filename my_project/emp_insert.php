<?php
require_once("connect_server.php");
$emp_id=$_POST['emp_id'];
$emp_name=$_POST['emp_name'];
$dept_id=$_POST['dept_id'];
$type_of_work=$_POST['type_of_work'];
$hourly_rate=$_POST['hourly_rate'];
$sql="insert into employee values('$emp_id','$emp_name','$dept_id','$type_of_work','$hourly_rate')";
$result=mysqli_query($conn,$sql);
if($result)
{
  echo "data insertd";
}

header("refresh:2; url=index.html");
 ?>
 
