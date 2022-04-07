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
        ?>
    </head>
    <body>
        <?php
            include("includes/design-top.php");
            include("includes/navigation.php");
        ?>
    <div class="container" id="main-content">
        <form action="createFile.php" method="POST">
                <h><b>Bestand toevoegen</b></h><br>
                <label for="lname">Naam:</label>
                <input type="text" id="naam" name="naam"><br>
                <label for="fname">adres: </label>
                <input type="text" id="adres" name="adres"><br>
                <label for="fname">Postcode: </label>
                <input type="text" id="postcode" name="postcode"><br>
                <label for="fname">Woonplaats: </label>
                <input type="text" id="woonplaats" name="woonplaats"><br>
                <label for="fname">Telefoonnummer: </label>
                <input type="text" id="telefoonnummer" name="telefoonnummer"><br>
                <label for="lname">Email: </label>
                <input type="text" id="email" name="email"><br>
                <input type="hidden" id="titel" name="titel" value="leukeKop.txt"><br>
                <input type="submit" value="Submit">
        </form>
    </div>
        
    <?php 
        include("includes/footer.php");
    ?>
    </body>
</html>
