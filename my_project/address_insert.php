<?php
require_once("connect_server.php");
$emp_id=$_POST['emp_id'];
$street_no=$_POST['street_no'];
$street_name=$_POST['street_name'];
$city=$_POST['city'];
$zip_code=$_POST['zip_code'];
$sql="insert into address values('$emp_id','$street_no','$street_name','$city','$zip_code')";
$result=mysqli_query($conn,$sql);
if($result)
{
  echo "data inserted";
}
header("refresh:2; url=index.html");
 ?>
 
