<html>
  <head>
  </head>
  <body>
    <p> Log In:<br>
      <form action='log_in' method='post'>
        Username: <input type="text" name="user_name"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Log in">
      </form>
    </p>
    <p>New User:
      <form action='new_user' method='post'>
        First name: <input type="text" name="first_name"><br>
        Last name: <input type="text" name="last_name"><br>
        Ward: <select name="ward_id">
        <?php
          foreach($wards as $ward)
          {
            echo "<option value=\"" . $ward->id . "\">" . $ward->name . "</option>";
          }
        ?>
        </select><br>
        Username: <input type="text" name="user_name"><br>
        Password: <input type="password" name="password"><br>
      <input type="submit" value="Create User">
    </form></p>
  </body>
</html>