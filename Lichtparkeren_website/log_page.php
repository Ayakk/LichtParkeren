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
            function openMainMenu(){
            window.location.replace("http://localhost/Lichtparkeren_website/index.php")
        }
        function dashboard(){
            window.location.replace("http://localhost/Lichtparkeren_website/dashboard.php")
        }
        </script>
    <body>
        <form>
        <input type="button" value="Hoofdmenu" onclick="openMainMenu()">
    </form>
        <form>
            <input type="button" value="Dashboard" onclick="dashboard()">
        </form>
        <form>
        <input type="button" value="Plattegrond" onclick="openPlattegrond()">
        </form>
        <?php 
        include "DBconnectie.php";
        ?>
    </body>
</html>
