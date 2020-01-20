<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- oefenen met website aanpassen
 int-waardes verbinden met garage -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Parkeergarage</title>
    </head>
    <body style="background-color:#333333">
        <h1 style="font-size:500%;text-align:center;color:white;">
            Parkeergarage
        </h1>
        <hr>
        <p style='color:whitesmoke;font-size:110%;'>
            <img src="garage.jpg" alt="Garage" style="float:right;width:438px;height:210px;">
            Op deze website kunt u alle informatie vinden over deze parkeergarage.
            U kunt hier onder andere zien hoeveel parkeerplekken er nu (per etage) vrij zijn. 
            Ook kunt u hier een diagram
            vinden waarop staat aangegeven hoe druk het gemiddeld op elk tijdstip in de week
            is. Ten slotte kunt u hier nog een plattegrond van de parkeergarage vinden. Op
            deze plattegrond staat ook aangegeven welke plekken er nu wel en niet
            beschikbaar zijn.
        </p>
        <?php
        $a = 100; $b = 25; $c = 25; $d = 25; $e = 25;
        print "<p style=color:white;font-size:130%><b>Huidige situatie: (in totaal $a van de 200 parkeerplekken vrij)</b></p>";
        print "<p><ul style=color:whitesmoke;font-size:110%;><li>Begaande grond: $b/50 parkeerplekken vrij</li>"
            . "<li>Eerste etage: $c/50 parkeerplekken vrij</li>"
            . "<li>Tweede etage: $d/50 parkeerplekken vrij</li>"
            . "<li>Derde etage: $e/50 parkeerplekken vrij</li></ul></p>"
        ?>
        <script>
            function etage(nr) {
                var pic;
                if (nr == 0) {
                    pic = "klikocijfer_0.jpg"
                } if (nr == 1) {
                    pic = "klikocijfer_1.jpg"
                } if (nr == 2) {
                    pic = "klikocijfer_2.jpg"
                } if (nr == 3) {
                    pic = "klikocijfer_3.jpg"
                }
                document.getElementById('myImage').src = pic;
            }
        </script>
        <p style="color:white;font-size:130%;text-align:center;"><b>
            Plattegrond Parkeergarage:
        </b></p>
        <img id="myImage" src="klikocijfer_0.jpg" width="100%" height="600">
        <p style="text-align:center;">
            <button type="button" onclick="etage(0)">BG</button>
            <button type="button" onclick="etage(1)">E1</button>
            <button type="button" onclick="etage(2)">E2</button>
            <button type="button" onclick="etage(3)">E3</button>
        </p>
    </body>
</html>
