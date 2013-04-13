<html>
<head>
</head>
<body>
  <p><a href="log_out">log out</a></p>
  <h1>Welcome <?php echo $first_name . " " . $last_name ?> from <?php echo $ward_name ?></h1>
  <p>Your ward has a goal of getting <?php echo $ward_goal ?> points.</p>
  <table>
    <tr><th>Sunday</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th></tr>
    <?php foreach($calendar as $week) { ?>
    <tr>
      <?php foreach($week as $day) { ?>
      <td><?php echo date("d", $day['date']); ?></td>
      <?php } ?>
    </tr>
    <?php } ?>
  </table>
  <h2>Events</h2>
    <?php if ($event_points) { ?>><p>You have <?php echo $event_points ?> points from attending events.</p><?php } ?>
    <?php foreach($events as $event) { ?>
    <a href="../event/view?id=<?php echo $event->id ?>"><div><?php echo $event->date . " " . $event->description ?></div></a>
    <?php } ?>
  <h2>Batches</h2>
    <?php if ($batch_points) { ?><p>You have <?php echo $batch_points ?> points from indexing batches.</p><?php } ?>
    <?php foreach($batches as $batch) { ?>
    <a href="../batch/update?id=<?php echo $batch->id ?>"><div><?php echo $batch->date . " " . $batch->points ?></div></a>
    <?php } ?>
    <form action='../batch/create' method='post'>
      Points: <input type="text" name="points"><br>
      Date: <input type="date" name="date"><br>
      <input type="submit" value="Submit">
    </form>
</body>
</html>