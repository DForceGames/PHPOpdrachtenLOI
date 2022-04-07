
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change tdis license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit tdis template
-->
<html>
    <head>
        <meta charset="UTF-8">
	<?php include("includes/head-tag-contents.php");
            include "connect.php";
        ?>
    </head>
    <body>
        <?php
            include("includes/design-top.php");
            include("includes/navigation.php");
        ?>
    <div class="container" id="main-content">
        <?php
        $sql = "select lid.LidNummer, lid.Naam, lid.Voornaam, lid.Postcode, lid.Huisnummer, post.Adres, post.Woonplaats, tel.Telefoonnummer, email.Email
                from lid lid
                left JOIN email email
                 on lid.LidNummer = email.LidNummer
                left join postcode post
                 on post.Postcode = lid.Postcode
                left join telefoonnummer tel 
                 on tel.LidNummer = lid.LidNummer
                order by 1 asc";

        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            echo "<table><th>Lidnummer</th><th>Naam</th><th>Voornaam</th><th>Postcode</th><th>Adres</th><th>Huisnummer</th><th>Woonplaats</th><th>Telefoonnummer</th><th>Email</th>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["LidNummer"] ."</td>"."<td>".$row["Naam"] ."</td>"."<td>".$row["Voornaam"] ."</td>"."<td>".$row["Postcode"] ."</td>"."<td>".$row["Adres"] ."</td>"."<td>".$row["Huisnummer"] ."</td>"."<td>".$row["Woonplaats"] ."</td>"."<td>".$row["Telefoonnummer"] ."</td>"."<td>".$row["Email"] ."</td><td><a href=bewerklid.php?lidnummer=".$row["LidNummer"].">Bewerk</a></td><td><a href=deletelid.php?lidnummer=".$row["LidNummer"].">Delete</a></td></tr>";
            }
            echo "</table>";
        } else {
            Echo "0 results";
            echo "</table>";
        }
        ?>
    </div>
    <div class="container" id="main-content">
        <div>
            <form action="AddUser.php" method="POST">
                <h><b>Lid toevoegen</b></h><br>
                <label for="fname">Lidnummer:</label>
                <input type="text" id="lidnummer" name="lidnummer"><br>
                <label for="lname">Achternaam:</label>
                <input type="text" id="achternaam" name="achternaam"><br>
                <label for="lname">Voornaam:</label>
                <input type="text" id="voornaam" name="voornaam"><br>
                <label for="lname">Postcode:</label>
                <select id="postcode" name="postcode">
                <?php
                    include("connect.php");
                        $sqlPostcode = "SELECT postcode FROM postcode";
                        $resultPostcode = $conn->query($sqlPostcode);

                        if ($resultPostcode->num_rows > 0) {
                            while($row = $resultPostcode->fetch_assoc()) {
                                echo "<option value='".$row["postcode"]."'>".$row["postcode"]."</option>";
                            }
                        } else {
                            Echo "Geen postcodes in database";
                        }
                ?>
                </select><br>
                <label for="lname">Huisnummer:</label>
                <input type="text" id="huisnummer" name="huisnummer"><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>         
    <?php include("includes/footer.php");?>
    </body>
</html>
