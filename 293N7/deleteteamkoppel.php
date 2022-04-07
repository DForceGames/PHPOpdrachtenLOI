<?php 

if($_GET['lidnummer']) {

    include("connect.php");

    $lidnummer = $_GET['lidnummer'];

    $sql = "DELETE FROM teamlid WHERE lidnummer='$lidnummer'";
            
            if($conn->query($sql) === TRUE){
                echo $sql;
                echo "Succesvol lid van team verwijderd";
            } else {
                echo "Error: ". $sql ."<br>". $conn->error;
            }

}
