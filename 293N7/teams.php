
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
            include("connect.php");
        ?>
    <div class="container" id="main-content">
        <?php
        $sql = "SELECT teamnaam FROM teams";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            
            foreach ($result as $array) {
                $teamnaam = $array["teamnaam"];
                
                $sql = "SELECT teams.Teamnaam, lid.LidNummer, naam, voornaam from 293n7.teams
                inner JOIN 293n7.teamlid tl on tl.Teamnaam = teams.Teamnaam
                left join 293n7.lid on lid.LidNummer = tl.lidnummer
                WHERE teams.teamnaam = '". $teamnaam."'";
                
                $result2 = $conn->query($sql) or die($conn->error);
                
                echo "<h1><b>".$teamnaam."</b></h1><br>";
                echo "<table><th>Lidnr</th><th>Naam</th><th>Voornaam</th>";
                while($row = $result2->fetch_assoc()) {
                    echo "<tr><td>".$row["LidNummer"] ."</td>"."<td>".$row["naam"] ."</td>"."<td>".$row["voornaam"] ."</td><td><a href=deleteteamkoppel.php?lidnummer=".$row["LidNummer"].">Delete</a></td></tr>";
                }
                echo "</table>";
                }
            }
        ?>
    </div>
    <div class="container" id="main-content">
        <div>
            <form action="AddTeamKoppel.php" method="POST">
                <h><b>Lid toevoegen aan team</b></h><br>
                <label for="fname">Lidnummer:</label>
                <select id="lidnummer" name="lidnummer">
                <?php
                    $sqlLeden = "SELECT lidnummer, naam FROM lid";
                    $resultLeden = $conn->query($sqlLeden);
                    
                    if ($resultLeden->num_rows > 0) {
                        while($row = $resultLeden->fetch_assoc()) {
                            echo "<option value='".$row["lidnummer"]."'>".$row["lidnummer"] ." - ". $row["naam"] ."</option>";
                        }
                    } else {
                        Echo "Geen leden in database";
                    }
                ?>
                </select><br>
                <label for="lname">Team:</label>
                <select id="team" name="team">
                <?php
                        $sqlTeam = "SELECT teamnaam FROM teams";
                        $resultTeam = $conn->query($sqlTeam);

                        if ($resultTeam->num_rows > 0) {
                            while($row = $resultTeam->fetch_assoc()) {
                                echo "<option value='".$row["teamnaam"]."'>".$row["teamnaam"]."</option>";
                            }
                        } else {
                            Echo "Geen teams in database";
                        }
                ?>
                </select><br>
                <input type="submit" value="Koppel">
            </form>
        </div>
    </div>         
    <?php include("includes/footer.php");?>
    </body>
</html>
