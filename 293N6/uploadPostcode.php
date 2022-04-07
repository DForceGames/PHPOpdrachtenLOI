<?php

    include("connect.php");
    
            $postcode = $_POST["postcode"];
            $adres = $_POST["adres"];
            $woonplaats = $_POST["woonplaats"];
            $sql = "insert into postcode(Postcode,Adres,Woonplaats)
                    VALUES('". $postcode ."','". $adres ."','". $woonplaats ."')";
            
            if($conn->query($sql) === TRUE){
                echo "Succesvol geupload";
            } else {
                echo "Error: ". $sql ."<br>". $conn->error;
            }
