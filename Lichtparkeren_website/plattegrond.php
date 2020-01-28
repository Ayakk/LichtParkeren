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
        <form>
        <input type="button" value="Hoofdmenu" onclick="openMainMenu()">
    </form>
        <form>
            <input type="button" value="Dashboard" onclick="dashboard()">
        </form>
        <form>
        <input type="button" value="Log Page" onclick="openLog_Page()">
    </form>
 
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
        echo "<table border='1'>";
        echo "<tr><th>Verdieping A</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            if($row['status'] == 1){
                echo "<tr><td style='background-color:red;color:white;'>{$row['position']}</td></tr>";
            } else {
                echo "<tr><td style='background-color:yellowgreen;color:white;'>{$row['position']}</td></tr>";
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
            } else {
                echo "<tr><td style='background-color:yellowgreen;color:white;'>{$row['position']}</td></tr>";
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
            } else {
                echo "<tr><td style='background-color:yellowgreen;color:white;'>{$row['position']}</td></tr>";
            }
        }
        echo "</table>";
        "</div>";
        ?>
    </body>


    