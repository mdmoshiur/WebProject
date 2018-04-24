<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    require_once("connect_server.php");
    $dept_location=$_POST['dept_location'];
    $project_location=$_POST['project_location'];
    $sql="SELECT DISTINCT employee.emp_name, address.street_no, address.street_name,address.city,address.zip_code,project.project_location,
    dept.dept_location
    FROM employee,dept,project,ft_pt_work,address
     WHERE employee.emp_id=ft_pt_work.emp_id AND ft_pt_work.project_id=project.project_id AND employee.dept_id=dept.dept_id AND employee.emp_id=address.emp_id AND
       project.project_location like '%$project_location%' AND dept.dept_location NOT like '%$dept_location%'";
    $result=mysqli_query($conn,$sql);
     ?>
      <link rel="stylesheet" type="text/css" href="query_style.css">
      <link rel="stylesheet" type="text/css" href="home_button.css">
  </head>
  <body>
    <h1 class="header">Query Three Result</h1>
<table>
  <tr>
    <th>Employee name</th>
    <th>Street no</th>
    <th>Street name</th>
    <th>City</th>
    <th>Zip code</th>
    <th>Project location</th>
    <th>Department location</th>
  </tr>
<?php
while($row=mysqli_fetch_array($result))
{
  echo "<tr>
    <td>$row[emp_name]</td>
    <td>$row[street_no]</td>
    <td>$row[street_name]</td>
    <td>$row[city]</td>
    <td>$row[zip_code]</td>
    <td>$row[project_location]</td>
    <td>$row[dept_location]</td>
  </tr>";
}
 ?>
</table>
</div>
<div class="bt">
 <a href="index.html"><button>Back To Home</button></a>
</div>
  </body>
</html>
