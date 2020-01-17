<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script>
        function openPlattegrond(){
            <?php 
            $mainmenu = False; 
            print $mainmenu;
            ?>
            window.location.replace("http://localhost/Lichtparkeren/ParkeerPlekken.php")
            
        }
        </script>
    <h1>Main Menu</h1>
    <meta charset="UTF-8">
    <title>Main Menu</title>
</head>
<body>
    <form>
        <input type="button" value="Open Plattegrond" onclick="openPlattegrond()">
    </form>
        <?php
        // put your code here
        $mainmenu = True;
        ?>
</body>
</html>
