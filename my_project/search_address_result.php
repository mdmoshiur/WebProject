<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    require_once("connect_server.php");
    $city=$_POST['city'];
    $sql="SELECT employee.emp_name,dept.dept_name,address.city,address.street_no,address.street_name,employee.type_of_work,salary.basic + salary.basic*.21 as net_salary
FROM employee,dept,address,salary
WHERE employee.emp_id=salary.emp_id AND employee.emp_id=address.emp_id AND employee.dept_id=dept.dept_id AND
address.city like '%$city%' group by employee.emp_name;";
    $result=mysqli_query($conn,$sql);
     ?>
      <link rel="stylesheet" type="text/css" href="query_style.css">
      <link rel="stylesheet" type="text/css" href="home_button.css">
  </head>
  <body>
    <h1 class="header">Search Results</h1> 
    <table>
    <tr>
      <th>Employee Name</th>
      <th>Department Name</th>
      <th>City</th>
      <th>Street No</th>
      <th>Sreet Name</th>
      <th>Type of Works</th>
      <th>Net Salary</th>
    </tr>

    <?php
    while ($row=mysqli_fetch_assoc($result))
    {
    echo "<tr>
    <td>$row[emp_name]</td>
    <td>$row[dept_name]</td>
    <td>$row[city]</td>
    <td>$row[street_no]</td>
    <td>$row[street_name]</td>
    <td>$row[type_of_work]</td>
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
