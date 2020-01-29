<script>
            function etage(nr) {
                var pic;
                if (nr == 0) {
                    pic = "klikocijfer_0.jpg"
                }
                if (nr == 1) {
                    pic = "klikocijfer_1.jpg"
                }
                if (nr == 2) {
                    pic = "klikocijfer_2.jpg"
                }
                if (nr == 3) {
                    pic = "klikocijfer_3.jpg"
                }
                document.getElementById('myImage').src = pic;
            }
            function openMainMenu(){
            window.location.replace("http://localhost/Lichtparkeren_website/index.php")
        }
        function openLog_Page(){
            window.location.replace("http://localhost/Lichtparkeren_website/Log_Page.php")
        }
        function dashboard(){
            window.location.replace("http://localhost/Lichtparkeren_website/dashboard.php")
        }

        </script>
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="css/opmaak.css">
            <title></title>
            <?php 
        $Aa = 1;
        $Ab = 1;
        $Ac = 1;
        $Ad = 1;
        $Ae = 0;
        $Ba = 0;
        $Bb = 0;
        $Bc = 0;
        $Bd = 0;
        $Be = 0;
        $Ca = 0;
        $Cb = 0;
        $Cc = 0;
        $Cd = 0;
        $Ce = 0;
            ?> 
        </head>
        <body>
        <h1>
            Plattegrond
        </h1>
        <form>
        <input type="button" value="Hoofdmenu" onclick="openMainMenu()">
    </form>
        <form>
            <input type="button" value="Dashboard" onclick="dashboard()">
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
        $sql = "SELECT position, status FROM parking_data WHERE position LIKE 'A%'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        '<div style="float:center">';
        echo "<table border='1'>";
        echo "<tr><th>Verdieping A</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            if($row['status'] == 1){
                echo "<tr><td style='background-color:red;color:white;'>{$row['position']}</td></tr>";
            } if($row['status'] == 0) {
                echo "<tr><td style='background-color:green;color:white;'>{$row['position']}</td></tr>";
            }
        }
        echo "</table>";
        
        $sql = "SELECT position, status FROM parking_data WHERE position LIKE 'B%'";
        
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table border='1'>";
        echo "<th>Verdieping B</th>";
        while ($row = mysqli_fetch_assoc($result)) {
            if($row['status'] == 1){
                echo "<tr><td style='background-color:red;color:white;'>{$row['position']}</td></tr>";
            } if ($row['status'] == 0) {
                echo "<tr><td style='background-color:green;color:white;'>{$row['position']}</td></tr>";
            }
        }
        echo "</table>";
        $sql = "SELECT position, status FROM parking_data WHERE position LIKE 'C%'";
        
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table border='1' id='t3'>";
        echo "<th>Verdieping C</th>";
        while ($row = mysqli_fetch_assoc($result)) {
            if($row['status'] == 1){
                echo "<tr><td style='background-color:red;color:white;'>{$row['position']}</td></tr>";
            } if ($row['status'] == 0) {
                echo "<tr><td style='background-color:green;color:white;'>{$row['position']}</td></tr>";
            }
        }
        echo "</table>";
        "</div>";
        ?>
        <?php
        
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Aa1()']))
        {
        Aa1();
        }
        function Aa1()
        {
        $GLOBALS['Aa'] = 1;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Aa0()']))
        {
        Aa0();
        }
        function Aa0()
        {
        $GLOBALS['Aa'] = 0;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Ab1()']))
        {
        Ab1();
        }
        function Ab1()
        {
        $GLOBALS['Ab'] = 1;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Ab0()']))
        {
        Ab0();
        }
        function Ab0()
        {
        $GLOBALS['Ab'] = 0;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Ac1()']))
        {
        Ac1();
        }
        function Ac1()
        {
        $GLOBALS['Ac'] = 1;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Ac0()']))
        {
        Ac0();
        }
        function Ac0()
        {
        $GLOBALS['Ac'] = 0;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Ad1()']))
        {
        Ad1();
        }
        function Ad1()
        {
        $GLOBALS['Ad'] = 1;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Ad0()']))
        {
        Ad0();
        }
        function Ad0()
        {
        $GLOBALS['Ad'] = 0;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Ae1()']))
        {
        Ae1();
        }
        function Ae1()
        {
        $GLOBALS['Ae'] = 1;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Ae0()']))
        {
        Ae0();
        }
        function Ae0()
        {
        $GLOBALS['Ae'] = 0;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Ba1()']))
        {
        Ba1();
        }
        function Ba1()
        {
        $GLOBALS['Ba'] = 1;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Ba0()']))
        {
        Ba0();
        }
        function Ba0()
        {
        $GLOBALS['Ba'] = 0;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Bb1()']))
        {
        Bb1();
        }
        function Bb1()
        {
        $GLOBALS['Bb'] = 1;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Bb0()']))
        {
        Bb0();
        }
        function Bb0()
        {
        $GLOBALS['Bb'] = 0;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Bc1()']))
        {
        Bc1();
        }
        function Bc1()
        {
        $GLOBALS['Bc'] = 1;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Bc0()']))
        {
        Bc0();
        }
        function Bc0()
        {
        $GLOBALS['Bc'] = 0;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Bd1()']))
        {
        Bd1();
        }
        function Bd1()
        {
        $GLOBALS['Bd'] = 1;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Bd0()']))
        {
        Bd0();
        }
        function Bd0()
        {
        $GLOBALS['Bd'] = 0;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Be1()']))
        {
        Be1();
        }
        function Be1()
        {
        $GLOBALS['Be'] = 1;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Be0()']))
        {
        Be0();
        }
        function Be0()
        {
        $GLOBALS['Be'] = 0;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Ca1()']))
        {
        Ca1();
        }
        function Ca1()
        {
        $GLOBALS['Ca'] = 1;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Ca0()']))
        {
        Ca0();
        }
        function Ca0()
        {
        $GLOBALS['Ca'] = 0;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Cb1()']))
        {
        Cb1();
        }
        function Cb1()
        {
        $GLOBALS['Cb'] = 1;
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Cb0()']))
        {
        Cb0();
        }
        function Cb0()
        {
        $GLOBALS['Cb'] = 0;
        }
        if($_SERVER['REQUEST_METHOD'] == "PUT" and isset($_POST['Cc1()']))
        {
        Cc1();
        }
        function Cc1()
        {
        $GLOBALS['Cc'] = 1;
        }
        if($_SERVER['REQUEST_METHOD'] == "PUT" and isset($_POST['Cc0()']))
        {
        Cc0();
        }
        function Cc0()
        {
        $GLOBALS['Cc'] = 0;
        }
        if($_SERVER['REQUEST_METHOD'] == "PUT" and isset($_POST['Cd1()']))
        {
        Cd1();
        }
        function Cd1()
        {
        $GLOBALS['Cd'] = 1;
        }
        if($_SERVER['REQUEST_METHOD'] == "PUT" and isset($_POST['Cd0()']))
        {
        Cd0();
        }
        function Cd0()
        {
        $GLOBALS['Cd'] = 0;
        }
        if($_SERVER['REQUEST_METHOD'] == "PUT" and isset($_POST['Ce1()']))
        {
        Ce1();
        }
        function Ce1()
        {
        $GLOBALS['Ce'] = 1;
        }
        if($_SERVER['REQUEST_METHOD'] == "PUT" and isset($_POST['Ce0()']))
        {
        Ce0();
        }
        function Ce0()
        {
        $GLOBALS['Ce'] = 0;
        }
        ?>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = "lichtparkeren_db";

// Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbName);

// Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql1 = "UPDATE parking_data SET status='$Aa' WHERE id=1";
        $sql2 = "UPDATE parking_data SET status='$Ab' WHERE id=2";
        $sql3 = "UPDATE parking_data SET status='$Ac' WHERE id=3";
        $sql4 = "UPDATE parking_data SET status='$Ad' WHERE id=4";
        $sql5 = "UPDATE parking_data SET status='$Ae' WHERE id=5";
        $sql6 = "UPDATE parking_data SET status='$Ba' WHERE id=6";
        $sql7 = "UPDATE parking_data SET status='$Bb' WHERE id=7";
        $sql8 = "UPDATE parking_data SET status='$Bc' WHERE id=8";
        $sql9 = "UPDATE parking_data SET status='$Bd' WHERE id=9";
        $sql10 = "UPDATE parking_data SET status='$Be' WHERE id=10";
        $sql11 = "UPDATE parking_data SET status='$Ca' WHERE id=11";
        $sql12 = "UPDATE parking_data SET status='$Cb' WHERE id=12";
        $sql13 = "UPDATE parking_data SET status='$Cc' WHERE id=13";
        $sql14 = "UPDATE parking_data SET status='$Cd' WHERE id=14";
        $sql15 = "UPDATE parking_data SET status='$Ce' WHERE id=15";
                
        if (mysqli_query($conn, $sql1)) {
            echo "";
        }   else{
            echo "Error updating record: " . mysqli_error($conn);
        }
        if (mysqli_query($conn, $sql2)) {
            echo "";
        }   else{
            echo "Error updating record: " . mysqli_error($conn);
        }
        if (mysqli_query($conn, $sql3)) {
            echo "";
        }   else{
            echo "Error updating record: " . mysqli_error($conn);
        }
        if (mysqli_query($conn, $sql4)) {
            echo "";
        }   else{
            echo "Error updating record: " . mysqli_error($conn);
        }
        if (mysqli_query($conn, $sql5)) {
            echo "";
        }   else{
            echo "Error updating record: " . mysqli_error($conn);
        }
        if (mysqli_query($conn, $sql6)) {
            echo "";
        }   else{
            echo "Error updating record: " . mysqli_error($conn);
        }
        if (mysqli_query($conn, $sql7)) {
            echo "";
        }   else{
            echo "Error updating record: " . mysqli_error($conn);
        }
        if (mysqli_query($conn, $sql8)) {
            echo "";
        }   else{
            echo "Error updating record: " . mysqli_error($conn);
        }
        if (mysqli_query($conn, $sql9)) {
            echo "";
        }   else{
            echo "Error updating record: " . mysqli_error($conn);
        }
        if (mysqli_query($conn, $sql10)) {
            echo "";
        }   else{
            echo "Error updating record: " . mysqli_error($conn);
        }
        if (mysqli_query($conn, $sql11)) {
            echo "";
        }   else{
            echo "Error updating record: " . mysqli_error($conn);
        }
        if (mysqli_query($conn, $sql12)) {
            echo "";
        }   else{
            echo "Error updating record: " . mysqli_error($conn);
        }
        if (mysqli_query($conn, $sql13)) {
            echo "";
        }   else{
            echo "Error updating record: " . mysqli_error($conn);
        }
        if (mysqli_query($conn, $sql14)) {
            echo "";
        }   else{
            echo "Error updating record: " . mysqli_error($conn);
        }
        if (mysqli_query($conn, $sql15)) {
            echo "";
        }   else{
            echo "Error updating record: " . mysqli_error($conn);
        }
        
        mysqli_close($conn);
        ?>
        <form action="plattegrond.php" method="post">
            <input type="submit" name="Aa0()" value="A-a vrij" />
            <input type="submit" name="Aa1()" value="A-a bezet" />
            <input type="submit" name="Ab0()" value="A-b vrij" />
            <input type="submit" name="Ab1()" value="A-b bezet" />
            <input type="submit" name="Ac0()" value="A-c vrij" />
            <input type="submit" name="Ac1()" value="A-c bezet" />
            <input type="submit" name="Ad0()" value="A-d vrij" />
            <input type="submit" name="Ad1()" value="A-d bezet" />
            <input type="submit" name="Ae0()" value="A-e vrij" />
            <input type="submit" name="Ae1()" value="A-e bezet" />
        </form>
        <form action="plattegrond.php" method="post">
            <input type="submit" name="Ba0()" value="B-a vrij" />
            <input type="submit" name="Ba1()" value="B-a bezet" />
            <input type="submit" name="Bb0()" value="B-b vrij" />
            <input type="submit" name="Bb1()" value="B-b bezet" />
            <input type="submit" name="Bc0()" value="B-c vrij" />
            <input type="submit" name="Bc1()" value="B-c bezet" />
            <input type="submit" name="Bd0()" value="B-d vrij" />
            <input type="submit" name="Bd1()" value="B-d bezet" />
            <input type="submit" name="Be0()" value="B-e vrij" />
            <input type="submit" name="Be1()" value="B-e bezet" />
        </form>
        <form action="plattegrond.php" method="post">
            <input type="submit" name="Ca0()" value="C-a vrij" />
            <input type="submit" name="Ca1()" value="C-a bezet" />
            <input type="submit" name="Cb0()" value="C-b vrij" />
            <input type="submit" name="Cb1()" value="C-b bezet" />
            <input type="submit" name="Cc0()" value="C-c vrij" />
            <input type="submit" name="Cc1()" value="C-c bezet" />
            <input type="submit" name="Cd0()" value="C-d vrij" />
            <input type="submit" name="Cd1()" value="C-d bezet" />
            <input type="submit" name="Ce0()" value="C-e vrij" />
            <input type="submit" name="Ce1()" value="C-e bezet" />
        </form>

    </body>
