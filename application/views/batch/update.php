<html>
  <head>
  </head>
  <body>
    <form action='update' method='post'>
      Points: <input type="text" name="points" value="<?php echo $batch->points ?>"><br>
      Date: <input type="date" name="date" value="<?php echo $batch->date ?>"><br>
      <input type="hidden" name="id" value="<?php echo $batch->id ?>">
      <input type="submit" value="update">
    </form>
  </body>
</html>