<?php

    require_once("product.php");


    class Book extends Product{

        protected $isbn_number;
        protected $publish_year;


        
        public function __construct($id, $title, $price, $isbn, $year){

            parent:: __construct($id, $title, $price);
            echo "<br> __Book construction__";
            $this->isbn_number = $isbn;
            $this->publish_year = $year;
            

        }

        public function showInfo(){
            parent :: showInfo("Book");
            echo "ISBN: {$this->isbn_number} <br>";
            echo "Year: {$this->publish_year} <br>";
            
        }


    }



?>