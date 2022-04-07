<?php

    include("connect.php");
    
        $data = array($_POST["lidnummer"],$_POST["achternaam"],$_POST["voornaam"],$_POST["postcode"],$_POST["huisnummer"]);
            $sql = "INSERT INTO lid (LidNummer,Naam,Voornaam,Postcode,Huisnummer) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')";
            
            if($conn->query($sql) === TRUE){
                echo "Lid succesvol toegevoegd";
            } else {
                echo "Error: ". $sql ."<br>". $conn->error;
            }
