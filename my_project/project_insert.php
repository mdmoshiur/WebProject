<?php
require_once("connect_server.php");
$project_id=$_POST['project_id'];
$project_name=$_POST['project_name'];
$project_location=$_POST['project_location'];
$sql="insert into project values('$project_id','$project_name','$project_location')";
$result=mysqli_query($conn,$sql);
if($result)
{
  echo "data inserted";
}
header("refresh:2; url=index.php");
 ?>

