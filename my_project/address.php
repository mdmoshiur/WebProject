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
    <h2>Employee's Address</h2>
  </div>

     <form class="" action="address_insert.php" method="post">
      <div class="input-group">
      <label>Employee ID</label>
       <input type="number" name="emp_id" value="" placeholder="employee ID"required>
     </div>

      <div class="input-group">
      <label>Street NO</label>
       <input type="number" name="street_no"  placeholder="Street no" value=""required>
     </div>


      <div class="input-group">
      <label>Street Name</label>
       <input type="text" name="street_name" placeholder="Street name" value=""required>
     </div>

      <div class="input-group">
      <label>City</label>
       <input type="text" name="city"  placeholder="City" value=""required>
     </div>


      <div class="input-group">
      <label>Zip Code</label>
       <input type="number" name="zip_code" placeholder="Zip code" value=""required>
     </div>

      <div class="input-group">
      <button type="submit" class="btn" name="" value="submit">Submit</button>
      </div>


     </form>

   </body>
 </html>
