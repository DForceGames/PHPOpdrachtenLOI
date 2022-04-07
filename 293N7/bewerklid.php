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
        <?php
            if($_GET['lidnummer']) {

                include("connect.php");

                $lidnummer = $_GET['lidnummer'];
                $sqlPostcode = "SELECT postcode FROM postcode";
                $resultPostcode = $conn->query($sqlPostcode);
                $postcode = array();
                while($row = $resultPostcode->fetch_assoc()) {
                    $postcode[] = $row['postcode'];
                }
                
                $sql = "SELECT lid.naam, lid.voornaam, lid.postcode,lid.huisnummer FROM lid lid WHERE lid.lidnummer='$lidnummer'";
                $result = $conn->query($sql);
                
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $naam = $row['naam'];
                            $voornaam = $row['voornaam'];
                            $huisnummer = $row['huisnummer'];
                            
                            echo '
                            <form action="UpdateUser.php" method="POST">
                                <h><b>Lid bewerken</b></h><br>
                                <label for="fname">Lidnummer:</label>
                                <input type="text" value="'.$lidnummer.'" id="lidnummer" name="lidnummer"><br>
                                <label for="lname"">Achternaam:</label>
                                <input type="text" value="'.$naam.'" id="achternaam" name="achternaam"><br>
                                <label for="lname">Voornaam:</label>
                                <input type="text" value="'.$voornaam.'" id="voornaam" name="voornaam"><br>
                                <label for="lname">Postcode:</label>
                                <select id="postcode" name="postcode">'; 
                            foreach($postcode as $code){
                                        echo '<option value="'.$code.'">'.$code.'</option>';
                                    }
                            
                            echo '</select><br>
                                <label for="lname">Huisnummer:</label>
                                <input type="text" value="'.$huisnummer.'" id="huisnummer" name="huisnummer"><br>
                                <input type="submit" value="Submit">
                            </form>';
                        }
                    } else {
                        Echo "0 results";
                    } 
                    }
?>
    </div>
    <div class="container" id="main-content">
        <form action="AddTel.php" method="POST">
            <h><b>Nummer toevoegen</b></h><br>
            <label for="fname">Telefoonnummer:</label>
            <input type="text" id="telefoon" name="telefoon"><br>
            <input type="hidden" value="<?php echo $lidnummer ?>" id="lidnummer" name="lidnummer">
            <input type="submit" value="Toevoegen">
        </form>
    </div>     
        
    <div class="container" id="main-content">
        <form action="AddMail.php" method="POST">
            <h><b>Email toevoegen</b></h><br>
            <label for="fname">Email:</label>
            <input type="text" id="email" name="email"><br>
            <input type="hidden" value="<?php echo $lidnummer ?>" id="lidnummer" name="lidnummer">
            <input type="submit" value="Toevoegen">
        </form>
    </div>  
    <?php 
        include("includes/footer.php");
    ?>
    </body>
</html>
