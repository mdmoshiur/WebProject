<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php
require_once("connect_server.php");
$sql="SELECT * from address";
$result=mysqli_query($conn,$sql);

   ?>

   <link rel="stylesheet" type="text/css" href="query_style.css">
   <link rel="stylesheet" type="text/css" href="home_button.css">
  </head>
  <body>
    <h1 class="header">Employee's Address Table</h1>
    <div>
      <table>
      <tr>
        <th>Employee ID</th>
        <th>Street NO</th>
        <th>Street Name</th>
        <th>City</th>
        <th>Zip Code</th></th>
      </tr>
      <?php

 while ($row=mysqli_fetch_assoc($result))

   {
    echo "<tr>
      <td>$row[emp_id]</td>
      <td>$row[street_no]</td>
      <td>$row[street_name]</td>
      <td>$row[city]</td>
      <td>$row[zip_code]</td>
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
