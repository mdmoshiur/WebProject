<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php
require_once("connect_server.php");
$sql="SELECT * from employee";
$result=mysqli_query($conn,$sql);

   ?>

   <link rel="stylesheet" type="text/css" href="query_style.css">
   <link rel="stylesheet" type="text/css" href="home_button.css">
  </head>
  <body>
    <h1 class="header">Employee Table</h1>
    <div>
      <table>
      <tr>
        <th>Employee ID</th>   
        <th>Employee Name</th>
        <th>Department ID</th>
        <th>Type of Work</th>
        <th>Hourly Rate</th></th>
      </tr>
      <?php

 while ($row=mysqli_fetch_assoc($result))

   {
    echo "<tr>
      <td>$row[emp_id]</td>
      <td>$row[emp_name]</td>
      <td>$row[dept_id]</td>
      <td>$row[type_of_work]</td>
      <td>$row[hourly_rate]</td>
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
