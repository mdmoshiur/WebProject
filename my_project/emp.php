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
    <h2>Employee</h2>
  </div>

    <form class="" action="emp_insert.php" method="post">
      <div class="input-group">
      <label>Employee ID</label>
      <input type="number" name="emp_id" value=""required>
      </div>
      <div class="input-group">
      <label>Employee Name</label>
      <input type="text" name="emp_name" value=""required>
      </div>

      <div class="input-group">
      <label>Department ID</label>
      <input type="number" name="dept_id" value=""required>
      </div>

      <div class="input-group">
      <label>Type of work</label>
      <select  name="type_of_work">
      <option value="F">F</option>
      <option value="P">P</option>
      </select>
      </div>


      <div class="input-group">
      <label>Hourly Rate</label>
      <input type="number" name="hourly_rate" value="" min="25" max="60" required>
      </div>
      <div class="input-group">
      <button type="submit" class="btn" name="" value="submit">Submit</button>
      </div>

    </form>

  </body>
</html>
