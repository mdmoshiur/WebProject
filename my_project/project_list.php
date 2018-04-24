<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php
require_once("connect_server.php");
$sql="SELECT * from project;";
$result=mysqli_query($conn,$sql);

   ?>

   <link rel="stylesheet" type="text/css" href="query_style.css">
   <link rel="stylesheet" type="text/css" href="home_button.css">
  </head>
  <body>
    <h1 class="header">Project Lists</h1>
    <div>
      <table>
      <tr>
        <th>Project ID</th>
        <th>Project Name</th>
        <th>Project Location</th>
      </tr>
      <?php

 while ($row=mysqli_fetch_assoc($result))

   {
    echo "<tr>
      <td>$row[project_id]</td> 
      <td>$row[project_name]</td>
      <td>$row[project_location]</td> 
    </tr>";
  }
 ?>
    </table>
    </div>

   </div>
  </div>
  <div class="bt">
   <a href="index.html"><button>Back To Home</button></a>
 </div>

  </body>
</html>
