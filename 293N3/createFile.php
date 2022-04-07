<?php

$array = array($_POST["titel"],$_POST["naam"],$_POST["adres"],$_POST["postcode"],$_POST["woonplaats"],$_POST["telefoonnummer"],$_POST["email"]);
$formFile = fopen($array[0], "w");

$txt = "Naam:" . $array[1]. "\n";
fwrite($formFile, $txt);
$txt = "Adres:" . $array[2]. "\n";
fwrite($formFile, $txt);
$txt = "Postcode:" . $array[3]. "\n";
fwrite($formFile, $txt);
$txt = "Woonplaats:" . $array[4]. "\n";
fwrite($formFile, $txt);
$txt = "Telnr:" . $array[5]. "\n";
fwrite($formFile, $txt);
$txt = "Email:" . $array[6] . "\n";
fwrite($formFile, $txt);
fclose($formFile);

$myFile = fopen($array[0], "r");
$lines = explode("\n", fread($myFile, filesize($array[0])));

echo "<h><b>Op ". date("Y/m/d") ." om ". date("h:i:s") . " uur is de volgende persoon ingelezen: </b></h><br>";
foreach ($lines as $value) {
    $newstr = str_replace(":", ": ", $value);
    echo $newstr. "<br>";
}

fclose($myFile);
