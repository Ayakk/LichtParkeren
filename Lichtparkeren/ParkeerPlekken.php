<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script>
        function openMainMenu(){
            <?php 
            $mainmenu = True;
            print $mainmenu;
            ?>
            window.location.replace("http://localhost/Lichtparkeren/index.php")
         
        }
        </script>
    <h1>Plattegrond</h1>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5" >
    <title>Plattegrond</title>
</head>
<body>
    <form>
        <input type="button" value="Open Main Menu" onclick="openMainMenu()">
    </form>
        <?php
        $nummer = 1;
        while($mainmenu = False){
            $nummer++;
            ?>
    
            <p><?php echo $nummer ?></p>
            
            <?php
            sleep(5);
        }
        // put your code here
        ?>
</body>
</html>
