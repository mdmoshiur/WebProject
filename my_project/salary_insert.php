<?php

require_once("connect_server.php");

$emp_id=$_POST['emp_id'];
$basic=$_POST['basic'];
$salary_date=$_POST['salary_date'];
$sql="insert into salary values('$emp_id','$basic','$salary_date')";
$result=mysqli_query($conn,$sql);
if($result)
{
  echo "data inserted";
}
header("refresh:2; url=index.html");

?>

