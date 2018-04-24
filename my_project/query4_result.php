<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    require_once("connect_server.php");
    $project_name1=$_POST['project_name1'];
    $project_name2=$_POST['project_name2'];
    $sql="SELECT employee.emp_name,employee.emp_id,dept.dept_name, address.street_name,address.city
      FROM employee,dept,project,ft_pt_work,address
       WHERE employee.emp_id=ft_pt_work.emp_id AND ft_pt_work.project_id=project.project_id AND employee.dept_id=dept.dept_id AND employee.emp_id=address.emp_id AND project.project_name like '%$project_name1%' AND employee.emp_name IN (SELECT employee.emp_name
          FROM employee,project,ft_pt_work
          WHERE employee.emp_id=ft_pt_work.emp_id AND ft_pt_work.project_id=project.project_id AND project.project_name like '%$project_name2%')";
    $result=mysqli_query($conn,$sql);
     ?>
      <link rel="stylesheet" type="text/css" href="query_style.css">
      <link rel="stylesheet" type="text/css" href="home_button.css">
  </head>
  <body>
    <h1 class="header">Query Four Result</h1>
<table>
  <tr>
    <th>Employee name</th>
    <th>Employee ID</th>
    <th>Department name</th>
    <th>Steet Name</th>
    <th>City</th>
  </tr>
<?php

while($row=mysqli_fetch_array($result))
{
  echo "<tr>
    <td>$row[emp_name]</td>
    <td>$row[emp_id]</td>
    <td>$row[dept_name]</td>
    <td>$row[street_name]</td>
    <td>$row[city]</td>
  </tr>";
}
 ?>
</table>
</div>
<div class="bt">
 <a href="index.php"><button>Back To Home</button></a>
</div>
  </body>
</html>
