<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "lichtparkeren_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "SELECT * FROM parking_data;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<br>" . "ID: ".$row['id'] .", Positie: " . $row['position'] . ", Datum: " . $row['date'] . ", Status: " . $row['status'] . "<br>";
}
?>
