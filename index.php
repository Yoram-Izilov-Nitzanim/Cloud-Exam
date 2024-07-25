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

// Connect to the database
$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
    echo "<h1>Connection Error</h1>";
    die("Connection failed: " . mysqli_connect_error());
}

// Select data from breached_data table
$sql = "SELECT id, email, pass, add_date FROM breached_data;";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

echo "<h1>Breached Data</h1>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Email</th><th>Password</th><th>Date Added</th></tr>";

// Output data of each row
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['pass'] . "</td>";
    echo "<td>" . $row['add_date'] . "</td>";
    echo "</tr>";
}

echo "</table>";

// Close connection
mysqli_close($conn);
?>
</body>
</html>
