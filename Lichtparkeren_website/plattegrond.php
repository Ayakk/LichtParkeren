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
        </script>
        <p style="color:white;font-size:200%;text-align:center;"><b>
                Plattegrond Parkeergarage:
            </b></p>
        <img id="myImage" src="klikocijfer_0.jpg" width="100" height="600">
        <p style="text-align:center;">
            <button type="button" onclick="etage(0)">BG</button>
            <button type="button" onclick="etage(1)">E1</button>
            <button type="button" onclick="etage(2)">E2</button>
            <button type="button" onclick="etage(3)">E3</button>
        </p>
    </body>

