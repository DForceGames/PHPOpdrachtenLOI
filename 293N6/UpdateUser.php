<?php

    include("connect.php");
            
    
    print_r($_POST);
            $lidnummer = $_POST["lidnummer"];
            $naam = $_POST["achternaam"];
            $voornaam = $_POST["voornaam"];
            $postcode = $_POST["postcode"];
            $huisnummer = $_POST["huisnummer"];
            
            $sql = "UPDATE lid
                    SET naam = '". $naam ."', voornaam = '". $voornaam ."', postcode = '". $postcode."', huisnummer = '". $huisnummer ."'"
                    . "WHERE lidnummer = '". $lidnummer."'";
            
            if($conn->query($sql) === TRUE){
                echo "Succesvol geupload";
            } else {
                echo "Error: ". $sql ."<br>". $conn->error;
            }