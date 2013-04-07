<html>
<head>
</head>
<body>
  <p><a href="log_out">log out</a></p>
  <h1>Welcome <?php echo $first_name . " " . $last_name ?> from <?php echo $ward_name ?></h1>
  <p>Your ward has a goal of getting <?php echo $ward_goal ?> points.</p>
  <h2>Events</h2>
  <h2>Batches</h2>
    <form action='create' method='post'>
      Points: <input type="text" name="points"><br>
      Date: <input type="date" name="date"><br>
      <input type="submit" value="Submit">
    </form>
</body>
</html>