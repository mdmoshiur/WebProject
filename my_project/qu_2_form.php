<?php

require_once("connect_server.php");

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="form_style.css">
  </head>
  <body>
    <div class="header">
    <h2>Query Two</h2>
  </div>

    <form class="" action="query2_result.php" method="post">

       <div class="input-group">
      <label>Project Name</label>
       <input type="text" name="project_name" placeholder="enter project name" value=""required>
     </div>

       <div class="input-group">
      <label>Project Location</label>
       <input type="text" name="project_location" placeholder="enter project location" value=""required>
     </div>

      <div class="input-group">
      <label>Department</label>
      <select  name="dept_name">
      <option value="Engineering">Engineering</option>
      <option value="Foreman">Foreman</option>
      <option value="Labour">Labour</option>
      </select>
      </div>

      <div class="input-group">
     <label>Works hours</label>
      <input type="number" name="hours" placeholder="works hours" value=""required>
    </div>

      <div class="input-group">
      <button type="submit" class="btn" name="" value="submit">Submit</button>
      </div>

    </form>

  </body>
</html>
