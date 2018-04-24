<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php
require_once("connect_server.php");
$sql="SELECT * from ft_pt_work;";
$result=mysqli_query($conn,$sql);

   ?>

   <link rel="stylesheet" type="text/css" href="query_style.css">
   <link rel="stylesheet" type="text/css" href="home_button.css">
  </head>
  <body>
    <h1 class="header">Work Details Table</h1>
    <div>
      <table>
      <tr>
        <th>Employee ID</th>
        <th>Department ID</th>
        <th>Number of Hours</th>
        <th>Work Date</th>
        <th>Project ID</th>
      </tr>
      <?php

 while ($row=mysqli_fetch_assoc($result))

   {
    echo "<tr>
      <td>$row[emp_id]</td>
      <td>$row[dept_id]</td>
      <td>$row[num_of_hours]</td>
      <td>$row[works_date]</td>
      <td>$row[project_id]</td>
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
