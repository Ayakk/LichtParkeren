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

$sql = "SELECT date FROM ai_data;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$ochtend = 0;
$middag = 0;
$avond = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $createDate = new DateTime($row['date']);
    $strip = $createDate->format('H');

    if ($strip <= 10) {
        $ochtend++;
    } elseif ($strip <= 17) {
        $middag++;
    } else {
        $avond++;
    }
}
if($ochtend > $middag and $ochtend > $avond){
    echo 'Let op! Het is het meest drukst in de ochtend!';
} elseif($middag > $ochtend and $middag > $avond) {
echo 'Let op! Het is het meest drukst in de middag!';
} elseif($avond > $ochtend and $avond > $middag){
    echo 'Let op! Het is het meest drukst in de avond';
}

?>
