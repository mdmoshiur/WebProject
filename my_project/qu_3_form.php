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
    <h2>Query Three</h2>
  </div>

    <form class="" action="query3_result.php" method="post">

       <div class="input-group">
      <label>Project Location</label>
       <input type="text" name="project_location" placeholder="enter project location" value=""required>
     </div>

      <div class="input-group">
     <label>Department location != </label>
      <input type="text" name="dept_location" placeholder="dept location" value=""required>
    </div>

      <div class="input-group">
      <button type="submit" class="btn" name="" value="submit">Submit</button>
      </div>

    </form>

  </body>
</html>
