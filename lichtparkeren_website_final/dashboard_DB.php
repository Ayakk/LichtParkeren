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
        $sql = "SELECT id, position, date, status FROM parking_data WHERE status = 0;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        $row = mysqli_fetch_assoc($result);
        echo "Dichtsbijzijnde vrije parkeerplek is: " . $row['position'] ."<br>";
        
        $sql = "SELECT * FROM parking_data";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        $totaal = 0;
        $waar_leeg = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $totaal += 1;
        }
        $sql = "SELECT * FROM parking_data WHERE status = 0;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        while ($row = mysqli_fetch_assoc($result)) {
            $waar_leeg += 1;
        }
        echo $waar_leeg . "/" . $totaal . " plekken zijn vrij.";
