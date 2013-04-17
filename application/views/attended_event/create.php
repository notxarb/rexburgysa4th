<html>
  <head>
  </head>
  <body>
    <form action='create' method='post'>
      Points: <?php echo $event->points ?><br>
      Date: <?php echo $event->date ?><br>
      Location: <?php echo $event->location ?><br>
      Description: <?php echo $event->description ?><br>
      <input type="hidden" value="<?php echo $event->id ?>">
      <input type="submit" value="Attended">
    </form>
  </body>
</html>