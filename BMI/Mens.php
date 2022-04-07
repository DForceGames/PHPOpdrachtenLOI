<?php

    class Mens {
        public $gewicht;
        public $lengte;
        public $bmi;
        
        function __constructor($gewicht,$lengte) {
            $this->gewicht = $gewicht;
            $this->lengte = $lengte;
            $this->bmi = $gewicht/($lengte * $lengte);
        }
        
        function bmi($bmi) {
            switch ($bmi) {
                    case $bmi < 15:
                        echo "U heeft gevaarlijk ondergewicht <br>";
                        Break;
                    case $bmi >= 15 AND $bmi < 19:
                        echo "U hebt ondergewicht. <br>";
                        Break;
                    case $bmi >= 19 AND $bmi <= 25:
                        echo "U hebt een goed gewicht. <br>";
                        Break;
                    case $bmi > 25 AND $bmi <= 30:
                        echo "U heeft overgewicht. <br>";
                        Break;
                    case $bmi > 30 AND $bmi <= 35:
                        echo "U heeft Obesitas. <br>";
                        Break;
                    default:
                        echo "U zou naar een dokter moeten. <br>";
                        break;
                }    
            return $this->bmi;
        }
    }
