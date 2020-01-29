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
        $sql = "SELECT position, status FROM parking_data WHERE position LIKE 'A%'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        "<div style='float:center'>";
        echo "<table>";
        echo "<tr><th>Verdieping A</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            if($row['status'] == 1){
                echo "<tr><td style='background-color:red;color:white;'>{$row['position']}</td></tr>";
            } else {
                echo "<tr><td style='background-color:green;color:white;'>{$row['position']}</td></tr>";
            }
        }
        while ($row = mysqli_fetch_assoc($result)) {
            if($row['status'] == 1){
                echo "<tr><td style='background-color:red;color:white;'>{$row['position']}</td></tr>";
            }
        }
        echo "</table>";
        
        $sql = "SELECT position, status FROM parking_data WHERE position LIKE 'B%'";
        
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table>";
        echo "<th>Verdieping B</th>";
        while ($row = mysqli_fetch_assoc($result)) {
            if($row['status'] == 1){
                echo "<tr><td style='background-color:red;color:white;'>{$row['position']}</td></tr>";
            } else {
                echo "<tr><td style='background-color:green;color:white;'>{$row['position']}</td></tr>";
            }
        }
        echo "</table>";
        $sql = "SELECT position, status FROM parking_data WHERE position LIKE 'C%'";
        
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table>";
        echo "<th>Verdieping C</th>";
        while ($row = mysqli_fetch_assoc($result)) {
            if($row['status'] == 1){
                echo "<tr><td style='background-color:red;color:white;'>{$row['position']}</td></tr>";
            } else {
                echo "<tr><td style='background-color:green;color:white;'>{$row['position']}</td></tr>";
            }
        }
        echo "</table>";
        "</div>";