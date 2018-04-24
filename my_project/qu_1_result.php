<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php
require_once("connect_server.php");
$dept_name=$_POST['dept_name'];
$project_name=$_POST['project_name'];
$project_location=$_POST['project_location'];
$sql="SELECT DISTINCT employee.emp_name, employee.emp_id,dept.dept_name,address.city,project.project_name,project.project_location
FROM employee,dept,project,ft_pt_work,address
WHERE employee.emp_id=ft_pt_work.emp_id AND ft_pt_work.project_id=project.project_id AND employee.dept_id=dept.dept_id AND employee.emp_id=address.emp_id
AND project.project_name like '%$project_name%' AND project.project_location like '%$project_location%' AND dept.dept_name like '%$dept_name%'
GROUP BY employee.emp_id";
$result=mysqli_query($conn,$sql);

   ?>

   <link rel="stylesheet" type="text/css" href="query_style.css">
   <link rel="stylesheet" type="text/css" href="home_button.css">
  </head>
  <body>
    <h1 class="header">Query One Result</h1>
    <div>
      <table>
      <tr>
        <th>Employee Name</th>
        <th>Employee ID</th>
        <th>Department Name</th>
        <th>City</th>
        <th>Project Name</th>
        <th>Project Location</th></th>

      </tr>
      <?php

 while ($row=mysqli_fetch_assoc($result))

   {
    echo "<tr>
      <td>$row[emp_name]</td>
      <td>$row[emp_id]</td>
      <td>$row[dept_name]</td>
      <td>$row[city]</td>
      <td>$row[project_name]</td>
      <td>$row[project_location]</td>
    </tr>";
  }
 ?>
    </table>
    </div>
  </div>
  <div class="bt">
   <a href="index.php"><button>Back To Home</button></a>
 </div>
  </body>
</html>
