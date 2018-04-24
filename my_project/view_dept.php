<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php
require_once("connect_server.php");
$sql="SELECT * from dept;";
$result=mysqli_query($conn,$sql);

   ?>

   <link rel="stylesheet" type="text/css" href="query_style.css">
   <link rel="stylesheet" type="text/css" href="home_button.css">
  </head>
  <body>
    <h1 class="header">Department Table</h1>
    <div>
      <table>
      <tr>
        <th>Department ID</th>
        <th>Department Name</th>
        <th>Department Location</th>
      </tr>
      <?php

 while ($row=mysqli_fetch_assoc($result))

   {
    echo "<tr>
      <td>$row[dept_id]</td>
      <td>$row[dept_name]</td>
      <td>$row[dept_location]</td>
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
