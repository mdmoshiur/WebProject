<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    require_once("connect_server.php");
    $project_name=$_POST['project_name'];
    $sql="SELECT employee.emp_name,ft_pt_work.num_of_hours,ft_pt_work.works_date,project.project_name
    from employee,ft_pt_work,project
    where employee.emp_id=ft_pt_work.emp_id and ft_pt_work.project_id=project.project_id and project.project_name like '%$project_name%'";
    $result=mysqli_query($conn,$sql);
     ?>
      <link rel="stylesheet" type="text/css" href="query_style.css">
      <link rel="stylesheet" type="text/css" href="home_button.css">
  </head>
  <body>
    <h1 class="header">Search Results</h1>
    <div>
      <table>
      <tr>
        <th>Employee Name</th>
        <th>Number of hours</th>
        <th>Works Date</th>
        <th>Project Name</th>
      </tr>
      <?php

    while($row=mysqli_fetch_assoc($result))
    {
    echo "<tr>
      <td>$row[emp_name]</td>
      <td>$row[num_of_hours]</td>
      <td>$row[works_date]</td>
      <td>$row[project_name]</td>
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
