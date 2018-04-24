<?php

require_once("connect_server.php");
$dept_id=$_POST['dept_id'];
$dept_name=$_POST['dept_name'];
$dept_location=$_POST['dept_location'];
$sql="insert into dept values('$dept_id','$dept_name','$dept_location')";
$result=mysqli_query($conn,$sql);
if($result)
{
   echo "data insertd";
}

header("refresh:2; url=index.html");
 ?>
 
