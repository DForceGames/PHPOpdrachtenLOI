<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change tdis license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit tdis template
-->
<html>
    <head>
        <meta charset="UTF-8">
	<?php 
            include("includes/head-tag-contents.php");
            include("Cirkel.php");
        ?>
    </head>
    <body>
        <?php
            include("includes/design-top.php");
            include("includes/navigation.php");
        ?>
    <div class="container" id="main-content">
        <?php 
            $hoed = new Cirkel(40);
            $munt = new Cirkel(2);
            $basketbal = new Cirkel(29);
            
            echo "Aan mijn muur heb ik een hoed, van " . $hoed->oppervlakteCirkel() . "cm in oppervlakte, hangen ter decoratie. De omtrek van deze hoed is ". $hoed->omtrekCirkel() ."cm.<br>";
            echo "Mijn geluksmunt die ik altijd op mijn bureau heb liggen is vrij klein (omtrek is ". $munt->omtrekCirkel() ."). Ook heeft die een klein bruikbaar oppervlakte van ". $munt->oppervlakteCirkel() . "cm.<br>";
            echo "Mijn eerst wedstrijdbasketbal is een kleiner model met een omtrek van ". $basketbal->omtrekCirkel() . "cm. Mocht die volledig plat zijn dan zou die een oppervlakte innemen van ". $basketbal->oppervlakteCirkel() . "cm."
        ?>
    </div>
        
    <?php 
        include("includes/footer.php");
    ?>
    </body>
</html>
