<html>
  <head>
  </head>
  <body>
    <form action='create' method='post'>
      Points: <input type="text" name="points" value="<?php echo $event->points ?>"><br>
      Date: <input type="date" name="date" value="<?php echo $event->date ?>"><br>
      Location: <textarea name="location" rows="1" cols="50"><?php echo $event->location ?></textarea>
      Description: <textarea name="description" rows="4" cols="50"><?php echo $event->description ?></textarea>
      <input type="hidden" name= "id" value="<?php echo $event->id ?>">
      <input type="submit" value="Update">
    </form>
  </body>
</html>