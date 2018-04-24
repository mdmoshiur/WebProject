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
    <h2>Salary</h2>
    </div>

     <form class="" action="salary_insert.php" method="post">
      <div class="input-group">
      <label>Employee ID</label>
       <input type="number" name="emp_id" value=""required>
     </div>
       <div class="input-group">
      <label>Basic</label>
       <input type="number" name="basic" value=""required>
     </div>
       <div class="input-group">
      <label>Salary Date</label>
       <input type="date" name="salary_date" value=""required>

      <div class="input-group">
      <button type="submit" class="btn" name="" value="submit">Submit</button>
      </div>

     </form>
   </body>
 </html>
