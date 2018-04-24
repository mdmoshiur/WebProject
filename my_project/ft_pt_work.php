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
    <h2>Ft-Pt-Work</h2>
    </div>

     <form class="" action="ft_pt_work_insert.php" method="post">
       <div class="input-group">
      <label>Employee ID</label>
       <input type="number" name="emp_id" value=""required>
     </div>

       <div class="input-group">
      <label>Department ID</label>
       <input type="number" name="dept_id" value=""required>
     </div>

      <div class="input-group">
      <label>Number of Hours</label>
       <input type="number" name="num_of_hours" value=""required>
     </div>

       <div class="input-group">
      <label>Work Date</label>
       <input type="date" name="works_date" value=""required>
     </div>
      <div class="input-group">
      <label>Project ID</label>
       <input type="number" name="project_id" value=""required>
     </div>

      <div class="input-group">
      <button type="submit" class="btn" name="" value="submit">Submit</button>
      </div>

     </form>

   </body>
 </html>
