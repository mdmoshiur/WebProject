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
    <h2>Search Employee Name</h2>
    </div>
    <form class="" action="search_emp_result.php" method="post">
    <div class="input-group">
      <label>Employee Name</label>
      <input type="text" name="emp_name" placeholder="Employee Name" value=""required>
    </div>

      <div class="input-group">
      <button type="submit" class="btn" name="" value="submit">Search</button>
      </div>

    </form>

  </body>
</html>
