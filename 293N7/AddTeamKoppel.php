<?php

    include("connect.php");
    
        $data = array($_POST["team"],$_POST["lidnummer"]);
            $sql = "INSERT INTO teamlid (teamnaam,lidnummer) VALUES ('$data[0]','$data[1]')";
            
            if($conn->query($sql) === TRUE){
                echo "Lid succesvol toegevoegd";
            } else {
                echo "Error: ". $sql ."<br>". $conn->error;
            }
