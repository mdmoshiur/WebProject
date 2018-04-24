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
    <h2>Query Four</h2>
  </div>

    <form class="" action="query4_result.php" method="post">

       <div class="input-group">
      <label>Project Name</label>
       <input type="text" name="project_name1" placeholder="enter project name" value=""required>
     </div>

     <div class="input-group">
    <label>Another Project Name</label>
     <input type="text" name="project_name2" placeholder="enter project name" value=""required>
   </div>

      <div class="input-group">
      <button type="submit" class="btn" name="" value="submit">Submit</button>
      </div>

    </form>

  </body>
</html>
