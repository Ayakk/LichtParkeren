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
                document.getElementById('myImage').src = pic;
            }
            function openMainMenu(){
            window.location.replace("http://localhost/Lichtparkeren_website/index.php")
        }
        function openLog_Page(){
            window.location.replace("http://localhost/Lichtparkeren_website/Log_Page.php")
        }
        </script>
    <body style="background-color:#333333">
        <form>
        <input type="button" value="Hoofdmenu" onclick="openMainMenu()">
    </form>
        <form>
        <input type="button" value="Log Page" onclick="openLog_Page()">
    </form>
        <h1 style="color:white;font-size:300%;text-align:center;"><b>
                Plattegrond Parkeergarage:
            </b></h1>
        <img id="myImage" src="klikocijfer_0.jpg" width="100%" height="600">
        <p style="text-align:center;">
            <button type="button" onclick="etage(0)">BG</button>
            <button type="button" onclick="etage(1)">E1</button>
            <button type="button" onclick="etage(2)">E2</button>
        </p>
    </body>
