<?php

    require_once("product.php");

    class CD extends Product{

        protected $track_count;
        protected $duration;



        public function __construct($id, $title, $price, $track, $dur){
            parent :: __construct($id, $title, $price);
            echo "<br>__CD construction__";
            $this->track_count = $track;
            $this->duration = $dur;
        }


        
        public function showInfo(){
            parent :: showInfo("CD");
            echo "ISBN: {$this->track_count} <br>";
            echo "Year: {$this->duration} <br>";
            
        }

    }


    




?>