<?php

    include("connect.php");
    
            $sql = "delete lid, tel, email from lid lid
                    inner join telefoonnummer tel on tel.LidNummer = lid.LidNummer
                    inner join email on email.LidNummer = lid.LidNummer
                    where lid.LidNummer > 0";
            
            if($conn->query($sql) === TRUE){
                echo "Succesvol leden verwijderd";
            } else {
                echo "Error: ". $sql ."<br>". $conn->error;
            }
