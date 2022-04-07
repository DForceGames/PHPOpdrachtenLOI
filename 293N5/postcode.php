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
            include("connect.php")
        ?>
    </head>
    <body>
        <?php
            include("includes/design-top.php");
            include("includes/navigation.php");
        ?>
    <div class="container" id="main-content">
        <form method="post" action="uploadPostcode.php">
            <input type="text" name="postcode" placeholder="postcode"><br>
            <input type="text" name="adres" placeholder="adres"><br>
            <input type="text" name="woonplaats" placeholder="woonplaats"><br>
            <input type="submit"><br>
        </form>
    </div>
        
    <?php 
        include("includes/footer.php");
    ?>
    </body>
</html>
