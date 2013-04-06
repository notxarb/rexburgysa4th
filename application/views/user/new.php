<html>
  <head>
  </head>
  <body>
    <form action='new_user' method='post'>
      First name: <input type="text" name="first_name"><br>
      Last name: <input type="text" name="last_name"><br>
      Ward: <select>
      <?php
        foreach($wards as $ward)
        {
          echo "<option value=\"" . $ward->id . "\">" . $ward->name . "</option>";
        }
      ?>
      </select><br>
      Username: <input type="text" name="last_name"><br>
      Password: <input type="password" name="password"><br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>