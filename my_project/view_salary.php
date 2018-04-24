<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php
require_once("connect_server.php");
$sql="SELECT * from salary;";
$result=mysqli_query($conn,$sql);

   ?>

   <link rel="stylesheet" type="text/css" href="query_style.css">
   <link rel="stylesheet" type="text/css" href="home_button.css">
  </head>
  <body>
    <h1 class="header">Employee's Salary</h1>
    <div>
      <table>
      <tr>
        <th>Employee ID</th>
        <th>Basic</th>
        <th>Salary Date</th>
      </tr>
      <?php

 while ($row=mysqli_fetch_assoc($result))

   {
    echo "<tr>
      <td>$row[emp_id]</td>
      <td>$row[basic]</td>
      <td>$row[salary_date]</td>
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
