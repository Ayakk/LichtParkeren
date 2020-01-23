<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- oefenen met website aanpassen
 int-waardes verbinden met garage -->
<html>
    <script>
        function openPlattegrond(){
            window.location.replace("http://localhost/Lichtparkeren_website/plattegrond.php")
        }
        function openLog_Page(){
            window.location.replace("http://localhost/Lichtparkeren_website/Log_Page.php")
        }
        </script>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
        <form>
        <input type="button" value="Plattegrond" onclick="openPlattegrond()">
    </form>
        <form>
        <input type="button" value="Log Page" onclick="openLog_Page()">
    </form>
    </body>
</html>
