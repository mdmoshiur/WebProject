<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php
require_once("connect_server.php");
$sql="SELECT DISTINCT employee.emp_name,dept.dept_name,address.city,employee.type_of_work,salary.basic,0.45*salary.basic as allowance,0.24*salary.basic as deduction,salary.basic+0.21*salary.basic as net_salary
FROM employee,dept,address,salary
WHERE employee.emp_id=salary.emp_id AND employee.dept_id=dept.dept_id AND employee.emp_id=address.emp_id
GROUP BY employee.emp_id";
$result=mysqli_query($conn,$sql);

   ?>

   <link rel="stylesheet" type="text/css" href="query_style.css">
   <link rel="stylesheet" type="text/css" href="home_button.css">
  </head>
  <body>
    <h1 class="header">View Table</h1>
    <div>
      <table>
      <tr>
        <th>Employee Name</th>
        <th>Department Name</th>
        <th>City</th>
        <th>Type of Work</th>
        <th>Basic</th></th>
        <th>Allowance</th>
        <th>Deduction</th>
        <th>Net salary</th>
      </tr>
      <?php

 while ($row=mysqli_fetch_assoc($result))

   {
    echo "<tr>
      <td>$row[emp_name]</td>
      <td>$row[dept_name]</td>
      <td>$row[city]</td>
      <td>$row[type_of_work]</td>
      <td>$row[basic]</td>
      <td>$row[allowance]</td>
      <td>$row[deduction]</td>
      <td>$row[net_salary]</td>
    </tr>";
  }
 ?>
    </table>
    </div>
  </div>
  <div class="bt">
   <a href="index.html"><button>Back To Home</button></a>
 </div>
  </body>
</html>
