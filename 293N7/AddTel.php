<?php

    include("connect.php");
    
            $lidnummer = $_POST["lidnummer"];
            $telefoonnummer = $_POST["telefoon"];
            
            $sql = "insert into telefoonnummer(Lidnummer,telefoonnummer)
                    VALUES('". $lidnummer ."','". $telefoonnummer ."')";
            
            if($conn->query($sql) === TRUE){
                echo "Succesvol geupload";
            } else {
                echo "Error: ". $sql ."<br>". $conn->error;
            }
