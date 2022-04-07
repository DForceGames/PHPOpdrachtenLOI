<?php

    include("connect.php");
    
            $lidnummer = $_POST["lidnummer"];
            $email = $_POST["email"];
            
            $sql = "insert into email(Lidnummer,email)
                    VALUES('". $lidnummer ."','". $email ."')";
            
            if($conn->query($sql) === TRUE){
                echo "Succesvol geupload";
            } else {
                echo "Error: ". $sql ."<br>". $conn->error;
            }