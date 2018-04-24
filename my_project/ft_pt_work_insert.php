
 <?php
 require_once("connect_server.php");
 $emp_id=$_POST['emp_id'];
 $dept_id=$_POST['dept_id'];
 $num_of_hours=$_POST['num_of_hours'];
 $works_date=$_POST['works_date'];
 $project_id=$_POST['project_id'];
 $sql="insert into ft_pt_work values('$emp_id','$dept_id','$num_of_hours','$works_date',$project_id)";
 $result=mysqli_query($conn,$sql);
 if($result)
 {
 echo "data inserted";
 }
 header("refresh:2; url=index.php");
  ?>
 
