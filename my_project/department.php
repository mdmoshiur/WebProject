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
    <h2>Department</h2>
    </div>
    <form class="" action="dept_insert.php" method="post">
    <div class="input-group">
      <label>Department ID</label>
      <input type="number" name="dept_id" placeholder="Department ID" value=""required>
    </div>

    <div class="input-group">
      <label>Department Name</label>
      <select  name="dept_name">
        <option value="Engineering">Engineering</option>
          <option value="Foreman">Foreman</option>
            <option value="Labour">Labour</option>
      </select>
    </div>


      <div class="input-group">
      <label>Department Location</label>
      <input type="text" name="dept_location" placeholder="Department location" value=""required>
    </div>

      <div class="input-group">
      <button type="submit" class="btn" name="" value="submit">Submit</button>
      </div>

    </form>

  </body>
</html>
