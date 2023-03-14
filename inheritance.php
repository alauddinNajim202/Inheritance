<?php

    class fruit{

        public $name;
        public $color;

        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        public function intro(){
            echo "The fruit is {$this->name} and the color is {$this->color} ";
        }


    }


    class strawberry extends fruit {

        public $weight;

        public function __construct($name, $color, $weight){
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }


        public function intro(){
            echo "The fruit is {$this->name}, the color is {$this->color} and the weight is {$this->weight}";
        }


        // public function message(){
        //     echo "Am I a fruit or berry";
        // }

    }

    $strawberry = new strawberry("Strawberry", "red", 40);
    $strawberry->intro();





?>