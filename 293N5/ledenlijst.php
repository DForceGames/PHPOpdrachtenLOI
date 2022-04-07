<?php include("includes/a_config.php");?>
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
        $sql = "select *
                from lid lid
                inner JOIN email email
                 on lid.LidNummer = email.LidNummer
                inner join postcode post
                 on post.Postcode = lid.Postcode
                inner join telefoonnummer tel 
                 on tel.LidNummer = lid.LidNummer";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table> <th>Lidnummer</th><th>Naam</th><th>Voornaam</th><th>Postcode</th><th>Adres</th><th>Huisnummer</th><th>Woonplaats</th><th>Telefoonnummer</th><th>Email</th>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["LidNummer"] ."</td>"."<td>".$row["Naam"] ."</td>"."<td>".$row["Voornaam"] ."</td>"."<td>".$row["Postcode"] ."</td>"."<td>".$row["Adres"] ."</td>"."<td>".$row["Huisnummer"] ."</td>"."<td>".$row["Woonplaats"] ."</td>"."<td>".$row["Telefoonnummer"] ."</td>"."<td>".$row["Email"] ."</td></tr>";
            }
            echo "</table>";
        } else {
            Echo "0 results";
        }
        
        
        ?>
    </div>
        
    <?php include("includes/footer.php");?>
    </body>
</html>
