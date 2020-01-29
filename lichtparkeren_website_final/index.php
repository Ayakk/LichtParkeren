<!DOCTYPE html>
<html>
<title>The Garage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("1.jpg");
  min-height: 75%;
}

.menu {
  display: none;
}
</style>
<body>
<?php
//        $page = $_SERVER['PHP_SELF'];
//        $sec = "7";
//        header("Refresh: $sec; url=$page");
        ?> 
<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="#plattegrond" class="w3-button w3-block w3-black">PLATTEGROND</a>
    </div>
    <div class="w3-col s3">
      <a href="#DASHBOARD" class="w3-button w3-block w3-black">DASHBOARD</a>
    </div>
    <div class="w3-col s3">
      <a href="#LOGPAGE" class="w3-button w3-block w3-black">LOGPAGE</a>
    </div>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">By groep 5</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">the<br>garage</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">1 Garagestraat, 1010</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">OVER DE GARAGE</span></h5>
    <p>Op deze website kunt u alle informatie vinden over deze parkeergarage.
            U kunt hier onder andere zien hoeveel parkeerplekken er nu (per etage) vrij zijn. 
            Ook kunt u hier een diagram
            vinden waarop staat aangegeven hoe druk het gemiddeld op elk tijdstip in de week
            is.</p>
    <p> Ten slotte kunt u hier nog een plattegrond van de parkeergarage vinden. Op
            deze plattegrond staat ook aangegeven welke plekken er nu wel en niet
            beschikbaar zijn.</p>

</div>

<div class="w3-content" style="max-width:200px" align="center">
    <h5 class="w3-center w3-padding-64" id="plattegrond"><span class="w3-tag w3-wide">PLATTEGROND</span></h5>
    <?php
            include 'plattegrond_DB.php';
        ?>
    </body>
</div>
    <div align="center">
    <h5 class="w3-center w3-padding-64" id="DASHBOARD"><span class="w3-tag w3-wide">DASHBOARD</span></h5>
    <?php
            include 'dashboard_DB.php';
        ?>
    <?php
    include 'AI.php';
    ?>
    </div>
    <div align="center">
    <h5 class="w3-center w3-padding-64" id="LOGPAGE"><span class="w3-tag w3-wide">LOG PAGE</span></h5>
    <?php 
        include "logpage_DB.php";
        ?>
    <div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">
 </div>
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">CONTACT</span></h5>
  
    <div class="w3-row w3-center w3-card w3-padding">
      <p> Contactinfo:</p>
      <p> garage@gmail.com</p>
    </div>
<!-- End page content -->
</div>
</body>
</html>
