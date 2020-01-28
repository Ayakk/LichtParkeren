<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <script>
        function openPlattegrond() {
            window.location.replace("http://localhost/Lichtparkeren_website/plattegrond.php")
        }
        function openLog_Page() {
            window.location.replace("http://localhost/Lichtparkeren_website/Log_Page.php")
        }
        function openMainMenu(){
            window.location.replace("http://localhost/Lichtparkeren_website/index.php")
        }
    </script>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/opmaak.css">
        <title></title>
        <?php 
        header("Refresh:5");
        ?> 
    </head>
    <body>
        <h1>
            Dashboard
        </h1>
        <form>
        <input type="button" value="Hoofdmenu" onclick="openMainMenu()">
    </form>
        <form>
            <input type="button" value="Plattegrond" onclick="openPlattegrond()">
        </form>
        <form>
            <input type="button" value="Log Page" onclick="openLog_Page()">
        </form>
        
        <hr>
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
        ?>
        <?php
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
        ?>
        
        
    </body>
</html>