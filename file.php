<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "projectzero";

// create connection
$conn = mysqli_connect($servername, $username, $password, $projectzero);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// select data from table
$sql = "SELECT * FROM my_table";
$result = mysqli_query($conn, $sql);

// display data in table
echo "<table>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["user"] . "</td>";
    echo "<td>" . $row["password"] . "</td>";
    echo "</tr>";
}
echo "</table>";

// close connection
mysqli_close($conn);
?>

