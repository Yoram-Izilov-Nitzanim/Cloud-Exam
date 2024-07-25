<!DOCTYPE html>
<html>
  <head>
  <title>Hello DevOps Class</title>
  </head>
  <body>
    <?php
      $host = 'database-2.cx248m4we6k7.us-east-1.rds.amazonaws.com';
      $user = 'admin';
      $password = '123456Yoram';
      $dbname = 'breached';
      $conn = mysqli_connect($host, $user, $password, $dbname);
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      $sql = "SELECT id, email, pass, add_date FROM breached_data";
      $result = mysqli_query($conn, $sql);
      echo "<h1>Breached</h1>";
      echo "<table>";
      echo "<tr><th>ID</th><th>Email</th><th>Password</th><th>Date
      Added</th></tr>";
      while ($row = mysqli_fetch_array($result)) {
      echo "<tr><td>" . $row['id'] . "</td><td>" . $row['email'] . "</td><td>" .
      $row['pass'] . "</td><td>" . $row['add_date'] . "</td></tr>";
      }
      echo "</table>";
      mysqli_close($conn);
    ?>
  </body>
</html>
