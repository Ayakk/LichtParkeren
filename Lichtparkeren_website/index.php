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
        function dashboard() {
            window.location.replace("http://localhost/Lichtparkeren_website/dashboard.php")
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
            Parkeergarage
        </h1>
        <form>
            <input type="button" value="Plattegrond" onclick="openPlattegrond()">
        </form>
        <form>
            <input type="button" value="Dashboard" onclick="dashboard()">
        </form>
        <form>
            <input type="button" value="Log Page" onclick="openLog_Page()">
        </form>
        <hr>


        <p>
            <img src="garage.jpg" alt="Garage" style="float:right;width:438px;height:210px;">
            Op deze website kunt u alle informatie vinden over deze parkeergarage.
            U kunt hier onder andere zien hoeveel parkeerplekken er nu (per etage) vrij zijn. 
            Ook kunt u hier een diagram
            vinden waarop staat aangegeven hoe druk het gemiddeld op elk tijdstip in de week
            is. Ten slotte kunt u hier nog een plattegrond van de parkeergarage vinden. Op
            deze plattegrond staat ook aangegeven welke plekken er nu wel en niet
            beschikbaar zijn.
        </p>        
    </body>
</html>