<html>
  <head>
  </head>
  <body>
    <form action='delete' method='post'>
      Points: <?php echo $batch->points ?>><br>
      Date: <?php echo $batch->date ?>><br>
      <input type="hidden" name="id" value="<?php echo $batch->id ?>">
      <input type="submit" value="Delete">
    </form>
  </body>
</html>