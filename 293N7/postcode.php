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
            <?php
                $sql = "SELECT postcode, adres, woonplaats FROM postcode";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table><th>Postcode</th><th>Adres</th><th>Woonplaats</th>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>".$row["postcode"] ."</td>"."<td>".$row["adres"] ."</td>"."<td>".$row["woonplaats"] ."</td>"."</td><td><a href=bewerkpostcode.php?postcode=".$row["postcode"].">Bewerk</a></td></tr>";
                    }
                    echo "</table>";
                } else {
                    Echo "0 results";
                    echo "</table>";
                }
            ?>
        </div><!-- comment -->
    <div class="container" id="main-content">
        <?php
            $sql = "SELECT postcode, adres, woonplaats FROM postcode";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table><th>Postcode</th><th>Adres</th><th>Woonplaats</th>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["postcode"] ."</td>"."<td><input type='text' name='adres' value='".$row["adres"] ."'></input></td>"."<td>".$row["woonplaats"] ."</td>"."</td><td><a href=bewerkpostcode.php?postcode=".$row["postcode"].">Bewerk</a></td></tr>";
                }
                echo "</table>";
            } else {
                Echo "0 results";
                echo "</table>";
            }
        ?>
    </div>
    <div class="container" id="main-content">
        <h><b>Postcode toevoegen</b></h><br>
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
