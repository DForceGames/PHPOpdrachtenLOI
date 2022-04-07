<?php 

if($_GET['lidnummer']) {

    include("connect.php");

    $lidnummer = $_GET['lidnummer'];

    $sql = "DELETE FROM lid WHERE lidnummer='$lidnummer'";
            
            if($conn->query($sql) === TRUE){
                echo "Succesvol lid verwijderd";
            } else {
                echo "Error: ". $sql ."<br>". $conn->error;
            }

}
