<?php

    class Cirkel {
        public $diameter;
        
        function __construct($diameter) {
            $this->diameter = $diameter;
        }
        
        function oppervlakteCirkel() {
            $diameter = $this->diameter;
            $pi = 3.14;
            $straal = $diameter / 2;
            $oppervlakte = $pi * $straal * $straal; // berekenen oppervlakte
            $netoppervlakte = round($oppervlakte, 2); // oppervlakte afronden op 2 decimaal zodat het er netter uit ziet.
            
            return $netoppervlakte;
        }
        
        function omtrekCirkel() {
            $diameter = $this->diameter;
            $omtrek = $diameter * 3.14;
            return $omtrek;
        }
    }
